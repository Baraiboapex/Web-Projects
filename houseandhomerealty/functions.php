<?php
//add widget functionality --> Remove comments when ready to use
function hhr_theme_setup(){
	register_nav_menus(array(
			'header' => __('Head Nav Menu'),
			'footer' => __('Footer Nav Menu'),
			'listingschildnav' => __('Listings Page Navigation'),
			'newschildnav' => __('News Page Navigation')
		));
		
	//add theme support for html5 on the search form
	add_theme_support('html5',array('search-form'));
	
	//add support for gallery and aside post formats
	add_theme_support('post-formats',array('gallery','aside'));
	
	//add support for post thumbnails
	add_theme_support('post-thumbnails');
	
	//remove auto formatting
	remove_filter ('the_content', 'wpautop');
	
}
add_action('after_setup_theme','hhr_theme_setup');

//Add a custom title for the home page
function home_title(){
    $title='House and Home | Home';
    return $title;
}

add_filter('wpseo_title','custom_seo_title',10,1);
	
//add widget functionality --> Remove comments when ready to use
function hhr_get_widgets(){
##-----------Activate Home Page Widgets-------------
	register_sidebar(array(
		'name' => 'Home Page Header Greating',
		'id' => 'homepagegreeting',
		'before_widget' => '<div class = "welcome-message" >',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	));
	
	register_sidebar(array(
		'name' => 'Why Choose Us Message',
		'id' => 'whychooseus',
		'before_widget' => '<article class = "home-greet-art">',
		'after_widget' => '</article>',
		'before_title' => '<h1 id = "why-choose-us-head">',
		'after_title' => '</h1>'
	));
	
	register_sidebar(array(
		'name' => 'Contact Form Header Message',
		'id' => 'cformhead',
		'before_widget' => '<artcile class = "contact-head">',
		'after_widget' => '</article>',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	));
	
	register_sidebar(array(
		'name' => 'Home Contact Form',
		'id' => 'homecontact',
		'before_widget' => '<div class = "contact-form-contain">',
		'after_widget' => '</div>',
		'before_title' =>'<h4 class = "form-title" >',
		'after_title' =>'</h4>'
	));
##-----------Activate Home Page Widgets-------------
##-----------Activate About Page Widgets-------------	
	register_sidebar(array(
		'name' => 'About Page Header Greating',
		'id' => 'aboutpagegreeting',
		'before_widget' => '<div class = "welcome-message" >',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	));
##-----------Activate About Page Widgets-------------
##-----------Activate Listings Page Widgets----------
	register_sidebar(array(
		'name' => 'Search',
		'id' => 'searchlistings',
		'before_widget' => '<div class = "search-posts">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class = "search-header">',
		'after_title' => '</h4>'
	));
	
	register_sidebar(array(
		'name' => 'Search',
		'id' => 'searchnews',
		'before_widget' => '<div class = "search-posts">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class = "search-header">',
		'after_title' => '</h4>'
	));
	
	register_sidebar(array(
		'name' => 'Recently Added Properties',
		'id' => 'recentprops',
		'before_widget' => '<div class = "recent-posts">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class = "recent-posts-header">',
		'after_title' => '</h4>'
	));
	
	register_sidebar(array(
		'name' => 'Recent News',
		'id' => 'recentnews',
		'before_widget' => '<div class = "recent-posts">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class = "recent-posts-header">',
		'after_title' => '</h4>'
	));
##-----------Activate Listings Page Widgets----------		
	
}

add_action('widgets_init','hhr_get_widgets');

function hhr_customize_register($wp_customize){
   /*
	*=========Add Custom Logo For Theme===============
	*/
	$wp_customize->add_section('hhr_logo',array(
		'title' => __('Logo','houseandhomerealty'),
		'priority' => 1
	));
	
	$wp_customize->add_setting('hhr_logo',array(
		'default'      =>  apply_filters('hhr_default_logo',''),
		'type'         => 'theme_mod',
		'capability'   => 'edit_theme_options',
		'sanitize_callback' => 'esc_url'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,
		'hhr_logo',
		array(
			'label' => __('Logo','houseandhomerealty'),
			'section' => 'hhr_logo',
			'settings' => 'hhr_logo'
		)
	));
	/*
	*=========Add Custom Background Header Image For Home Page===============
	*/
	$wp_customize->add_section('hhr_home_header',array(
		'title' => __('Home Header Background','houseandhomerealty'),
		'priority' => 2
	));
	
	$wp_customize->add_setting('hhr_home_header',array(
		'default'   =>  hhr_get_default_home_background(),
		
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,
		'hhr_home_header',
		array(
			'label'   => __('Home Header Image','houseandhomerealty'),
			'section' => 'hhr_home_header',
			'settings' => 'hhr_home_header'
		)
	));
	/*
	*=========Add Custom Background Header Image For About Page===============
	*/
	$wp_customize->add_section('hhr_about_header',array(
		'title' => __('About Header Background','houseandhomerealty'),
		'priority' => 3
	));
	
	$wp_customize->add_setting('hhr_about_header',array(
		'default'   =>  hhr_get_default_about_background(),
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,
		'hhr_about_header',
		array(
			'label'   => __('About Header Image','houseandhomerealty'),
			'section' => 'hhr_about_header',
			'settings' => 'hhr_about_header'
		)
	));
	
	
}

add_action('customize_register','hhr_customize_register');

function hhr_get_default_home_background(){
	return apply_filters(
		'hhr_home_background',
		get_stylesheet_directory_uri()."/imgs/hhr-header.jpg"
	);
}

function hhr_get_default_about_background(){
	return apply_filters(
		'hhr_about_background',
		get_stylesheet_directory_uri()."/imgs/hhr-abt-header.jpg"
	);
}
//Add pagination support for theme
/*function pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2)+1;

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }

    if(1 != $pages)
    {
        echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
        if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
            }
        }

        if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
        echo "</div>\n";
    }
}*/

function format_this($content) {
    	$post = get_post();
    	if($post->post_type != 'post') return $content; 
    	return wpautop($content);
}

?>