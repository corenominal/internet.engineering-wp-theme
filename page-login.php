<?php
/**
 * Single use page for user login
 */

/**
 * Test, if user is already logged in, redirect to homepage
 */
if( is_user_logged_in() ):
	wp_redirect( site_url() );
endif;
?>

<div id="buildingblocks" class="buildingblocks"></div>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-6">
				<div class="engineering">
					<h1>Sign-in</h1>
					<p class="sr-only">Enter your credentials below to login.</p>
					<form class="form-horizontal">
					  <div class="form-group">
					    <label for="user_login" class="col-sm-2 control-label">Username</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="user_login" placeholder="Username ...">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="user_password" class="col-sm-2 control-label">Password</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="user_password" placeholder="Password ...">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <input id="foo" type="hidden" value="<?php echo wp_create_nonce( 'user-login' ) ?>">
					      <button id="signin" data-endpoint="<?php echo site_url( '/wp-json/ie-api/login' ); ?>" type="submit" class="btn btn-primary button"><i class="fa fa-sign-in"></i> Sign-in</button>
					    </div>
					  </div>
					</form>
					<div id="notify"></div>

				</div>
			</div>
		</div>
	</div>
</div>


<?php wp_footer() ?>
</body>
</html>