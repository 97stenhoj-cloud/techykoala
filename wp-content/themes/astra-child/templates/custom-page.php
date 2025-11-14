<?php
/**
 * Template Name: Custom Page
 * Description: A fully custom blank page template for Astra Child Theme.
 */

get_header();
?>

<div class="custom-page-wrapper">
    <h1>Custom Page Template</h1>
    <p>You can now customize this page freely.</p>

    <?php
    // Load page content normally
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
</div>

<?php
get_footer();
