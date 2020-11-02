<!--  Code header  -->  
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
    <div class="container-fluid">
    	<a class="navbar-brand js-scroll-trigger" href="index.php">
        	<h3></h3>
        	<img src="<?php echo base_url('img'); ?>/Npru-logo.png" width="150" height="150">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
   		<span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            	<a class="nav-link" href="<?php echo site_url('manage_home/index'); ?>"> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
            	<a class="nav-link" href="<?php echo site_url('Show/showall'); ?>"> Profile </a>
            </li>
            <li class="nav-item dropdown  main-menu">
            	<a class="nav-link" href="<?php echo site_url('Show/showalledit'); ?>">Edit </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('login/login'); ?>">Log In</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!--  End Code header  --> 