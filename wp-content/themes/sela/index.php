<?php
/**
 * The main template file.
 *
 * @package Sela
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) : ?>

<!--                --><?php //while (have_posts()) : the_post(); ?>

                    <?php get_template_part('content','me'); ?>

<!--                --><?php //endwhile; ?>

                <?php sela_content_nav('nav-below'); ?>

            <?php else : ?>

                <?php get_template_part('content'); ?>

            <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>