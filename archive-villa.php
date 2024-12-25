<?php
get_header(); ?>

<div class="container">
    <main id="main" class="site-main">
        <header class="page-header">
            <h1 class="page-title"><?php post_type_archive_title(); ?></h1>
        </header>

        <?php if (have_posts()) : ?>
            <div class="villa-archive-list">
                <?php
                while (have_posts()) :
                    the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class('villa-item'); ?>>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                        </header>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="entry-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>

                <?php endwhile; ?>
            </div>

            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>

        <?php else : ?>
            <p><?php _e('No Villas found.', 'textdomain'); ?></p>
        <?php endif; ?>
    </main>
</div>

<?php
get_footer();
