<?php
/**
 * Single use page template for holding page
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
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
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
					
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
					<form action="//engineering.us7.list-manage.com/subscribe/post?u=c836dde30e2b8a131a891ada1&amp;id=dd86fbb966" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
						
					<div class="mc-field-group form-group">
						<label for="mce-EMAIL">Email Address </label>
						<input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL">
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true">
				    	<input type="text" name="b_c836dde30e2b8a131a891ada1_dd86fbb966" tabindex="-1" value="">
				    </div>
				    <div class="clear">
				    	<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary button">
				    </div>
					</div>
					</form>
					</div>
					<!--End mc_embed_signup-->

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
