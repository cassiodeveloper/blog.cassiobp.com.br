<form method="get" id="searchform" action="<?php bloginfo('home');?>">
	<div><input type="text" value="Pesquisar..." name="s" id="s" onfocus="if (this.value == 'Pesquisar...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Pesquisar...';}" />
		<input type="submit" id="searchsubmit" value="" />
	</div>
</form>