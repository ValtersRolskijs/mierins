<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<main class="content">

        <?php

        if( have_rows('flexible') ):
            while( have_rows('flexible') ) : the_row();
                get_template_part( 'templates/blocks/layout', get_row_layout() );
            endwhile;
        endif;

        ?>

    </main>

<?php get_footer(); ?>