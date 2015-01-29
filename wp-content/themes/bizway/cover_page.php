<?php
/*
Template Name: Cover Page
*/
?>
<?php get_header(); ?>  
<!--Start Page Heading -->
<div id="pagesize">
<div class="page-heading-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="page-heading">
                <h4 class="page-title"><?php the_title(); ?></h4>
            </div> 
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--End Page Heading -->
<!--Start Page Content -->
<div class="page-content-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="page-content">
                <div class="">
                    <div class="content-bar">  
                        <?php if ( have_posts() ) : the_post(); ?>
                            <?php the_content(); ?>	
                        <?php endif; ?>	
                         <!--Start Comment box-->
                        <?php comments_template(); ?>
                        <!--End Comment box-->
                        </div>
                    </div>                
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>
</div>