<?php
/**
 * Template Name: Home Page
 */

if (!defined('ABSPATH')) exit;

get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <?php
            $hero_title = get_theme_mod('hero_title', 'Welcome to Our Site');
            $hero_text = get_theme_mod('hero_description', 'This is your hero section description.');
            ?>
            <h1><?php echo esc_html($hero_title); ?></h1>
            <p><?php echo esc_html($hero_text); ?></p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <?php
        while (have_posts()):
            the_post();
            get_template_part('template-parts/content', 'page');
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer(); 