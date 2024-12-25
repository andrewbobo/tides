<?php
/**
 * Template Name: Attractions
 */

 get_header('gallery'); ?>

 <nav class="breadcrumbs container">
     <div class="breadcrumbs-inner">
         <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
         <span class="separator"> | </span>
         <span><?php echo get_the_title(); ?></span>
     </div>
 </nav>

 <section class="attractions">
     <?php
     $attractions = get_field('attractions');

     if ($attractions): ?>
         <h1 class="attractions_maintitle"><?php echo esc_html($attractions['main_title']); ?></h1>

         <?php if (!empty($attractions['info_blocks'])): ?>
             <?php foreach ($attractions['info_blocks'] as $block): ?>
                 <div class="attractions_block">
                     <h2><?php echo esc_html($block['title']); ?></h2>

                     <?php if (!empty($block['image'])): ?>
                         <img src="<?php echo esc_url($block['image']['url']); ?>" alt="<?php echo esc_attr($block['image']['alt']); ?>">
                     <?php endif; ?>

                     <?php
                     $description = wp_kses_post($block['description']);
                     $description = preg_replace('/<p>\s*<\/p>/', '', $description);
                     ?>

                     <?php if (!empty(trim(strip_tags($description)))): ?>
                         <div class="attractions-description">
                             <?php echo $description; ?>
                         </div>
                     <?php endif; ?>

                     <?php if (!empty($block['title_list']) || !empty($block['list_item'])): ?>
                         <div class="attractions_block_list">
                             <h4 class="attractions_block_list_title"><?php echo esc_html($block['title_list']); ?></h4>
                             <?php if (!empty($block['list_item'])): ?>
                                 <ul>
                                     <?php foreach ($block['list_item'] as $list_item): ?>
                                         <li><?php echo esc_html($list_item['item']); ?></li>
                                     <?php endforeach; ?>
                                 </ul>
                             <?php endif; ?>
                         </div>
                     <?php endif; ?>
                 </div>
             <?php endforeach; ?>
         <?php endif; ?>
     <?php else: ?>
         <p>No attractions available.</p>
     <?php endif; ?>
 </section>



<?php get_footer(); ?>
