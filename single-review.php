<?php
/**
 * Template for displaying a single review post
 */

 get_header('gallery'); ?>

<div class="container single-review-page">
    <div class="review-content">
        <h1 class="review-title"><?php the_title(); ?></h1>

        <?php
        // Получаем данные из группы ACF
        $reviews_group = get_field('reviews');

        if ($reviews_group):
            $rating = $reviews_group['rating'] ?? ''; // Поле rating
            $description = $reviews_group['description'] ?? ''; // Поле description
        ?>
            <div class="review-meta">
                <?php if ($rating): ?>
                    <p class="review-rating"><strong>Rating:</strong> <?php echo esc_html($rating); ?></p>
                <?php endif; ?>

                <?php if ($description): ?>
                    <p class="review-description"><strong>Description:</strong> <?php echo esc_html($description); ?></p>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <p>No additional review data available.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
