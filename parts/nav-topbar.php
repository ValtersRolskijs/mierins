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
            Mieriņš
        </a>
    </div>
    <div class="top-bar-right">
        <?php joints_top_nav(); ?>
        <div class="hamburger hide-for-large">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
</div>