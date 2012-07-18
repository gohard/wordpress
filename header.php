<?php
error_reporting(0);
$wpcx_cxOptions = get_option('cxOptions'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>			
<!--wrapper div start here for full page 100% with and height -->
<div id="wrapper">
  <!-- wrap-contatinor div start here this is use for main page into minimum with 1000px around..-->
  <div id="wrap-containor">
  <!-- top header start here -->
    <!-- top header start here -->
		<div class="header">
		  <div class="logo"><a href="<?php echo home_url();?>" title=""><img alt="Matic Technology Logo" src='<?php echo get_template_directory_uri();?>/images/logos/logo.png'/></a></div>
		  <div class="add_banner"><img src="<?php echo get_template_directory_uri();?>/images/banner.jpg" >
<?php
		
		if(!empty($wpcx_cxOptions["social_facebook"])) {
			
			?>
			
			<a href="<?php echo $wpcx_cxOptions["social_facebook"];?>" title="facebook" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/icon_facebook.png" /></a>
			
			<?php
			
		}
		
		if(!empty($wpcx_cxOptions["social_linkedin"])) {
			
			?>
			
			<a href="https://www.linkedin.com/e/fpf/<?php echo $wpcx_cxOptions["social_linkedin"]; ?>" title="linkedin" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/icon_linked.png" /></a>
			
			<?php
			
		}
		
		if(!empty($wpcx_cxOptions["social_twitter"])) {
			
			?>
			
			<a href="http://www.twitter.com/#!/<?php echo $wpcx_cxOptions["social_twitter"]; ?>" title="twitter" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/icon_twitter.png" /></a>
			
			<?php
			
		}
		
		if(!empty($wpcx_cxOptions["social_rss"])) {
			
			if($wpcx_cxOptions["social_rss"] == "yes") {
			
				?>
				
				<a href="<?php bloginfo('rss2_url'); ?>" title="rss" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/icon_rss.png" /></a>
				
				<?php
			
			}
			
		}
		
		?>
	
		  </div>
		</div>
		<div class="clear"></div>
		 <!-- nav panel start here -->
			<div class="nav">
		  		<div class="corner"></div>
			   <div id="top-row" class="container_12">
			        <div id="top-menu" class="grid_12">
			        <ul class="menu">
		          			<?php wp_nav_menu(array('theme_location'  => 'nav_menu', 'container' => false, 'fallback_cb' => 'wpcx_default_menu')); ?>
		         	 </ul>
			          <!-- TOP POSITION -->
			        </div>
			     </div>
			</div>
  