<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/responsive-navigation/
 */
?>

<div class="container top-bar" id="main-menu">
    <div class="top-bar-left">
        <a class="logo-text" href="/">
<!--            <img class="logo" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/mierins-logo.png?>" alt="site-logo">-->
            Mieriņš
        </a>
    </div>
    <div class="top-bar-right">
        <?php joints_top_nav(); ?>
    </div>
</div>