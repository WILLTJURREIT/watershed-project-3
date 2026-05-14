<?php get_header(); ?>
<!-- <p style="background: yellow; padding: 20px;">ARCHIVE ISSUE TEMPLATE IS LOADING</p> -->

<main id="main-content" class="archive-page">

    

        <h1>Watershed Issues</h1>

        <p>
            Seasonal environmental publications focused on conservation,
            climate resilience, and watershed protection across Canada.
        </p>

        <div class="post-grid">

            <?php if ( have_posts() ) : ?>
                
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part('template-parts/content', 'issue-card'); ?>

                <?php endwhile; ?>

            <?php else : ?>

                <p>No issues found.</p>

            <?php endif; ?>


    </div>

            </main>

<?php get_footer(); ?>