<nav>
<!--     <menu class='cover'>
        <li><a href="#">نخست</a></li>
        <li><a href="#">درباره ما</a></li>
        <li><a href="#">محصولات</a></li>
        <li><a href="#">پروژه ها</a></li>
        <li><a href="#">بلاگ</a></li>
        <li><a href="#">تماس با ما</a></li>
        <div class="clear"></div>
    </menu> -->
<?php
    wp_nav_menu(array(
      'theme_location'  => 'mainmenu',
      'container'       => 'nav', 
      'container_class' => '', 
      'menu_class'      => '', 
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => ''
    ));
?>
</nav>
