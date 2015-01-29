<?php
/*
  Template Name: glossary Page
 */
?>
<?php get_header(); ?>  
<!--Start Page Heading -->
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
                <div class="grid_sub_16 sub_alpha">
                    <div class="content-bar">  
                        <?php if ( have_posts() ) : the_post(); ?>
                            <?php the_content(); ?>	
                        <?php endif; ?>	
                        </div>
                    </div>                
                <div class="grid_sub_8 sub_omega">
                    <!--Start Sidebar-->
                    <div id="sidebar_center">
<div class="sidebar">
    <h3>Resources</h3>		
		<div class="dcjq-accordion" id="dc_jqaccordion_widget-68-item">
		
			<ul id="menu-resources" class="menu"><li id="menu-item-1684" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-1684"><a href="/resource-downloads">Resource Downloads</a></li>
<li id="menu-item-569" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-569"><a href="/rebasoft-downloads">Software Downloads</a></li>
<li id="menu-item-571" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-571"><a href="/support/knowledgebase.php">Knowledgebase</a></li>
<li id="menu-item-572" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-572"><a href="/external-resources">External Resources</a></li>
<li id="menu-item-654" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-654"><a href="/request-demo/">Request Demo</a></li>
<li id="menu-item-1261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1261"><a href="/mailing-list/">Mailing List</a></li>
<li id="menu-item-1664" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1664"><a href="/resources/glossary-a-to-z">Glossary</a></li>
</ul>		
		</div>
		    </div>
</div>
                    <!--End Sidebar-->
                </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>