<?php
/**
 * Layout for Services block.
 */

$block_title      = get_sub_field( 'title' );
$services         = get_sub_field( 'services' );
$change_direction = false;
?>

<section class="services-block">
    <div class="container container--large">
        <h2 class="block-title"><?php echo esc_html( $block_title ); ?></h2>
        <?php foreach ( $services as $service ) : ?>
            <?php
            $service_title = $service['name'];
            $service_image = $service['image'];
            $service_desc  = $service['description'];
            $service_link  = $service['link'];

            $direction = $change_direction ? 'right' : 'left';
            $change_direction = !$change_direction;
            ?>
            <div class="service grid-x direction--<?php echo esc_attr( $direction ); ?>">
                <div class="small-8 cell">
                    <img class="service__image" src="<?php echo esc_url( $service_image['url'] ); ?>" alt="<?php echo esc_attr( $service_image['alt'] ); ?>">
                </div>
                <div class="small-4 cell service-cell">
                    <div class="service__content">
                        <h3 class="service__title"><?php echo esc_html( $service_title ); ?></h3>
                        <p><?php echo apply_filters( 'the_content', $service_desc ); ?></p>
                        <?php if ( isset( $service_link['url'] ) ) : ?>
                            <a class="service__link read-more" href="<?php echo esc_url( $service_link['url'] ); ?>"><?php esc_html_e( 'Lasīt vairāk', 'mierins' ); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
