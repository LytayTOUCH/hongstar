<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php bloginfo('name');?><?php wp_title('|', true, 'left'); ?> </title>
		<?php wp_head(); ?>
	</head>
<body>

<!--?php wp_nav_menu(array( 'theme_location'  => 'header-menu', 'sort_column' => 'menu_order', 'menu' => 'Categories', 'container_class' => 'main-menu', 'container_id' => 'header') ); ?-->

<div class="container-fluid">
    <div class="row">
        
        <div class="col-md-2">
            <a href="<?php bloginfo('url'); ?>">
                <img  class="img-responsive img-rounded" alt="Responsive image" src="<?php header_image(); ?>" alt="" />
                <span class="text-center"><p class="custom-margin"><?php bloginfo('description'); ?></p></span>
            </a>
            
        </div>

        <div class="col-md-10">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a href="<?php bloginfo('url'); ?>" class="navbar-brand"><i class="fa fa-home fa-lg"></i></a>
                  <!-- <a href="<?php bloginfo('url'); ?>"><i class="fa fa-home fa-3x"></i></a> -->
                </div>
    
                <div id="navbarCollapse" class="collapse navbar-collapse">
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'primary',
                                'theme_location'    => 'header-menu',
                                'container_id'      => 'navbarCollapsea',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                        <form role="search" class="navbar-form navbar-right">
                            <div class="input-group">
                              <input type="text" class="form-control">
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                              </span>
                            </div><!-- /input-group -->
                        </form>
                </div>
            </nav>
        </div>
    </div>

</div>