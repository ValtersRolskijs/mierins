<?php
/**
 * Layout for Gallery block.
 */

$block_title  = get_sub_field( 'title' );
$sections     = get_sub_field( 'section' );

?>

<section class="gallery-block">
    <?php if ( $block_title ) : ?>
        <h2 class="block-title"><?php echo esc_html( $block_title ); ?></h2>
    <?php endif; ?>
    <?php if ( $sections ) : ?>
    <ul class="gallery-filter">
        <?php foreach ( $sections as $section ) : ?>
            <li data-name="<?php echo esc_html( sanitize_title( $section['name'] ) ); ?>"><?php echo esc_html( $section['name'] ); ?></li>
        <?php endforeach; ?>
    </ul>
    <div class="gallery grid-x grid-margin-x grid-padding-x grid-margin-y grid-padding-y">
        <?php foreach ( $sections as $section ) : ?>
            <?php foreach ( $section['images'] as $image ) : ?>
                <div class="small-6 medium-4 large-3 cell">
                    <img class="gallery__image" src="<?php echo esc_url( $image['url'] ) ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</section>
