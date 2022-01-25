<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

    <main class="content single-news">

        <section class="news-hero">
            <?php the_post_thumbnail( 'full' ); ?>
            <h1 class="block-title"><?php the_title(); ?></h1>
        </section>

        <section class="news-content">
            <div class="container">
                <?php the_content(); ?>
            </div>
        </section>

    </main>

<?php get_footer(); ?>