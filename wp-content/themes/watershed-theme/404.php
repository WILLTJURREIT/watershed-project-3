<?php get_header(); ?>

<main id="main-content" class="error-page">

    <h1>Page Not Found</h1>

    <p>
        Sorry, the page you are looking for could not be found.
    </p>

    <a class="post-card__button" href="<?php echo esc_url(home_url('/')); ?>">
        Return Home
    </a>

</main>

<?php get_footer(); ?>