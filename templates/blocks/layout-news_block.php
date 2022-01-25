<?php
/**
 * Layout for Gallery block.
 */

$block_title  = get_sub_field( 'title' );
$archive_link = get_sub_field( 'archive_link' );
$the_query    = new WP_Query( array( 'posts_per_page' => 6 ) );
?>

<section class="news-block">
    <div class="container">
        <?php if ( $block_title ) : ?>
            <h2 class="block-title"><?php echo esc_html( $block_title ); ?></h2>
        <?php endif; ?>
        <?php if ( $the_query->have_posts() ) : ?>
            <div class="news-slider owl-carousel">
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="news-post">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'large' ); ?>
                            <div class="news-title-box">
                                <h3 class="news-title"><?php the_title(); ?></h3>

                                <p class="excerpt"><?php echo esc_html( $the_query->post->post_excerpt ); ?></p>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php if ( $archive_link ) : ?>
                <div class="all-news">
                    <a class="button" href="<?php echo esc_url( $archive_link ); ?>"><?php esc_html_e( 'Visas ziņas', 'mierins' ); ?></a>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>
