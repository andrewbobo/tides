<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>

<main id="main-content">

  <section class="home_video">
    <?php if (have_rows('video_section')): ?>
        <?php while (have_rows('video_section')): the_row(); ?>
            <div class="video-background">
              <?php if ($video_url = get_sub_field('video')): ?>
                  <video autoplay muted loop playsinline>
                      <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                  </video>
              <?php endif; ?>
                <div class="container">
                    <div class="content">
                        <?php if ($title = get_sub_field('title')): ?>
                            <h1><?php echo esc_html($title); ?></h1>
                        <?php endif; ?>
                        <?php if ($sub_title = get_sub_field('sub_title')): ?>
                            <p><?php echo esc_html($sub_title); ?></p>
                        <?php endif; ?>
                        <?php if ($button_url = get_sub_field('button')): ?>
                            <a href="<?php echo esc_url($button_url); ?>" class="btn-cls">BOOK NOW</a>
                        <?php endif; ?>
                    </div>
                    <img src="<?php echo esc_url(site_url('/wp-content/uploads/2024/12/down.gif')); ?>" alt="down">
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
  </section>

  <section class="container booking">
      <?php if (have_rows('section_benefits')): ?>
          <?php while (have_rows('section_benefits')): the_row(); ?>
              <div class="booking_logo">
                  <?php
                  $logo = get_sub_field('logo');
                  if ($logo): ?>
                      <img src="<?php echo esc_url($logo); ?>" alt="Logo" class="booking_logo">
                  <?php endif; ?>
              </div>

              <div class="booking_widget">
                  <img src="http://tilda/wp-content/uploads/2024/12/Frame-28.png" alt="booking" class="booking_logo">
              </div>

              <div class="booking_benef">
                  <?php
                  $title_section = get_sub_field('title_section');
                  if ($title_section): ?>
                      <h2><?php echo esc_html($title_section); ?></h2>
                  <?php endif; ?>

                  <div class="booking_benef_blocks">
                      <?php if (have_rows('benefits_blocks')): ?>
                          <?php while (have_rows('benefits_blocks')): the_row(); ?>
                              <div class="booking_benef_blocks_block">
                                  <?php
                                  $icon = get_sub_field('icon');
                                  if ($icon): ?>
                                      <img src="<?php echo esc_url($icon); ?>" alt="Benefit Icon" class="booking_benef_blocks_block_img">
                                  <?php endif; ?>

                                  <?php
                                  $title = get_sub_field('title');
                                  if ($title): ?>
                                      <h3 class="booking_benef_blocks_block_title"><?php echo esc_html($title); ?></h3>
                                  <?php endif; ?>
                              </div>
                          <?php endwhile; ?>
                      <?php endif; ?>
                  </div>
              </div>
          <?php endwhile; ?>
      <?php endif; ?>
  </section>


  <?php if (have_rows('section_favorite')): ?>
    <?php while (have_rows('section_favorite')): the_row(); ?>
        <section class="favorite" style="background: url('<?php echo esc_url(get_sub_field('bg_image')); ?>'); background-size: cover; background-position: center;">
            <div class="container">
                <div class="favorite_icon">
                    <img src="<?php echo esc_url(get_sub_field('logo')); ?>" alt="Favorite Icon">
                </div>
                <?php if ($title = get_sub_field('title')): ?>
                    <p><?php echo esc_html($title); ?></p>
                <?php endif; ?>
                <?php if ($button = get_sub_field('button')): ?>
                    <a href="<?php echo esc_url($button); ?>" class="btn-cls m-none">BOOK a stay</a>
                <?php endif; ?>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="164" height="52" viewBox="0 0 164 52" fill="none">
                    <g clip-path="url(#clip0_28_332)">
                      <path d="M86.4316 13.0651C86.4316 14.9389 84.9458 16.4484 83.1014 16.4484C81.257 16.4484 79.7712 14.9389 79.7712 13.0651C79.7712 11.1912 81.2057 9.68168 83.1014 9.68168C84.9971 9.73373 86.4316 11.2432 86.4316 13.0651ZM72.7009 19.8839C72.7009 20.1962 72.7009 20.7167 72.7009 20.7167C72.7009 20.7167 71.1127 18.6346 67.7312 18.6346C62.1467 18.6346 57.7918 22.955 57.7918 28.9409C57.7918 34.8749 62.0955 39.2472 67.7312 39.2472C71.1639 39.2472 72.7009 37.1131 72.7009 37.1131V37.998C72.7009 38.4144 73.0083 38.7267 73.4182 38.7267H77.5681V19.1552C77.5681 19.1552 73.7768 19.1552 73.4182 19.1552C73.0083 19.1552 72.7009 19.5195 72.7009 19.8839ZM72.7009 32.4284C71.9324 33.5736 70.3954 34.5626 68.5509 34.5626C65.272 34.5626 62.7615 32.4805 62.7615 28.9409C62.7615 25.4014 65.272 23.3193 68.5509 23.3193C70.3441 23.3193 71.9836 24.3604 72.7009 25.4535V32.4284ZM80.6422 19.1552H85.5606V38.7267H80.6422V19.1552ZM154.112 18.6346C150.73 18.6346 149.142 20.7167 149.142 20.7167V9.73373H144.224V38.7267C144.224 38.7267 148.015 38.7267 148.374 38.7267C148.783 38.7267 149.091 38.3624 149.091 37.998V37.1131C149.091 37.1131 150.679 39.2472 154.06 39.2472C159.645 39.2472 164 34.8749 164 28.9409C164 23.007 159.645 18.6346 154.112 18.6346ZM153.292 34.5105C151.396 34.5105 149.911 33.5215 149.142 32.3764V25.4014C149.911 24.3604 151.55 23.2673 153.292 23.2673C156.571 23.2673 159.081 25.3493 159.081 28.8889C159.081 32.4284 156.571 34.5105 153.292 34.5105ZM141.662 27.1191V38.7788H136.743V27.6917C136.743 24.4645 135.719 23.1632 132.952 23.1632C131.466 23.1632 129.929 23.9439 128.956 25.0891V38.7267H124.037V19.1552H127.931C128.341 19.1552 128.648 19.5195 128.648 19.8839V20.7167C130.083 19.2072 131.979 18.6346 133.874 18.6346C136.026 18.6346 137.819 19.2593 139.254 20.5085C140.996 21.966 141.662 23.8398 141.662 27.1191ZM112.1 18.6346C108.718 18.6346 107.13 20.7167 107.13 20.7167V9.73373H102.212V38.7267C102.212 38.7267 106.003 38.7267 106.362 38.7267C106.772 38.7267 107.079 38.3624 107.079 37.998V37.1131C107.079 37.1131 108.667 39.2472 112.049 39.2472C117.633 39.2472 121.988 34.8749 121.988 28.9409C122.039 23.007 117.684 18.6346 112.1 18.6346ZM111.28 34.5105C109.384 34.5105 107.899 33.5215 107.13 32.3764V25.4014C107.899 24.3604 109.538 23.2673 111.28 23.2673C114.559 23.2673 117.07 25.3493 117.07 28.8889C117.07 32.4284 114.559 34.5105 111.28 34.5105ZM97.9593 18.6346C99.445 18.6346 100.214 18.8949 100.214 18.8949V23.5275C100.214 23.5275 96.1148 22.1221 93.5531 25.0891V38.7788H88.6347V19.1552C88.6347 19.1552 92.426 19.1552 92.7846 19.1552C93.1945 19.1552 93.5019 19.5195 93.5019 19.8839V20.7167C94.4241 19.6236 96.4222 18.6346 97.9593 18.6346ZM46.879 36.957C46.6228 36.3323 46.3666 35.6557 46.1105 35.0831C45.7006 34.1461 45.2907 33.2613 44.9321 32.4284L44.8808 32.3764C41.3457 24.5686 37.5544 16.6567 33.5581 8.84885L33.4044 8.53654C32.9946 7.75576 32.5847 6.92292 32.1748 6.09009C31.6625 5.15315 31.1501 4.16416 30.3304 3.22723C28.6909 1.14514 26.3341 0 23.8237 0C21.262 0 18.9565 1.14515 17.2657 3.12312C16.4972 4.06006 15.9336 5.04905 15.4213 5.98599C15.0114 6.81882 14.6016 7.65165 14.1917 8.43243L14.038 8.74474C10.093 16.5526 6.25042 24.4645 2.71528 32.2723L2.66404 32.3764C2.3054 33.2092 1.89553 34.0941 1.48566 35.031C1.22949 35.6036 0.973321 36.2282 0.717151 36.9049C0.051109 38.8308 -0.153827 40.6526 0.102343 42.5265C0.665917 46.4304 3.22762 49.7097 6.76276 51.1672C8.09484 51.7397 9.47816 52 10.9127 52C11.3226 52 11.8349 51.9479 12.2448 51.8959C13.9355 51.6877 15.6775 51.1151 17.3682 50.1261C19.4688 48.9289 21.4669 47.2112 23.7212 44.7127C25.9755 47.2112 28.0249 48.9289 30.0742 50.1261C31.7649 51.1151 33.5069 51.6877 35.1976 51.8959C35.6075 51.9479 36.1198 52 36.5297 52C37.9643 52 39.3988 51.7397 40.6797 51.1672C44.266 49.7097 46.7765 46.3784 47.3401 42.5265C47.75 40.7047 47.545 38.8829 46.879 36.957ZM23.7724 39.6637C21.0058 36.1241 19.2126 32.7928 18.5978 29.982C18.3416 28.7848 18.2904 27.7437 18.4441 26.8068C18.5466 25.974 18.854 25.2452 19.2639 24.6206C20.2373 23.2152 21.8768 22.3303 23.7724 22.3303C25.6681 22.3303 27.3588 23.1632 28.281 24.6206C28.6909 25.2452 28.9983 25.974 29.1008 26.8068C29.2545 27.7437 29.2033 28.8368 28.9471 29.982C28.3323 32.7407 26.5391 36.0721 23.7724 39.6637ZM44.2148 42.1101C43.8562 44.8168 42.063 47.1592 39.5525 48.2002C38.3229 48.7207 36.9908 48.8769 35.6587 48.7207C34.3779 48.5646 33.097 48.1481 31.7649 47.3674C29.9205 46.3263 28.0761 44.7127 25.9243 42.3183C29.3057 38.1021 31.3551 34.2502 32.1236 30.8148C32.4822 29.2012 32.5335 27.7437 32.3798 26.3904C32.1748 25.0891 31.7137 23.8919 30.9964 22.8509C29.4082 20.5085 26.744 19.1552 23.7724 19.1552C20.8009 19.1552 18.1367 20.5606 16.5485 22.8509C15.8312 23.8919 15.3701 25.0891 15.1651 26.3904C14.9602 27.7437 15.0114 29.2533 15.4213 30.8148C16.1898 34.2502 18.2904 38.1542 21.6206 42.3704C19.52 44.7648 17.6244 46.3784 15.7799 47.4194C14.4479 48.2002 13.167 48.6166 11.8862 48.7728C10.5028 48.9289 9.17076 48.7207 7.99238 48.2523C5.48191 47.2112 3.68872 44.8689 3.33008 42.1622C3.17638 40.8609 3.27885 39.5596 3.79119 38.1021C3.94489 37.5816 4.20106 37.0611 4.45723 36.4364C4.81587 35.6036 5.22574 34.7187 5.63561 33.8338L5.68685 33.7297C9.22199 25.974 13.0133 18.0621 16.9583 10.3584L17.112 10.046C17.5219 9.26526 17.9318 8.43243 18.3416 7.65165C18.7515 6.81882 19.2126 6.03804 19.7762 5.36136C20.8521 4.11211 22.2867 3.43544 23.8749 3.43544C25.4632 3.43544 26.8977 4.11211 27.9736 5.36136C28.5372 6.03804 28.9983 6.81882 29.4082 7.65165C29.8181 8.43243 30.2279 9.26526 30.6378 10.046L30.7915 10.3584C34.6853 18.1141 38.4766 26.026 42.0117 33.7818V33.8338C42.4216 34.6667 42.7803 35.6036 43.1901 36.4364C43.4463 37.0611 43.7025 37.5816 43.8562 38.1021C44.266 39.4555 44.4197 40.7568 44.2148 42.1101Z" fill="#FF5A5F"/>
                    </g>
                    <defs>
                      <clipPath id="clip0_28_332">
                        <rect width="164" height="52" fill="white"/>
                      </clipPath>
                    </defs>
                  </svg>
                </a>
            </div>
        </section>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php if (have_rows('section_info')): ?>
      <?php while (have_rows('section_info')): the_row(); ?>
          <section class="info container">
              <?php if ($title = get_sub_field('title')): ?>
                  <h3 class="birth"><?php echo esc_html($title); ?></h3>
              <?php endif; ?>
              <?php if ($description = get_sub_field('description')): ?>
                  <p><?php echo $description; ?></p>
              <?php endif; ?>
          </section>
      <?php endwhile; ?>
  <?php endif; ?>

  <?php if (have_rows('villa')): ?>
      <section class="villa">
          <?php
          $total_villas = count(get_field('villa'));
          $current_villa = 0;
          ?>
          <?php while (have_rows('villa')): the_row(); ?>
              <?php
              $current_villa++;
              $image = get_sub_field('image');
              ?>
              <div class="villa_block" style="background: url('<?php echo esc_url($image); ?>'); height: 100vh; background-size: cover;">
                  <div class="container">
                      <div class="villa_block_info_top">
                          <div class="villa_block_info_top_numbers">
                              <span><?php echo $current_villa; ?></span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="61" viewBox="0 0 25 61" fill="none">
                                  <path d="M21.5 0H24.5L3 61H0L21.5 0Z" fill="#454346"/>
                              </svg>
                              <span><?php echo $total_villas; ?></span>
                          </div>
                          <div class="villa_block_info_top_title">
                              <?php echo esc_html(get_sub_field('title')); ?>
                          </div>
                      </div>
                      <div class="villa_block_info_top_bottom">
                          <?php if (have_rows('info')): ?>
                              <?php while (have_rows('info')): the_row(); ?>
                                  <div class="villa_block_info_top_bottom_title">
                                      <p><?php echo esc_html(get_sub_field('title')); ?></p>
                                      <span><?php echo esc_html(get_sub_field('description')); ?></span>
                                  </div>
                              <?php endwhile; ?>
                          <?php endif; ?>
                          <?php if ($link = get_sub_field('link')): ?>
                              <a href="<?php echo esc_url($link['url']); ?>" class="btn_white" target="<?php echo esc_attr($link['target']); ?>">
                                  <?php echo esc_html($link['title']); ?>
                              </a>
                          <?php endif; ?>
                      </div>

                  </div>
              </div>
          <?php endwhile; ?>
      </section>
  <?php endif; ?>

  <?php if (have_rows('section_experience')): ?>
      <?php while (have_rows('section_experience')): the_row(); ?>
          <section class="experience">
              <div class="container">
                  <div class="experience_info">
                      <span><?php echo esc_html(get_sub_field('subtitle')); ?></span>
                      <h2><?php echo esc_html(get_sub_field('title')); ?></h2>
                  </div>
                  <div class="experience_blocks">
                      <?php if (have_rows('block_info')): ?>
                          <?php $block_count = 0; ?>
                          <?php while (have_rows('block_info')): the_row(); ?>
                              <?php $block_count++; ?>
                              <?php if ($block_count % 2 === 1): ?>
                                  <div class="experience_blocks_block">
                                      <div class="experience_blocks_block_info">
                                          <?php echo wp_kses_post(get_sub_field('title')); ?>
                                          <p><?php echo esc_html(get_sub_field('description')); ?></p>
                                          <?php if ($button = get_sub_field('button')): ?>
                                              <a href="<?php echo esc_url($button['url']); ?>" class="btn_white" target="<?php echo esc_attr($button['target']); ?>">
                                                  <?php echo esc_html($button['title']); ?>
                                              </a>
                                          <?php endif; ?>
                                      </div>
                                      <div class="experience_blocks_block_img">
                                          <?php if ($image = get_sub_field('image')): ?>
                                              <img src="<?php echo esc_url($image); ?>" alt="experience image">
                                          <?php endif; ?>
                                      </div>
                                  </div>
                              <?php else: ?>
                                  <div class="experience_blocks_block_second">
                                      <div class="experience_blocks_block_img">
                                          <?php if ($image = get_sub_field('image')): ?>
                                              <img src="<?php echo esc_url($image); ?>" alt="experience image">
                                          <?php endif; ?>
                                      </div>
                                      <div class="experience_blocks_block_info">
                                          <h3><?php echo wp_kses_post(get_sub_field('title')); ?></h3>
                                          <p><?php echo esc_html(get_sub_field('description')); ?></p>
                                          <?php if ($button = get_sub_field('button')): ?>
                                              <a href="<?php echo esc_url($button['url']); ?>" class="btn_white" target="<?php echo esc_attr($button['target']); ?>">
                                                  <?php echo esc_html($button['title']); ?>
                                              </a>
                                          <?php endif; ?>
                                      </div>
                                  </div>
                              <?php endif; ?>
                          <?php endwhile; ?>
                      <?php endif; ?>
                  </div>
              </div>
          </section>
      <?php endwhile; ?>
  <?php endif; ?>



</main>

<?php
get_footer();
