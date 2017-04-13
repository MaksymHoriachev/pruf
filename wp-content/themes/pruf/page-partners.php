<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pruf
 */

get_header(); ?>

    <div class="container">
        <h3 class="header-center">Партнеры</h3>
        <h3 class="header-center">Как присоединиться к PRUF? </h3>
        <div class="row">
            <div class="col-4">
                <div class="img-block">
                    <img src="img/13img.jpg" alt="img">
                </div>
            </div>
            <div class="col-8">
                <div class="text">
                    <p>Общественная организация, социальный бизнес (PR-консалтинг и PR-сопровождение) и медиа. Всё о PR. </p>
                    <p>Что такое PRUF? Это свежее образование в материи паблик рилейшнз, которое хочет выйти за рамки "простого пиара".</p>
                    <p>Которое верит в развитие и силу решений. </p>
                    <p>Которое интересуется интеграциями сфер деятельности и построением новых экосистем.</p>
                    <p>PRUF - PR U Forever - свежее образование в материи паблик рилейшнз. @pr.u.f</p>
                    <p>Слоган PRUF - PR НЕ РАДИ PR.</p>
                    <p>#PRUF - это РR ради большего.</p>
                    <p>Всё, что я хочу вам сказать - пиар неизбежен.</p>
                    <p> И если вы думаете, что вы к нему не относитесь - поздравляю, пиар уже вошёл незаметно в вашу жизнь ;)</p>
                    <p> И всё, что остаётся делать, это #PR_U_forever</p>
                </div>
                <a href="contacts.html" class="mt-3">Сылка на наши контакты</a>
            </div>
        </div>

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>

            </main><!-- #main -->
        </div><!-- #primary -->

    </div>



<?php
get_footer();