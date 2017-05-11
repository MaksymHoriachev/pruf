<?php

?>
</div>
</div>
</div><!-- #content -->
<footer class="footer site-footer" id="colophon" role="contentinfo">
    <div class="container">
        <div class="row">
            <?php
            $args = array(
                'theme_location' => 'footer',
                'container' => '',
                'items_wrap' => '<ul class="media justify-content-md-between justify-content-center align-items-center">%3$s</ul>'
            );
            ?>
            <nav class="col-lg-6 col-12 footer-navigation">
                <?php wp_nav_menu($args); ?>
            </nav>
            <div class="social-network col-lg-6 media align-items-lg-center justify-content-lg-end col-12 justify-content-center">
                <ul class="media justify-content-center">

                    <?php if ( get_theme_mod( 'facebook_display' ) == 'Yes' ) { ?>
                        <li><a href="https://<?php echo get_theme_mod( 'facebook_link' ); ?>" target="_blank" rel="nofollow noopener" class="icon-facebook"></a></li>
                    <?php }; ?>

                    <?php if ( get_theme_mod( 'instagram_display' ) == 'Yes' ) { ?>
                        <li><a href="https://<?php echo get_theme_mod( 'instagram_link' ); ?>" target="_blank" rel="nofollow noopener" class="icon-instagram"></a></li>
                    <?php }; ?>

                    <?php if ( get_theme_mod( 'vk_display' ) == 'Yes' ) { ?>
                        <li><a href="https://<?php echo get_theme_mod( 'vk_link' ); ?>" target="_blank" rel="nofollow noopener" class="icon-vkontakte"></a></li>
                    <?php }; ?>

                    <?php if ( get_theme_mod( 'youtube_display' ) == 'Yes' ) { ?>
                        <li><a href="https://<?php echo get_theme_mod( 'youtube_link' ); ?>" target="_blank" rel="nofollow noopener" class="icon-youtube"></a></li>
                    <?php }; ?>

                </ul>
            </div>
            <div class="text-footer col-12 mt-4">
                <?php echo wpautop( get_theme_mod( 'footer_content' ) ); ?>
            </div>
            <span class="copyright text-footer col-12">&copy; <?php bloginfo( 'name' ); ?></span>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
