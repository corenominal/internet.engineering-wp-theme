<?php
/**
 * Single use page template for debugging
 */
get_header( 'guest' );
?>

<div id="buildingblocks" class="buildingblocks"></div>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-6">
				<div class="engineering">

					<?php the_post() ?>

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
</body>
</html>