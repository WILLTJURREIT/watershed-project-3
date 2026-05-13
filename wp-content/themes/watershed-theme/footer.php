<footer class="site-footer">

    <nav class="footer-navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu'
        ));
        ?>
    </nav>

    <p>&copy; <?php echo date('Y'); ?> Watershed Sentinel</p>

</footer>

<?php wp_footer(); ?>

</body>
</html>