<?php
/**
 * Layout for All news block.
 */

$args = array(
    'posts_per_page' => -1,
);

$the_query = new WP_Query( $args );
?>

<section class="news-archive">
    <div class="container">
        <div class="news-grid grid-x grid-padding-x">

            <?php if ( $the_query->have_posts() ) : ?>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="news-cell small-12 medium-2 large-4 cell">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'large' ); ?>
                            <h2 class="block-title block-title--small"><?php the_title(); ?></h2>
                        </a>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        </div>
    </div>
</section>
