<?php
/*
Template Name: Connect Home
*/

get_header(); 
?>

<div class="connect-wrapper">

    <div class="connect-hero">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/connect/images/logo.png" 
        alt="Connect Logo" class="connect-logo">

        <h1 class="connect-title">Welcome to Connect</h1>
        <p class="connect-subtitle">The talking game that brings people closer 💬❤️</p>

        <div class="connect-buttons">
            <a href="#" class="connect-btn pink">Let's Talk</a>
            <a href="#" class="connect-btn beige">How to Play</a>
            <a href="#" class="connect-btn white">Download</a>
        </div>
    </div>

</div>

<?php
get_footer();
?>
