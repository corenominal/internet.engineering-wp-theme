<?php
/**
 * The default header template.
 */

/**
 * Include the meta.
 */
require get_template_directory() . '/inc/meta.php';

/**
 * Test, if user logged in
 */
if( is_user_logged_in() ):
?>
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
    <div id="navbar" class="navbar-collapse collapse">
      
      <form class="navbar-form navbar-right">
        <input type="text" class="form-control" placeholder="Search...">
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Settings</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Help</a></li>
      </ul>
      
    </div>
  </div>
</nav>
<?php
/**
 * If the user is not logged in
 */
else:
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        MENU
      </button>
      <a class="navbar-brand" href="<?php echo site_url(); ?>">internet&middot;engineering</a>
    </div>
    
    <div id="navbar" class="navbar-collapse collapse">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url('login') ?>">Sign-in <i class="fa fa-padlock"></i></a></li>
      </ul>
      
    </div>
  </div>
</nav>
<?php endif; ?>