<?php
/**
 * Template Name: Reviews
 */
get_header('gallery'); ?>
<nav class="breadcrumbs container">
    <div class="breadcrumbs-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span class="separator"> | </span>
        <span><?php echo get_the_title(); ?></span>
    </div>
</nav>

<div class="review">
  <h1 class="container"><?php echo get_the_title(); ?></h1>
  <section class="">
      <div class="reviews_container">
          <div class="reviews_slider">
              <?php
              $review_group = get_field('review');

              if ($review_group && isset($review_group['review'])) {
                  $review_posts = $review_group['review'];

                  if (is_array($review_posts)) {
                      foreach ($review_posts as $review_post) {
                          $thumbnail_url = get_the_post_thumbnail_url($review_post, 'full');
                          $reviews_group = get_field('reviews', $review_post->ID);
                          $rating = $reviews_group['rating'] ?? '';
                          $description = $reviews_group['description'] ?? '';
                          ?>
                          <div class="review_item">
                              <?php if ($thumbnail_url): ?>
                                  <div class="review-thumbnail">
                                      <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($review_post->post_title); ?>">
                                  </div>
                              <?php endif; ?>

                              <h4>
                                  <?php echo esc_html($review_post->post_title); ?>
                                  <?php if ($rating): ?>
                                      <span><?php echo esc_html($rating); ?></span>
                                  <?php endif; ?>
                              </h4>

                              <?php if ($description): ?>
                                  <p><?php echo wp_kses_post($description); ?></p>
                              <?php endif; ?>

                              <a class="btn_white" href="<?php echo esc_url(get_permalink($review_post)); ?>" target="_blank">Show More</a>
                          </div>
                          <?php
                      }
                  } else {
                      $review_post = $review_posts;

                      $thumbnail_url = get_the_post_thumbnail_url($review_post, 'medium');
                      $reviews_group = get_field('reviews', $review_post->ID);
                      $rating = $reviews_group['rating'] ?? '';
                      $description = $reviews_group['description'] ?? '';
                      ?>
                      <div class="review_item">
                          <?php if ($thumbnail_url): ?>
                              <div class="review-thumbnail">
                                  <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($review_post->post_title); ?>">
                              </div>
                          <?php endif; ?>

                          <h4>
                              <?php echo esc_html($review_post->post_title); ?>
                              <?php if ($rating): ?>
                                  <span><?php echo esc_html($rating); ?></span>
                              <?php endif; ?>
                          </h4>

                          <?php if ($description): ?>
                              <p><?php echo wp_kses_post($description); ?></p>
                          <?php endif; ?>

                          <a class="btn_white" href="<?php echo esc_url(get_permalink($review_post)); ?>" target="_blank">Show More</a>
                      </div>
                      <?php
                  }
              } else {
                  echo '<p>No reviews selected.</p>';
              }
              ?>
          </div>
      </div>
  </section>
</div>



<?php if (have_rows('review')): ?>
    <?php while (have_rows('review')): the_row(); ?>
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
                                        <?php if ($link): ?>
                                            <a href="<?php echo esc_url($link); ?>" target="_blank">
                                                <?php if ($logo): ?>
                                                    <img src="<?php echo esc_url($logo); ?>" alt="<?php echo esc_attr($info ?? 'Rating logo'); ?>">
                                                <?php endif; ?>
                                                <?php if ($info): ?>
                                                    <h3><?php echo esc_html($info); ?></h3>
                                                <?php endif; ?>
                                                <?php if ($icon): ?>
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
    <p>No review data found.</p>
<?php endif; ?>

<?php
$review_group = get_field('review');

if ($review_group && !empty($review_group['our_villas'])): ?>
    <section class="villas">
        <div class="">
            <?php if (!empty($review_group['title_our_villas'])): ?>
                <h2 class="section-title"><?php echo esc_html($review_group['title_our_villas']); ?></h2>
            <?php endif; ?>
            <div class="villas-grid">
                <?php foreach ($review_group['our_villas'] as $villa): ?>
                    <div class="villa-item">
                        <?php if (!empty($villa['image'])): ?>
                            <div class="villa-image">
                                <img src="<?php echo esc_url($villa['image']); ?>" alt="<?php echo esc_attr($villa['title']); ?>">
                            </div>
                        <?php endif; ?>

                        <div class="villa-details">
                            <h3 class="villa-title">
                                <?php echo esc_html($villa['title']); ?>
                                <span class="villa-size"><?php echo esc_html($villa['size']); ?></span>
                            </h3>

                            <?php if (!empty($villa['amenities']) && is_array($villa['amenities'])): ?>
                                <ul class="villa-amenities">
                                    <?php foreach ($villa['amenities'] as $amenity): ?>
                                        <?php
                                            $words = explode(' ', $amenity['title'], 2);
                                            $first_word = $words[0] ?? '';
                                            $rest_of_text = $words[1] ?? '';
                                            $class_name = strtolower(str_replace(' ', '-', $first_word));
                                        ?>
                                        <li class="<?php echo esc_attr($class_name); ?>">
                                            <span class="amenity-highlight"><?php echo esc_html($first_word); ?></span>
                                            <?php echo esc_html($rest_of_text); ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>



                            <?php if (!empty($villa['link'])): ?>
                                <a class="btn" href="<?php echo esc_url($villa['link']); ?>" target="_blank">
                                    <?php echo esc_html('Book Now'); ?>
                                </a>
                            <?php endif; ?>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>



<?php get_footer(); ?>
