<div class="footer">
    <strong><a href="#"><img class="logo" src="<?= get_template_directory_uri()?>/assets/img/logo.png" alt="Industrial products"></a></strong>
    <div class="footer-nav">
        <nav class="nav-footer">
            <?php wp_nav_menu(array(
                'theme_location'  => 'footMenu',
                'container' => null,
                'menu_class' => 'foot-menu',
            ))?>
        </nav>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>
