            </div>
            <!-- /Content -->

            <?php get_sidebar(); ?>

            </div>
            <!-- /Container -->

            <div class="footer">
                <p class="copyright">&copy; 2014 <a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a>. Todos os direitos reservados.<br /><span>Por <a href="http://wordpress.org">WordPress</a>.</span></p>
                <p class="credits">Desenhado por <a href="http://wpshower.com">WPSHOWER</a></p>
            </div>
        </div>
        <!-- Page generated: <?php timer_stop(1); ?> s, <?php echo get_num_queries(); ?> queries -->
        <?php wp_footer(); ?>

        <?php echo (get_option('ga')) ? get_option('ga') : '' ?>

	</body>
</html>