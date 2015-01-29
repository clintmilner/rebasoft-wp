<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Bizway
 * 
 */
?>
<?php get_header(); ?>  
<!--Start Page Heading -->
<div id="pagesize">
<div class="page-heading-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="page-heading">
                <h4 class="page-title"><?php printf(__('Search Results for "%s"', 'bizway'), '' . get_search_query() . ''); ?></h4>
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
                    <div class="content-bar">
                        <?php if ( have_posts() ) : ?>
                            <!--Start Post-->
                            <?php get_template_part('loop', 'search'); ?>
                            <!--End Post-->
                        <?php else : ?>
                            <article id="post-0" class="post no-results not-found">
                                <header class="entry-header">
                                    <h5 class="entry-title">
                                        <?php _e('Nothing Found', 'bizway'); ?>
                                    </h5>
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p>
                                        <?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'bizway'); ?>
                                    </div>
                                <!-- .entry-content -->
                            </article>
                        <?php endif; ?>
                        <div class="clear"></div>
                        <nav id="nav-single"> <span class="nav-previous">
                                <?php next_posts_link(__('&larr; Older posts', 'bizway')); ?>
                            </span> <span class="nav-next">
                                <?php previous_posts_link(__('Newer posts &rarr;', 'bizway')); ?>
                            </span> </nav>	
                    </div>
                </div>
                            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>