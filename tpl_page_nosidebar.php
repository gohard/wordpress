<?php
/*
Template Name: No Sidebar
*/
?>

<?php get_header(); ?>

<div id="sub-column" class="no-sidebar">

        <div id="sub-top">
                <?php get_template_part('scripts/breadcrumb'); ?>
        </div>

      <div id="aboutUs">
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        
                        <div class="post">
                                
                                <h1 class="first"><?php the_title();?></h1>
                                <?php the_content();?>
                                
                        </div>
                        
                        <?php endwhile; endif;?>

                        <?php //  comments_template(); ?>
                        
                        
                        <?php edit_post_link('Edit Post'); ?>
      
      </div>

<?php get_footer(); ?>