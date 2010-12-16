<?php
if ( function_exists('register_sidebar') )
    register_sidebars((2),array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
            'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));



// enable threaded comments
function enable_threaded_comments(){
	if (!is_admin()) {
		if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
			wp_enqueue_script('comment-reply');
		}
}
add_action('get_header', 'enable_threaded_comments');



// enable theme switching for dev site development
// see: http://inspectelement.com/tutorials/create-a-wordpress-theme-development-environment/

function pageURL() {
    $pageURL = 'http';
     if ($_SERVER["HTTPS"] == "on") {
        $pageURL .= "s";
    }
     $pageURL .= "://";
     if ($_SERVER["SERVER_PORT"] != "80") {
          $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
     }
    else {
          $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
     }
 return $pageURL;
}

?>