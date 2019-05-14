        </main>

        <?php get_template_part('partials/footer_site' ); ?>

        <?php get_template_part('partials/modals' ); ?>

        <?php //get_template_part('partials/viewport_label' ); ?>

        <div id="scripts">
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-"></script>
            <script>
            	window.dataLayer = window.dataLayer || [];
            	function gtag(){dataLayer.push(arguments);}
            	gtag('js', new Date());
            	gtag('config', 'UA-');
            </script> -->
            <?php if( is_page(21) ){ ?>
                <script src="<?php bloginfo('template_directory'); ?>/js/isotope.js"></script>
            <?php } ?>
            <?php if( is_singular('projects')){ ?>
                <script src="<?php bloginfo('template_directory'); ?>/js/masonry.js"></script>
            <?php } ?>
        </div>

        <?php wp_footer(); ?>

    </body>
    </html>
