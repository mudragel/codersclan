<footer>
    <div class="container">
        <div class="social">
			<?php dynamic_sidebar( 'Footer Social Widget' ); ?>
        </div>
        <div class="bottom">
            <div class="credits">© <?= date( 'Y' ); ?> CodersClan</div>
			<?php wp_nav_menu( [ 'theme_location' => 'footer-menu' ] ); ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>