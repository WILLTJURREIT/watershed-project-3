<?php get_header(); ?>

<main id="main-content" class="archive-page">
    <section class="archive-header">
        <h1>Articles</h1>
        <p>Environmental stories, conservation updates, and climate reporting.</p>
    </section>

    <section class="post-grid">

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('template-parts/content', 'post-card'); ?>

            <?php endwhile; ?>

        <?php else : ?>

            <p>No articles found.</p>

        <?php endif; ?>

    </section>
</main>

<?php get_footer(); ?>