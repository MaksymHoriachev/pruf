<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pruf
 */

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
                    <li><a href="#" class="icon-facebook"></a></li>
                    <li><a href="#" class="icon-instagram"></a></li>
                    <li><a href="#" class="icon-vkontakte"></a></li>
                    <li><a href="#" class="icon-youtube"></a></li>
                </ul>
            </div>
            <div class="text-footer col-12 mt-4">
                <p>
                    При повному або частковому використанні матеріалів сайту посилання на
                    <a href="#">pruf.com.ua</a> є обов'язковим.
                </p>
                <p>
                    Редакція не завжди поділяє думку авторів, експертів та блогерів.
                </p>
            </div>
            <span class="copyright text-footer col-12">&copy; PRUF</span>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
