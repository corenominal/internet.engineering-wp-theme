<?php
/**
 * The default header template.
 */

/**
 * Include the meta.
 */
require get_template_directory() . '/inc/meta.php';
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
        <li><a href="#">Sign-in <i class="fa fa-padlock"></i></a></li>
      </ul>
      
    </div>
  </div>
</nav>