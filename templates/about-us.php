<?php
/**
 * Template Name: About Us
 */
get_header('gallery'); ?>
<nav class="breadcrumbs container">
    <div class="breadcrumbs-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span class="separator"> | </span>
        <span><?php echo get_the_title(); ?></span>
    </div>
</nav>

<div class="about-us-page">
    <div class="container">
        <section class="about-us-intro">
            <h1><?php echo get_the_title(); ?></h1>
            <p class="about-us-intro-subdesc">
                <?php echo get_field('about')['description']; ?>
            </p>

            <?php if (have_rows('about')): ?>
                <?php $about = get_field('about'); ?>
                <?php if (isset($about['images']) && is_array($about['images'])): ?>
                    <div class="about-us-page-gallery">
                        <?php foreach ($about['images'] as $image): ?>
                            <img src="<?php echo esc_url($image['image']); ?>" alt="gallery">
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>


            <div class="about-us-intro-bg">
                <div class="about-us-intro-desc">
                    <?php echo wpautop(get_field('about')['main_info']); ?>
                </div>
                <p class="about-us-intro-subtitles container_short">
                    <?php echo get_field('about')['sub_titles']; ?>
                </p>
                <h4 class="about-us-intro-title">
                    <?php echo get_field('about')['title']; ?>
                </h4>
                <div class="about-us-intro-logo">
                    <?php $logo = get_field('about')['logo']; ?>
                    <?php if ($logo): ?>
                        <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                    <?php endif; ?>
                </div>
            </div>

            <div class="about-us-intro-img">
                <?php $main_image = get_field('about')['main_image']; ?>
                <?php if ($main_image): ?>
                    <img src="<?php echo esc_url($main_image); ?>" alt="main image">
                <?php endif; ?>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>
