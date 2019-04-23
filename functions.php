<?php
    
    //Register Nav Walker class_alias
    require_once('wp_bootstrap_navwalker.php');

    //Theme Support
    function wpb_theme_setup(){
        add_theme_support('post-thumbnails');
        
        //Nav Menus
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));
    }
    //Navs menu and Theme
    add_action('after_setup_theme', 'wpb_theme_setup');


    //Length of news on page
    function set_excerpt_length() {
	return 45;
}
    
    add_filter('excerpt_length', 'set_excerpt_length');
    
    //Add points after content lenght
    add_filter('excerpt_more', function($more) {
	   return ' ...';
    });
    
    //Widgets
    function wpb_init_widgets($id){
        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="sidebar-widget">',
            'after_widget' => '</div>',
            'before_title'  => '<h2 class="rounded">',
            'after_title'   => '</h2>',
        ));
    }

    add_action('widgets_init', 'wpb_init_widgets');


    // Remove Category ID 6 from NEWS
    function removeFromHome($query) {
    if ($query->is_home)
        {$query->set('cat','-6');}
    return $query; }

    add_filter('pre_get_posts','removeFromHome');

    // Remove Category Widget from NEWS
    function my_cat_widget($args){
        $exclude = "6"; 
        $args["exclude"] = $exclude;
        return $args;
    }
    add_filter("widget_categories_args","my_cat_widget");


