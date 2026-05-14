<?php get_header(); ?>

<main id="main-content">

    <!-- HERO SECTION -->

    <section class="hero">

        <h1 class="hero__title">
            Protecting Watersheds Across Canada
        </h1>

        <p class="hero__text">
            Environmental journalism, climate reporting,
            and watershed awareness.
        </p>

        <img
            class="hero__image"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-watershed.png"
            alt="Canadian watershed river flowing through forest and mountains at sunrise"
        >

    </section>

    <!-- LATEST ARTICLES -->

    <section class="archive-page">

        <div class="archive-header">
            <h2>Latest Articles</h2>

            <p>
                Recent environmental stories and conservation updates.
            </p>
        </div>

        <div class="post-grid">

            <?php
            $latest_posts = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC'
            ));
            ?>

            <?php if ($latest_posts->have_posts()) : ?>

                <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>

                    <?php get_template_part('template-parts/content', 'post-card'); ?>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            <?php endif; ?>

        </div>

    </section>

    <!-- LATEST ISSUES -->

    <section class="archive-page">

        <div class="archive-header">

            <h2>Latest Issues</h2>

            <p>
                Seasonal Watershed Sentinel publications.
            </p>

        </div>

        <div class="post-grid">

            <?php
            $latest_issues = new WP_Query(array(
                'post_type'      => 'issue',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC'
            ));
            ?>

            <?php if ($latest_issues->have_posts()) : ?>

                <?php while ($latest_issues->have_posts()) : $latest_issues->the_post(); ?>

                    <article class="post-card">

                        <?php if (has_post_thumbnail()) : ?>

                            <a href="<?php the_permalink(); ?>">

                                <?php
                                the_post_thumbnail(
                                    'medium_large',
                                    array('class' => 'post-card__image')
                                );
                                ?>

                            </a>

                        <?php endif; ?>

                        <div class="post-card__content">

                            <h2 class="post-card__title">

                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>

                            </h2>

                            <p class="post-card__date">
                                <?php echo get_the_date(); ?>
                            </p>

                            <p class="post-card__excerpt">
                                <?php the_excerpt(); ?>
                            </p>

                            <a
                                class="post-card__button"
                                href="<?php the_permalink(); ?>"
                            >
                                Read Issue
                            </a>

                        </div>

                    </article>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            <?php endif; ?>

        </div>

    </section>

</main>

<?php get_footer(); ?>