<?php 
get_header(); ?>
	
	<?php
	
	global $post;
	
	if(!empty($wpcx_cxOptions["slide_max"])) {
		
		$wpcx_slide_max = $wpcx_cxOptions["slide_max"];
		
	} else {
		
		$wpcx_slide_max = 0;
		
	}
	
	if(!empty($wpcx_cxOptions["slide_sort"])) {
		
		$wpcx_slide_sort = $wpcx_cxOptions["slide_sort"];
		
	} else {
		
		$wpcx_slide_sort = "date";
		
	}
	
	if(!empty($wpcx_cxOptions["slide_order"])) {
		
		$wpcx_slide_order = $wpcx_cxOptions["slide_order"];
		
	} else {
		
		$wpcx_slide_order = "DESC";
		
	}
	
	if(!empty($wpcx_cxOptions["slide_show"])) {
		
		$wpcx_slide_show = $wpcx_cxOptions["slide_show"];
		
	} else {
		
		$wpcx_slide_show = "yes";
		
	}
	
	if($wpcx_slide_show != "no") {

		$wpcx_args = array( 'meta_key' => 'feat_slideshow', 'meta_value'=> '1', 'suppress_filters' => 0, 'post_type' => array('post', 'page'), 'post_status' => 'publish', 'numberposts' => $wpcx_slide_max, 'orderby' => $wpcx_slide_sort, 'order' => $wpcx_slide_order);
		
		$wpcx_myposts = get_posts($wpcx_args);
		
		if(!$wpcx_myposts) {
			
			$wpcx_args = array('suppress_filters' => 0, 'post_type' => array('post', 'page'), 'post_status' => 'publish', 'numberposts' => $wpcx_slide_max, 'orderby' => $wpcx_slide_sort, 'order' => $wpcx_slide_order);
		
			$wpcx_myposts = get_posts($wpcx_args);
	
		}
	
		if($wpcx_myposts) {
		
		?>
		
			<div id="slide_wrapper">
				
				<ul id="slideshow">
					
					<?php
					
						foreach( $wpcx_myposts as $post ) :	setup_postdata($post);
							
							$wpcx_slideshow_title = get_the_title();
							
							$wpcx_slideshow_text = wpcx_cut_text(get_the_excerpt(), 290);
							
							$wpcx_thumb_big = wpcx_get_wp_generated_thumb("slideshow");
							
							if(empty($wpcx_thumb_big)) {
								
								$wpcx_thumb_big = get_template_directory_uri()."/images/default_slideshow.jpg";
								
							}
							
							?>
							
								<li>
								<img src="<?php echo $wpcx_thumb_big;?>" alt="<?php the_title();?>" />
								
								            
									            
								<div class="slide_text">
										<div class="headingTech"><h1><?php the_title();?></h1></div>
            							<ul>
								              <li><?php echo the_content();?></li>
								        </ul>
								</div></li>
							
							<?php 
							
						endforeach;
					
					
					?>
					
				</ul>
			</div>
			
		<?php
		
		}
		
	}
		
		?>

<div id="big-column">
	
	
        <div id="column-content">
            <div class="technology">    
		<?php
				
		global $post;
		
		if(!empty($cxOptions["featured_sort"])) {
		
			$feat_sort = $cxOptions["featured_sort"];
			
		} else {
			
			$feat_sort = "date";
			
		}
		
		if(!empty($cxOptions["featured_order"])) {
		
			$feat_order = $cxOptions["featured_order"];
			
		} else {
			
			$feat_order = "DESC";
			
		}
	
		$args = array( 'meta_key' => 'feat_front', 'meta_value'=> '1', 'suppress_filters' => 0, 'post_type' => array('post', 'page'), 'post_status' => 'publish', 'numberposts' => 9, 'orderby' => $feat_sort, 'order' => $feat_order);
		
		$myposts = get_posts( $args );
		
		if(!$myposts) {
			
			$args = array('suppress_filters' => 0, 'post_type' => array('post'), 'post_status' => 'publish', 'numberposts' => 9, 'orderby' => $feat_sort, 'order' => $feat_order);
		
			$myposts = get_posts( $args );
			
		}
		
		
		foreach( $myposts as $post ) :	setup_postdata($post);
		
			$thumb = wpcx_get_wp_generated_thumb("feat_thumb");
				
			?>
			 
			 <div class="mobile_technology">
		        <div class="headingbox">
		                 <span class="headingTech"><h2><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h2></span> </div>
		        <p class="techpragraph"><?php echo wpcx_cut_text(get_the_excerpt(), 250)?></p>
		        <p class="Readmore"><a title="<?php the_title();?>" href="<?php the_permalink();?>">Readmore</a></p>
		      </div>
		     
              <?php endforeach; ?>
 </div>
        

</div>

<?php get_footer(); ?>
