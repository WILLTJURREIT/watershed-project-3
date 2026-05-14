<footer class="site-footer">

    <nav class="footer-navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu'
        ));
        ?>
    </nav>

    <p>&copy; <?php echo date('Y'); ?> Watershed Sentinel</p>
    
 <div class="footer-socials">

    <a href="#">Facebook</a>

    <a href="#">Instagram</a>

    <a href="#">Twitter</a>

    <a href="#">YouTube</a>

</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>