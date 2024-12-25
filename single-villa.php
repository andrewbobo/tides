<?php
get_header('gallery'); ?>

<nav class="breadcrumbs container">
    <div class="breadcrumbs-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span class="separator"> | </span>
        <a href="/gallery/">Gallery</a>
        <span class="separator"> | </span>
        <span><?php the_title(); ?></span>
    </div>
</nav>

<div class="villa-page">
    <div class="container">
        <h1 class="villa-title"><?php the_title(); ?></h1>
    </div>

    <?php if (have_rows('gallery_section')): ?>
        <div class="villa-gallery">
            <?php while (have_rows('gallery_section')): the_row(); ?>
                <?php
                $section_title = get_sub_field('title');
                $gallery = get_sub_field('gallery_interior');
                ?>

                <?php if (!empty($section_title)): ?>
                    <div class="gallery-section-title container">
                        <h2><?php echo esc_html($section_title); ?></h2>
                    </div>
                <?php endif; ?>

                <?php if (!empty($gallery) && is_array($gallery)): ?>
                    <?php
                    $pattern = [
                        'full-width' => 1,
                        'two-images' => 2,
                        'three-images' => 3,
                        'three-images-centered' => 3,
                    ];

                    $index = 0;
                    $total = count($gallery);

                    while ($index < $total):
                        foreach ($pattern as $type => $count):
                            if ($index >= $total) {
                                break;
                            }

                            if ($type === 'full-width'): ?>
                                <div class="gallery-row full-width">
                                    <img src="<?php echo esc_url($gallery[$index]['url']); ?>" alt="Full Image">
                                </div>
                                <?php $index++;
                            elseif ($type === 'two-images'): ?>
                                <div class="gallery-row two-images">
                                    <?php for ($i = 0; $i < $count && $index < $total; $i++, $index++): ?>
                                        <img src="<?php echo esc_url($gallery[$index]['url']); ?>" alt="Image <?php echo $index + 1; ?>">
                                    <?php endfor; ?>
                                </div>
                            <?php
                            elseif ($type === 'three-images'): ?>
                                <div class="gallery-row three-images container">
                                    <?php for ($i = 0; $i < $count && $index < $total; $i++, $index++): ?>
                                        <img src="<?php echo esc_url($gallery[$index]['url']); ?>" alt="Image <?php echo $index + 1; ?>">
                                    <?php endfor; ?>
                                </div>
                            <?php
                            elseif ($type === 'three-images-centered' && $index + 2 < $total): ?>
                                <div class="gallery-row three-images-centered">
                                    <div class="side-image">
                                        <img src="<?php echo esc_url($gallery[$index]['url']); ?>" alt="Image Left">
                                    </div>
                                    <div class="wide-center">
                                        <img src="<?php echo esc_url($gallery[$index + 1]['url']); ?>" alt="Wide Center">
                                    </div>
                                    <div class="side-image">
                                        <img src="<?php echo esc_url($gallery[$index + 2]['url']); ?>" alt="Image Right">
                                    </div>
                                </div>
                                <?php $index += 3;
                            endif;
                        endforeach;
                    endwhile;
                    ?>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <p>No gallery sections found.</p>
    <?php endif; ?>

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
</div>

<?php get_footer(); ?>
