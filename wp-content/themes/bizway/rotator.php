<?php
/*
Template Name: rotator Page
*/
?>
<?php get_header(); ?>  
<!--Start Page Heading -->
<div id="page">
<div class="page-heading-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="page-heading">
                <h4 class="page-title"><img title="Rebasoft Application Auditor" src="/images/ApplicationAuditor.png" border="0" width="20%" /></h4>
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
                <div class="grid_sub_16 sub_alpha">
                    <div class="content-bar">  
                        <?php echo do_shortcode("[all_in_one_bannerRotator settings_id='1']"); ?>
                        </div>
                    </div>                
                <div class="grid_sub_8 sub_omega">
                    <!--Start Sidebar-->
                    <?php get_sidebar(); ?>
                    <!--End Sidebar-->
                </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>
</div>