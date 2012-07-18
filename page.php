<?php get_header(); ?>

<div id="sub-column">

        <div id="sub-top">
		<h1 class="first"><?php the_title();?></h1> 
		</div>

        <div id="sub-content">
                
                <div class="content">
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                         <?php get_template_part('scripts/breadcrumb'); ?> <br/>
                        <div class="post">
                              
                                <?php the_content();?>
                                
                        </div>
                        
                        <div class="wp-pagenavi"><?php wp_link_pages('before=Pages: &pagelink=<span>%</span>'); ?></div>
                        
                        <?php endwhile; endif;?>

                        <?php comments_template(); ?>
                        
                        <?php edit_post_link('Edit Post'); ?>
                </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
</div>