<?php get_header(); ?>

<main id="main-content" class="single-post-page">

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <article class="single-post">

                <h1 class="single-post__title">
                    <?php the_title(); ?>
                </h1>

                <p class="single-post__date">
                    <?php echo get_the_date(); ?>
                </p>

                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', array('class' => 'single-post__image')); ?>
                <?php endif; ?>

                <div class="single-post__content">
                    <?php the_content(); ?>
                </div>

                <p>
                    <a class="post-card__button" href="<?php echo esc_url(get_post_type_archive_link('issue')); ?>">
                        Back to Issues
                    </a>
                </p>

            </article>

        <?php endwhile; ?>
    <?php endif; ?>

</main>

<?php get_footer(); ?>