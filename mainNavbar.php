<nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo home_url('/');?>">Ko.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-ellipsis-v"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php include_once('content-parts/searcContent.php');?>
            <?php 
                $args_menu = array(
                    'theme_location' => 'main-menu',
                    'menu_class'     => 'navbar-nav',
                    'container'      => false
                );
                wp_nav_menu($args_menu);
            ?>
        </div>
    </div>
 </nav>