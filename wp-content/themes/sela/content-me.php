<?php
/**
 * @package Sela
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php sela_post_thumbnail(); ?>

    <header class="entry-header ">
        <?php if (is_single()) : ?>
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        <?php else : ?>
            <?php the_title('<h1 class="entry-title"><a href=" ' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>'); ?>
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-body">

        <?php if ('post' == get_post_type()) : ?>
            <div class="entry-meta">
                <?php sela_entry_meta(); ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>

        <?php if (is_search()) : // Only display Excerpts for Search ?>
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
        <?php else : ?>
            <div class="entry-content">

                <?php the_author();   // __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sela' ) ); ?>
                <?php the_date("Y年m月d日", "<span class='date'>发布于", "</span>"); ?>
                <?php
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . __('Pages:', 'sela'),
                    'after' => '</div>',
                ));
                ?>


                <?php
                $args = array(
                    'orderby' => 'name',
                    'order' => 'ASC',


                );
                $categories = get_tags($args);
                echo '<ul class="me-list_v">';
                foreach ($categories as $tag) {
                    echo ' <li class="tag-' . $tag->slug . '">';
                    echo ' <a href="' . get_category_link($tag->term_id) . '" title="' . sprintf(__("View all posts in %s"), $tag->name) . '" ' . '>' . $tag->name . $tag->child_of . ' </a>';

                    $args = array(
                        'numberposts' => 10,
                        'offset' => 0,
                        'tag' =>$tag->slug,
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'post_type' => 'post',
                        'post_status' => 'publish');
                    $posts_array = get_posts($args);
					echo '<br>';
                    echo '<ul class="me-list">';
                
                    foreach ($posts_array as $item) {
						 // $name=substr( $item->post_title ,stripos($item->post_title,":"),stripos($item->post_title,"-")-stripos($item->post_title,":") );
                        $name=substr( $item->post_title ,stripos($item->post_title,":"),stripos($item->post_title,"-")-stripos($item->post_title,":") );
                        $name=str_replace("|","",$name);					
						$img='<div class="imgbox"><img src="'.$item->icon.'"></div>';
                        echo '<li >'.'<a href="'.get_permalink( $item->ID,true ).'">' .$name .$img.'<a>'.'</li>';
                    }
                    echo '</ul>';

                    echo ' </li>';
                }
                echo '</ul>';
                ?>


            </div><!-- .entry-content -->
        <?php endif; ?>

        <?php if (is_single() && 'post' == get_post_type()) : ?>
            <footer class="entry-meta">
                <?php sela_footer_entry_meta(); ?>
            </footer><!-- .entry-meta -->
        <?php endif; ?>

        <?php sela_author_bio(); ?>
    </div><!-- .entry-body -->

</article><!-- #post-## -->
