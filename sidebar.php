<?php 
if( ! is_active_sidebar('main-sidebar')) {
    return;    
}
?>

<aside class="widget-area" role="widget-area" role="complementary">
    <?php dynamic_sidebar( 'main-sidebar'); ?>    
</aside>