<?php
/**
 * Single use page for user login
 */
get_header();
?>

<div id="buildingblocks" class="buildingblocks"></div>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-6">
				<div class="engineering">

					<?php the_post() ?>

					<?php the_content() ?>

				</div>
			</div>
		</div>
	</div>
</div>


<?php wp_footer() ?>
</body>
</html>