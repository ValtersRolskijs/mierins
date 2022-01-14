<?php
/**
 * Layout for Services block.
 */

$block_title   = get_sub_field( 'title' );
$image         = get_sub_field( 'image' );
$show_contacts = get_sub_field( 'show_contacts' );

$work_hours    = get_field('work_hours', 'options');
$contacts      = get_field('contacts', 'options');
$location_link = 'http://maps.google.com/?q=' . $contacts['location'];
$phone_img     = get_svg_icon( 'phone-solid' );
$email_img     = get_svg_icon( 'envelope-solid' );
$location_img  = get_svg_icon( 'map-marker-alt-solid' );
?>

<section class="contact-block">
    <div class="container">
        <h2 class="block-title"><?php echo esc_html( $block_title ); ?></h2>
        <div class="map-container card-box">
            <div class="grid-x">
                <div class="small-12 large-6 cell">
                    <img class="image" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                </div>
                <div class="small-12 large-6 cell">
                    <div class="map">
                        <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2128.085401582035!2d24.87577725200346!3d57.76595254231624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46ec72a4aae0fcd3%3A0x97503f967db64d04!2zS2FmZWpuxKtjYSBNaWVyacWGxaE!5e0!3m2!1slv!2slv!4v1642110230909!5m2!1slv!2slv"
                                width="100%"
                                height="100%"
                                style="display: block; border:0; min-height: 500px;"
                                allowfullscreen=""
                                loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        <?php if ( $show_contacts ) : ?>
            <div class="grid-x grid-margin-y">
                <div class="small-12 large-6 cell contact-block__contacts">
                    <h3 class="block-title block-title--small"><?php esc_html_e( 'Kontakti', 'mierins' ); ?></h3>
                    <ul class="contacts card-box">
                        <?php if ( $contacts['phones'] ): ?>
                            <?php foreach ( $contacts['phones'] as $phone ) : ?>
                                <li class="phone"><?php echo $phone_img; ?><?php echo esc_html( $phone['name'] ); ?>: <a href="tel:<?php echo esc_attr( $phone['phone'] ); ?>"><?php echo esc_attr( $phone['phone'] ); ?></a></li>
                            <?php endforeach; ?>
                            <?php if ( $contacts['email'] ): ?>
                                <li class="email"><?php echo $email_img; ?><?php esc_html_e( 'E-pasts', 'mierins' ); ?>: <a href="mailto:<?php esc_attr( $contacts['email'] ); ?>"><?php echo esc_html( $contacts['email'] ); ?></a></li>
                            <?php endif; ?>
                            <?php if ( $contacts['location'] ): ?>
                                <li class="location"><?php echo $location_img; ?><?php esc_html_e( 'Addrese', 'mierins' ); ?>: <a href="<?php echo esc_url( $location_link ); ?>" target="_blank"><?php echo esc_html( $contacts['location'] ); ?></a></li>
                            <?php endif; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="small-12 large-6 cell contact-block__work-hours">
                    <?php if ( $work_hours ) : ?>
                        <h3 class="block-title block-title--small"><?php esc_html_e( 'Darba laiks', 'mierins' ); ?></h3>
                        <div class="grid-x work-hours card-box">
                            <?php foreach ( $work_hours as $item ): ?>
                                <div class="small-6 day">
                                    <?php echo esc_html( $item['day'] ); ?>
                                </div>
                                <div class="small-6 hours">
                                    <?php echo esc_html( $item['hours'] ); ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
