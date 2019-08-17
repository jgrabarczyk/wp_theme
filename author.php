<?php get_header(); ?>
<div class="wrapper">
    <main role="main">
        <!-- section -->
        <section>

            <?php if (have_posts()): the_post(); ?>

                <h1>
                    <?=  
                    __('Author Archives for ', 'wp_theme') .
                    get_the_author(); 
                    ?>
                </h1>

                <?php if (get_the_author_meta('description')) : ?>

                    <?= get_avatar(get_the_author_meta('user_email')); ?>

                    <h2>
                        <?=
                        _e('About ', 'wp_theme').
                        get_the_author();
                        ?>
                    </h2>

                    <?= wpautop(get_the_author_meta('description')); ?>

                <?php endif; ?>

                <?php
                rewind_posts();
                while (have_posts()) : the_post();
                    ?>

                    <!-- article -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <!-- post thumbnail -->
                        <?php echo wp_theme_get_thumbnail();?>
                        <!-- /post thumbnail -->

                        <!-- post title -->
                        <h2>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <!-- /Post title -->

                        <!-- post details -->
                        <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
                        <span class="author"><?php _e('Published by', 'wp_theme'); ?> <?php the_author_posts_link(); ?></span>
                        <span class="comments"><?php comments_popup_link(__('Leave your thoughts', 'wp_theme'), __('1 Comment', 'wp_theme'), __('% Comments', 'wp_theme')); ?></span>
                        <!-- /post details -->

                        <?php wp_theme_excerpt('wp_theme_wp_index'); // Build your custom callback length in functions.php    ?>

                        <br class="clear">

                        <?php edit_post_link(); ?>

                    </article>
                    <!-- /article -->

    <?php endwhile; ?>

<?php else: ?>

                <!-- article -->
                <?php get_template_part( 'loop-templates/content', 'none' ); ?>
                <!-- /article -->

<?php endif; ?>

<?php get_template_part('pagination'); ?>

        </section>
        <!-- /section -->
    </main>
</div>

<?php get_footer(); ?>
