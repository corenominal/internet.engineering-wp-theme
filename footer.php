<?php
/**
 * The default footer template.
 *
 * Displays closing elements and javascript includes.
 */
wp_footer();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor/jquery.fitvids.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/root.js"></script>
</body>
</html>
