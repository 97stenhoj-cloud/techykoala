<?php
/**
 * Custom Header for Connect Sub-Site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/connect/css/connect.css" />
</head>

<body <?php body_class('connect-site'); ?>>

<header class="connect-header">
    <div class="connect-header-inner">

        <a href="/connect" class="connect-logo">
            <<img src="<?php echo get_stylesheet_directory_uri(); ?>/connect/images/small%20version.png" alt="Connect Logo">>
        </a>

        <<nav class="connect-nav">
    <a href="/connect">Home</a>
    <a href="/connect/features">Features</a>
    <a href="/connect/download">Download</a>
    <a href="/connect/support">Support</a>
    <a href="/connect/faq">FAQ</a>
</nav>

<a href="/connect/about">About</a>


    </div>
</header>
