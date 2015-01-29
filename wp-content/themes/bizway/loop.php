<!-- Start the Loop. -->
<div id="pagesize">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!--post start-->
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h5 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5> 
            <div class="post_date">
                <ul class="date">
					<li class="day"><?php echo get_the_time('M') ?></li>
                    <li class="year"><?php echo get_the_time('Y') ?></li>
                </ul>
            </div>
            <ul class="post_meta"><br />
				<li class="posted_by"><span><?php _e('Posted by','bizway'); ?></span>&nbsp;&nbsp; <?php the_author_posts_link(); ?></li>
								<?php if ( comments_open() ) : ?>
					<li class="post_comment"><?php comments_popup_link('', '1', '%'); ?></li>
				<?php endif; ?>
            </ul>
            <div class="post_content">
					<?php the_excerpt(); ?>
				<a class="read_more" href="<?php the_permalink() ?>">read more</a>
			</div>
			<?php wp_link_pages(array('before' => '' . __('Pages:', 'bizway'), 'after' => '')); ?>
		</div>
		<!--End Post-->
	<?php endwhile;
else: ?>
    <div class="post">
        <p>
            <?php _e('Sorry, no posts matched your criteria.', 'bizway'); ?>
        </p>
    </div>
<?php endif; ?>
<!--End Loop-->
</div>