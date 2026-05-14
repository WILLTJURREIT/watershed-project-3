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

                    <article class="post-card">

                        <?php if ( has_post_thumbnail() ) : ?>
                            
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'medium_large', array( 'class' => 'post-card__image' ) ); ?>
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

                            <a class="post-card__button" href="<?php the_permalink(); ?>">
                                Read Issue
                            </a>

                        </div>

                    </article>

                <?php endwhile; ?>

            <?php else : ?>

                <p>No issues found.</p>

            <?php endif; ?>


    </div>

            </main>

<?php get_footer(); ?>