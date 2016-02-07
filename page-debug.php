<?php
/**
 * Single use page template for debugging
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="apple-touch-icon" href="<?php echo site_url(); ?>/apple-touch-icon.png">
<?php if( is_home() ): ?>
<title><?php bloginfo('name')?> | <?php bloginfo('description'); ?></title>
<?php else: ?>
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
<?php endif; ?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="alternate" type="application/rss+xml" title="RSS Feed | <?php bloginfo('name'); ?>" href="<?php bloginfo( 'rss2_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome-4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/vendor/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/vendor/ie-bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/engineering.css">
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
<?php
wp_head();
the_post();
?>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo site_url(); ?>">internet&middot;engineering</a>
    </div>
  </div>
</nav>
<div id="buildingblocks" class="buildingblocks"></div>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-6">
				<div class="engineering">

					<?php the_content() ?>

					<pre><code><?php print_r( $_COOKIE ) ?></code></pre>

					<h4>Is logged in</h4>
					<?php if( is_user_logged_in() ){ echo 'true'; }else{ echo 'false'; } ?>

					<h4>internet·engineering Account Hash</h4>
					<?php
					if( isset( $_COOKIE['ie_account'] ) )
					{
						echo $_COOKIE['ie_account'];
					}
					else
					{
						echo 'no hash';
					}
					?>

					<h4>WP_User</h4>
					<?php get_currentuserinfo() ?>
					<pre><code><?php print_r( $current_user ) ?></code></pre>

				</div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer() ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/engineering.js"></script>
</body>
</html>
