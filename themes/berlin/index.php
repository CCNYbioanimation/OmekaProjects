<?php echo head(array('bodyid'=>'home', 'bodyclass' =>'two-col')); ?>
 
<div id="primary">
    <?php if ($homepageText = get_theme_option('Homepage Text')): ?>
    <p><?php echo $homepageText; ?></p>
    <?php endif; ?>
    <?php if (get_theme_option('Display Featured Item') == 1): ?>
    <!-- Featured Item -->
    <div id="featured-item" class="featured">
        <h2><?php echo __('Featured Item'); ?></h2>
        <?php echo random_featured_items(1); ?>
    </div><!--end featured-item-->
    <?php endif; ?>
    <?php if (get_theme_option('Display Featured Collection')): ?>
    <!-- Featured Collection -->
    <div id="featured-collection" class="featured">
        <h2><?php echo __('Featured Collection'); ?></h2>
        <?php echo random_featured_collection(); ?>
    </div><!-- end featured collection -->
    <?php endif; ?>
    <?php if ((get_theme_option('Display Featured Exhibit')) && function_exists('exhibit_builder_display_random_featured_exhibit')): ?>
    <!-- Featured Exhibit -->
    <?php endif; ?>
  
</div><!-- end primary -->
<img id="Our-header-image" src="themes/berlin/Images_By_Digital_Scholarship/Spitzer_Arch_Building.jpg" alt="header-img" style="padding: 0em 0px;">  <!-- Added / Changed -->
<!-- Changed -->


<table>
  <tc>
  <br>
    <td>This project was funded by Bernard and Anne Spitzer Travel Fellowship for research projects involving travel abroad and incorporating the study of architecture, landscape architecture, or urbanism.
	<br><br><br></td>
	
  </tc>
  <tc>
   <!--  <td><?php echo exhibit_builder_display_random_featured_exhibit(); ?></td>
  </tc>  -->
 </table>

    
<!-- Changed --Comment secondary -->
<!-- 
<div id="secondary">
   /* <?php
    $recentItems = get_theme_option('Homepage Recent Items');
    if ($recentItems === null || $recentItems === ''):
        $recentItems = 3;
    else:
        $recentItems = (int) $recentItems;
    endif;
    if ($recentItems):
    ?>
    <div id="recent-items">
        <h2><?php echo __('Recently Added Items'); ?></h2>
        <?php echo recent_items($recentItems); ?>
        <p class="view-items-link"><a href="<?php echo html_escape(url('items')); ?>"><?php echo __('View All Items'); ?></a></p>
    </div><!--end recent-items -->
    <?php endif; ?>
    
    <?php fire_plugin_hook('public_home', array('view' => $this)); ?>

</div><!-- end secondary -->

<?php echo foot(); ?>
