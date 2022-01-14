<?php
/**
 * Layout for Gallery block.
 */

$block_title  = get_sub_field( 'title' );
$sections     = get_sub_field( 'section' );
$filter       = isset( $_GET['filter'] ) ? $_GET['filter'] : false;
?>

<section class="gallery-block">
    <?php if ( $block_title ) : ?>
        <h2 class="block-title"><?php echo esc_html( $block_title ); ?></h2>
    <?php endif; ?>
    <?php if ( $sections ) : ?>
        <div class="gallery-filter">
            <?php $active_item = $filter ? $filter : __( 'Filtrēt', 'mierins' ); ?>
            <span class="gallery-filter__active-tiem"><?php echo esc_html( $active_item ); ?></span>
            <ul class="gallery-filter__dropdown hidden">
                <?php $item_class = $filter ? '' : ' active'; ?>
                <li class="gallery-filter__item<?php echo esc_attr( $item_class ); ?>">
                    <a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Visi', 'mierins' ); ?></a>
                </li>
                <?php foreach ( $sections as $section ) : ?>
                    <?php $item_class = $filter && $filter == $section['name'] ? ' active' : ''; ?>
                    <li class="gallery-filter__item<?php echo esc_attr( $item_class ); ?>">
                        <?php $link = add_query_arg( array( 'filter' => $section['name'] ), get_permalink() ); ?>
                        <a href="<?php echo esc_url( $link ); ?>">
                            <?php echo esc_html( $section['name'] ); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="gallery">
            <?php foreach ( $sections as $section ) : ?>
                <?php if ( $filter && $section['name'] != $filter ) :
                    continue;
                endif; ?>
                <?php foreach ( $section['images'] as $image ) : ?>
                    <div class="gallery__image">
                        <a href="<?php echo esc_url( $image['url'] ) ?>" data-fancybox="gallery">
                            <img class="image" src="<?php echo esc_url( $image['url'] ) ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>
