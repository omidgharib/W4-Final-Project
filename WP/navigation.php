<?php
    wp_nav_menu(array(
      'theme_location'  => 'mainmenu',
      'container'       => 'nav', 
      'container_class' => '', 
      'menu_class'      => '', 
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<menu id="%1$s" class="%2$s">%3$s</menu>'
    ));
?>
