var map;
var geocoder;
var infowindow;
var centerChangedLast;
var reverseGeocodedLast;
var currentReverseGeocodeResponse;

function inicializarMapa() {
    
    //Localização inicial do mapa.
    var latlng = new google.maps.LatLng(-23.47338626537349, -46.63881820000001);

    //Opções do mapa.
    var myOptions =
    {
        zoom: 10,
        center: latlng,
        scaleControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        navigationControl: true,
        navigationControlOptions:
            {
                style: google.maps.NavigationControlStyle.ZOOM_PAN
            },
        mapTypeControl: true,
        mapTypeControlOptions:
            {
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            }
    };

    //Criação do mapa na div mapCanvas.
    map = new google.maps.Map(document.getElementById("mapCanvas"), myOptions);

    //Criação dos marcadores (markers) no mapa, que são carregados do XML que a página Dados.aspx retorna no Output Stream.
    downloadUrl("Dados.aspx", function (data) {
        
        var markers = data.documentElement.getElementsByTagName("marker");

        for (var i = 0; i < markers.length; i++) {
            
            //Recuperando os elementos do XML para criação do Marker.
            var latlng = new google.maps.LatLng(parseFloat(markers[i].getAttribute("lat")), parseFloat(markers[i].getAttribute("lng")));
            var marker = createMarker(markers[i].getAttribute("name"), latlng);
        }
    });

    //Função utilizada para a pesquisa no mapa.
    geocoder = new google.maps.Geocoder();

    configurarEventos();
}

function configurarEventos() {
    reverseGeocodedLast = new Date();
    centerChangedLast = new Date();

    setInterval(function () {
        if ((new Date()).getSeconds() - centerChangedLast.getSeconds() > 1) {
            if (reverseGeocodedLast.getTime() < centerChangedLast.getTime())
                reverseGeocode();
        }
    }, 1000);
}

//Cria o Marker no mapa.
function createMarker(name, latlng) {
    var marker = new google.maps.Marker(
    {
        position: latlng,
        map: map,
        title: name
    });

    google.maps.event.addListener(marker, "click", function () {
        if (infowindow) infowindow.close();

        //Utilizar no Infowindow content.
        //var paginaConteudoManicure = "<iframe src='minha_pagina.aspx'></iframe>";

        //content: name - é o conteúdo que será exibido no Marker, pode ser iframe como acima.
        infowindow = new google.maps.InfoWindow({ content: name });
        infowindow.open(map, marker);
    });

    return marker;
}

function reverseGeocode() {
    reverseGeocodedLast = new Date();
    geocoder.geocode({ latLng: map.getCenter() }, reverseGeocodeResult);
}

function reverseGeocodeResult(results, status) {
    currentReverseGeocodeResponse = results;

    if (status == 'OK') {
        //results[0].formatted_address;
    }
    else {
        alert("Ocorreu um erro ao realizar a pesquisa: " + status);
    }
}

function pesquisarLocal() {
    var address = document.getElementById("txtPesquisa").value;

    geocoder.geocode({
        'address': address,
        'partialmatch': true
    }, geocodeResult);
}

function geocodeResult(results, status) {
    if (status == 'OK' && results.length > 0) {
        map.fitBounds(results[0].geometry.viewport);
    }
    else {
        alert("Ocorreu um erro ao realizar a pesquisa: " + status);
    }
}

//Cria um XMLHttpRequest para realizar o POST na página ou URL para recuperar o retorno.
function createXmlHttpRequest() {
    try {
        if (typeof ActiveXObject != 'undefined') {
            return new ActiveXObject('Microsoft.XMLHTTP');
        }
        else if (window["XMLHttpRequest"]) {
            return new XMLHttpRequest();
        }
    }
    catch (e) {
        changeStatus(e);
    }

    return null;
};

//Invoca a função createXmlHttpRequest passando a URL a ser requisitada. 
function downloadUrl(url, callback) {
    var status = -1;
    var request = createXmlHttpRequest();

    if (!request) return false;

    request.onreadystatechange = function () {
        if (request.readyState == 4) {
            try {
                status = request.status;
            }
            catch (e) {
                // Usually indicates request timed out in FF.
            }
            if (status == 200) {
                callback(request.responseXML, request.status);
                request.onreadystatechange = function () { };
            }
        }
    }

    request.open('GET', url, true);

    try {
        request.send(null);
    }
    catch (e) {
        changeStatus(e);
    }
};

//Parse do XML de retorno.
function xmlParse(str) {
    if (typeof ActiveXObject != 'undefined' && typeof GetObject != 'undefined') {
        var doc = new ActiveXObject('Microsoft.XMLDOM');
        doc.loadXML(str);
        return doc;
    }

    if (typeof DOMParser != 'undefined') {
        return (new DOMParser()).parseFromString(str, 'text/xml');
    }

    return createElement('div', null);
}

function downloadScript(url) {
    var script = document.createElement('script');
    script.src = url;
    document.body.appendChild(script);
}