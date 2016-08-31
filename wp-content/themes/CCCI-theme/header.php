
<!DOCTYPE html>

<html lang="en">

<!-- BC_OBNW -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title><?php wp_title( 'CCCI |', true, 'left' ); ?></title>
<script type="text/javascript">var jslang='EN';</script>
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/favicon-16x16.png" sizes="16x16" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald|Open+Sans:400italic,600italic,700italic,400,700,600">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/layout.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/font-awesome.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/custom.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/slider.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){ 
    // Code for Mobile Menu, shows up on small screen resolutions
    $('.expand-menu').click(function(e){
        e.preventDefault();
        $(this).toggleClass('open');
        if($('nav.small.top ul').is(':hidden')){
            $('nav.small.top ul').slideDown();
        }else{
            $('nav.small.top ul').slideUp();
        }
        
    });
    // --
    
    // Script to init slider. You can edit it from "/js/slider.js"
    $('.slider').startSlider();
    // --               
    
    var logout = '';
    if(logout !== '')
    {
        $('nav.top.small ul').append('<li></li>');
        $('nav.top.main ul').append('<li></li>');
    }     
  });
</script>
<!-- CSS
    ================================================== -->
<!-- JS
    ================================================== -->
<?php wp_head();?>    
<body>
    <!-- Primary Page Layout
    ================================================== -->
    
    <!-- header here -->
<section class="top-header">
    <div class="container">
        <div class="col-md-5 col-sm-12 col-xs-12">
            <a href="#" class="logo-link"><img class="logo" src="<?php bloginfo('template_directory');?>/img/assets/logo.jpg" /></a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-4 stats">
            <div class="col-md-3 col-sm-3 text-right"><img class="stats-location" src="<?php bloginfo('template_directory');?>/img/assets/header-location-icon.png" /></div>
            <div class="col-md-9 col-sm-9">
                <p>Barangay Banilad, <br/> Cebu City, Philippines</p>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-4 stats">
            <div class="col-md-3 col-sm-3"><img class="stats-today" src="<?php bloginfo('template_directory');?>/img/assets/header-today-icon.png" /></div>
            <div class="col-md-9 col-sm-9">
                <p>Today</p>
                <span>31°C</span>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-4 stats">
            <div class="col-md-3 col-sm-3"><img class="stats-tomorrow" src="<?php bloginfo('template_directory');?>/img/assets/header-tomorrow-icon.jpg" /></div>
            <div class="col-md-9 col-sm-9">
                <p>Tomorrow</p>
                <span>32°C</span>
            </div>
        </div>
    </div>  
</section>

<!-- mobile menu -->
<nav class="small top">  
    <a href="#" class="expand-menu"></a>
    <div class="clear"></div>
    <!-- Dynamic Menu Begin CSS Output --><div id="cat_1336130_divs">
        <ul id="nav_1336130">
            <?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>
        </ul>
    </div>
</nav>

<!-- desktop menu -->
<section class="container main-menu-holder">
    <div class="col-md-12">
        <nav class="main top">
            <!-- Dynamic Menu Begin CSS Output -->
            <div id="cat_1336130_divs">
                <ul id="nav_1336130">
                    <?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>
                </ul>
            </div>
            <!-- Dynamic Menu End CSS Output -->
        </nav>
    </div>
</section>
<!-- end .container -->
    <!-- end of headder -->