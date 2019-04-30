<!DOCTYPE html>
<!--[if lt IE 9]>      <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->

<head>
<!-- meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<!-- title -->
<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
<!-- layout stylesheets -->


<link href="<?php bloginfo('template_url'); ?>/css/normalize.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/form.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/nova.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/handsome.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/jquery-ui.css" rel="stylesheet">

<link href="<?php bloginfo('template_url'); ?>/css/styles.css" rel="stylesheet"> 
<?php if(!is_front_page()) { ?>
<link href="<?php bloginfo('template_url'); ?>/css/interior.css" rel="stylesheet">
<?php } ?>
<!--[if lte IE 8]><link href="styles/ie.css" rel="stylesheet" type="text/css" media="screen"><![endif]-->

<!-- fonts -->
<link href="http://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,900,700italic" rel="stylesheet">

<!-- layout scripts -->
<link rel="stylesheet" href="//cdn.letgroup.com/shared/styles/nivo/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="//cdn.letgroup.com/shared/styles/nivo/nivo-slider-themes/default/default.css" type="text/css" media="screen" />

<script src="http://cdn.letgroup.com/shared/scripts/css3-mediaqueries.js"></script>
<script src="http://cdn.letgroup.com/shared/scripts/modernizr.js"></script>
<!--[if lte IE 8]><script src="//cdn.letgroup.com/shared/selectivizr.js"></script><![endif]-->

<!-- icons -->
<?php global $redux_demo;  ?>
<?php if($redux_demo['favicon']['url']){ ?>
   <link href="<?php echo $redux_demo['favicon']['url']; ?>" rel="shortcut icon">
<?php } ?>

	<?php wp_head(); ?>
</head>


<body <?php if(!is_home()){
       body_class('inner_page_setting');
       }else{
       body_class('homepage inner_page_setting');
       }
?>>

<!--<div id="specialBox">
<div id="specialBoxClose">X</div>
</div>-->

<div id="info">
    <div class="omc-footer-widget-column">  
       </div><!--- /second-footer-column -->
<p id="appointments"><?php echo $redux_demo['availability_bar']; ?></p>
<p id="phones"><?php echo $redux_demo['head_contact']; ?></p>
</div>

<header>
  <div class="content"> <a href="<?php bloginfo('url'); ?>" class="logo" <?php if($redux_demo['logo_123']['url'] !="")  { ?> style="background-image:url(<?php echo $redux_demo['logo_123']['url']; ?>)" <?php } ?>><?php if ( is_active_sidebar( 'header-logo' ) ) : ?>    

    <div class="omc-footer-widget-column">  

            

    </div><!--- /second-footer-column -->

<?php endif; ?></a>
	  
	  
	  <!--header-menu---->
      <?php //dynamic_sidebar( 'menu-top' ); ?>
      <?php wp_nav_menu(array('theme_location'=>'header_menu','container'=>false,'menu_id'=>'navigation')); ?>
    
  </div>
</header>