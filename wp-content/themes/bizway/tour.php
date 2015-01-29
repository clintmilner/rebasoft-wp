<body bgcolor="#d1d3d2">
<?php
/*
Template Name: Tour Page
*/
?>
<div id="color" class="page-content-container">
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
</div>