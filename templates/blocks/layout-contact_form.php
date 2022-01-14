<?php
/**
 * Layout for Services block.
 */

$block_title = get_sub_field( 'title' );
$shortcode   = get_sub_field( 'form_code' );
?>

<section class="form-block">
    <div class="container">
        <h2 class="block-title"><?php echo esc_html( $block_title ); ?></h2>
        <div class="form">
            <?php echo do_shortcode( $shortcode ); ?>
        </div>
    </div>
</section>
