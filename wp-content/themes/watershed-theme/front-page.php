<?php get_header(); ?>

<section class="hero">

        <div class="hero__content">

            <h1 class="hero__title">
                <?php the_field('hero_heading'); ?>
            </h1>

            <p class="hero__text">
                <?php the_field('hero_text'); ?>
            </p>

        </div>

        <?php 
        $hero_image = get_field('hero_image');

        if ($hero_image) : ?>
            <img 
                class="hero__image"
                src="<?php echo esc_url($hero_image['url']); ?>" 
                alt="<?php echo esc_attr($hero_image['alt']); ?>"
            >
        <?php endif; ?>

    </section>


<?php get_footer(); ?>