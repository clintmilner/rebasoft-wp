<div id="sidebar_center">
<div class="sidebar">
    <?php if (!dynamic_sidebar('primary-widget-area')) : ?>
         <h4>
            <?php _e(' News Archives', 'bizway'); ?>
        </h4>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
    <?php endif; // end primary widget area ?>
    <?php
// A second sidebar for widgets, just because.
    if (is_active_sidebar('secondary-widget-area')) :
        ?>
        <?php dynamic_sidebar('secondary-widget-area'); ?>
    <?php endif; ?>
</div>
</div>