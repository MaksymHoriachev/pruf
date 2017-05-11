<?php

get_header(); ?>

            <div class="col-12 front-section">
                <div class="front-container">
                    <h2 class="heading"><?php echo get_theme_mod( 'home_page_title' ); ?></h2>
                    <p class="text-main-page">
                        <?php echo wpautop( get_theme_mod( 'home_page_text' ) ); ?>
                    </p>
                </div>
            </div>


        </div>
    </div>
</div><!-- #content -->

<?php wp_footer(); ?>

</body>
</html>
