<?php
/**
 * Layout for Hero block.
 */

$block_title  = get_sub_field( 'title' );
$block_text   = get_sub_field( 'text' );
$block_image  = get_sub_field( 'image' );

?>

<section class="hero-block">
    <?php if ( $block_image ): ?>
        <img class="hero-block__image" src="<?php echo esc_url( $block_image['url'] ); ?>" alt="<?php echo esc_attr( $block_image['alt'] ); ?>">
    <?php endif; ?>
    <div class="hero-block__content">
        <?php if ( $block_title ): ?>
            <h1 class="hero-title"><?php echo esc_html( $block_title ); ?></h1>
        <?php endif; ?>
        <?php if ( $block_text ): ?>
            <span class="hero-text"><?php echo esc_html( $block_text ); ?></span>
        <?php endif; ?>
    </div>
    <a class="scroll-down" href=""><span></span>Scroll</a>
</section>
