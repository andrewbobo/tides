<?php
/*
Template Name: Gallery
*/
get_header('gallery'); ?>

<nav class="breadcrumbs container">
    <div class="breadcrumbs-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>

        <?php if (is_page()): ?>
            <span class="separator"> | </span>
            <span><?php the_title(); ?></span>
        <?php endif; ?>
    </div>
</nav>

<div class="gallery">
    <div class="container">

        <?php if (have_rows('gallery')): ?>
            <?php while (have_rows('gallery')): the_row(); ?>
                <h1><?php echo esc_html(get_sub_field('title')); ?></h1>
                <p><?php echo esc_html(get_sub_field('description')); ?></p>

                <?php $selected_villas = get_sub_field('select_villa'); ?>
                <?php if (!empty($selected_villas)): ?>
                    <div class="gallery_villa">
                        <div class="gallery_villa_blocks">
                            <?php foreach ($selected_villas as $villa): ?>
                                <div class="gallery_villa_blocks_item">
                                    <?php if (has_post_thumbnail($villa->ID)): ?>
                                        <img src="<?php echo get_the_post_thumbnail_url($villa->ID, 'full'); ?>" alt="<?php echo esc_attr(get_the_title($villa->ID)); ?>">
                                    <?php endif; ?>

                                    <a href="<?php echo esc_url(get_permalink($villa->ID)); ?>" class="btn"><h2><?php echo esc_html(get_the_title($villa->ID)); ?></h2></a>

                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="gallery_video">
                    <div class="gallery_video_block">
                        <video autoplay muted loop width="463" height="273">
                            <source src="http://tilda/wp-content/uploads/2024/12/video-home.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <h2>the space</h2>
                    </div>

                    <div class="gallery_video_block">
                        <video autoplay muted loop width="463" height="273">
                            <source src="http://tilda/wp-content/uploads/2024/12/video-home.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <h2>the beach</h2>
                    </div>

                    <div class="gallery_video_block">
                        <video autoplay muted loop width="463" height="273">
                            <source src="http://tilda/wp-content/uploads/2024/12/video-home.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <h2>videos</h2>
                    </div>
                </div>



                <?php if (have_rows('section_rating')): ?>
                    <?php while (have_rows('section_rating')): the_row(); ?>
                        <section class="rating">
                            <div class="container">
                                <?php if ($title = get_sub_field('title')): ?>
                                    <h3 class="birth"><?php echo esc_html($title); ?></h3>
                                <?php endif; ?>
                                <div class="rating_blocks">
                                    <?php if (have_rows('rating_blocks')): ?>
                                        <?php while (have_rows('rating_blocks')): the_row(); ?>
                                            <?php
                                                $link = get_sub_field('link');
                                                $logo = get_sub_field('logo');
                                                $info = get_sub_field('info');
                                                $icon = get_sub_field('icon');
                                            ?>
                                            <div class="rating_blocks_block">
                                                <?php if (!empty($link)): ?>
                                                    <a href="<?php echo esc_url($link); ?>" target="_blank">
                                                        <?php if (!empty($logo)): ?>
                                                            <img src="<?php echo esc_url($logo); ?>" alt="<?php echo esc_attr($info ?? 'Rating logo'); ?>">
                                                        <?php endif; ?>
                                                        <?php if (!empty($info)): ?>
                                                            <h3><?php echo esc_html($info); ?></h3>
                                                        <?php endif; ?>
                                                        <?php if (!empty($icon)): ?>
                                                            <img src="<?php echo esc_url($icon); ?>" alt="icon">
                                                        <?php endif; ?>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <p>No rating blocks found.</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </section>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No section rating found.</p>
                <?php endif; ?>


            <?php endwhile; ?>
        <?php else: ?>
            <p>No gallery data available.</p>
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>
