<?php
/**
 * Layout for Services block.
 */

$text  = get_sub_field( 'text' );
$phone = get_sub_field( 'phone' );
?>

<section class="contact-us">
    <div class="container container--large">
        <span class="contact-us__text"><?php echo esc_html( $text ); ?> <a href="tel:<?php echo esc_attr( $phone ); ?>"><?php echo esc_html( $phone ); ?></a></span>
    </div>
</section>
