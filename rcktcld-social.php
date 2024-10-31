<?php
/*
Plugin Name: Social Share Buttons
Plugin URI: http://www.gorocketcloud.com
Description: Very customizable social media sharing plugin.
Version: 3.2.0
Author: RocketCloud Inc.
Author URI: http://www.gorocketcloud.com
*/

function rcktcld_social_menu_item() {
  add_submenu_page("options-general.php", "Social Share Buttons", "Social Share Buttons", "manage_options", "rcktcld-social", "rcktcld_social_page");
}

function rcktcld_social_page()
{
   ?>
      <div class="wrap">
         <h1>Social Share Buttons</h1>
         <p>Because sharing is caring!</p>

         <form method="post" action="options.php">
            <?php
               settings_fields("admin_settings_section");
 
               do_settings_sections("rcktcld-social");
                
               submit_button(); 
            ?>
         </form>
         
         <p>Questions? Troubles? Other? <a href="mailto:ryan@gorocketcloud.com">Send me an email</a>.</p>
         <p>Please take a moment to <a href="https://wordpress.org/plugins/rocketcloud-social-share/"><strong>rate this plug-in</strong></a>.</p>
         
      </div>
   <?php
}



/*************************************************************************************************

Administrative Controls

*************************************************************************************************/



function rcktcld_social_settings() {
    add_settings_section("admin_settings_section", "", null, "rcktcld-social");
	
	//social media to display 
    add_settings_field("add-facebook", "Facebook", "add_facebook_function", "rcktcld-social", "admin_settings_section");
    add_settings_field("add-twitter", "Twitter", "add_twitter_function", "rcktcld-social", "admin_settings_section");
    add_settings_field("add-linkedin", "LinkedIn", "add_linkedin_function", "rcktcld-social", "admin_settings_section");
    add_settings_field("add-stumbleupon", "StumbleUpon", "add_stumbleupon_function", "rcktcld-social", "admin_settings_section");
	add_settings_field("add-googleplus", "Google+", "add_googleplus_function", "rcktcld-social", "admin_settings_section");
	add_settings_field("add-tumblr", "Tumblr", "add_tumblr_function", "rcktcld-social", "admin_settings_section");
	add_settings_field("add-pinterest", "Pinterest", "add_pinterest_function", "rcktcld-social", "admin_settings_section");
    add_settings_field("add-reddit", "Reddit", "add_reddit_function", "rcktcld-social", "admin_settings_section");
    add_settings_field("add-digg", "Digg", "add_digg_function", "rcktcld-social", "admin_settings_section");
    add_settings_field("add-vk", "VK", "add_vk_function", "rcktcld-social", "admin_settings_section");
    add_settings_field("add-xing", "Xing", "add_xing_function", "rcktcld-social", "admin_settings_section");
    add_settings_field("add-email", "Email", "add_email_function", "rcktcld-social", "admin_settings_section");
    add_settings_field("add-print", "Print", "add_print_function", "rcktcld-social", "admin_settings_section");
    add_settings_field("add-sizing", "Select Icon Size", "add_sizing_function", "rcktcld-social", "admin_settings_section");
	add_settings_field("colour-options", "Change Icon Colour", "colour_options_function", "rcktcld-social", "admin_settings_section");
    add_settings_field("sm-bg-colour", "Background Colour", "display_background_colour_function", "rcktcld-social", "admin_settings_section");
    add_settings_field("circle-square", "Circle or Square Background", "circle_square_function", "rcktcld-social", "admin_settings_section");
    add_settings_field("display-justify", "Justify Icons", "display_justify_function", "rcktcld-social", "admin_settings_section");
	add_settings_field("display-location", "Button Location", "display_location_function", "rcktcld-social", "admin_settings_section");
	add_settings_field("display-title", "Add Title (Optional)", "display_title_function", "rcktcld-social", "admin_settings_section");

    //register all settings
    register_setting("admin_settings_section", "add-facebook");
    register_setting("admin_settings_section", "add-twitter");
    register_setting("admin_settings_section", "add-linkedin");
    register_setting("admin_settings_section", "add-stumbleupon");
	register_setting("admin_settings_section", "add-googleplus");
	register_setting("admin_settings_section", "add-tumblr");
	register_setting("admin_settings_section", "add-pinterest");
	register_setting("admin_settings_section", "add-email");
    register_setting("admin_settings_section", "add-reddit");
    register_setting("admin_settings_section", "add-digg");
    register_setting("admin_settings_section", "add-print");
    register_setting("admin_settings_section", "add-vk");
    register_setting("admin_settings_section", "add-xing");
    register_setting("admin_settings_section", "add-sizing");
	register_setting("admin_settings_section", "colour-options");
	register_setting("admin_settings_section", "display-options");
	register_setting("admin_settings_section", "display-justify");
    register_setting("admin_settings_section", "circle-square");
    register_setting("admin_settings_section", "display-location");
	register_setting("admin_settings_section", "display-title");
	register_setting("admin_settings_section", "sm-bg-colour");
}
 
function add_facebook_function() { ?>
    <input id="facebook" type="checkbox" name="add-facebook" value="1" <?php checked(1, get_option('add-facebook'), true); ?> />
	<label for="facebook"></label>
    <?php
}

function add_twitter_function() { ?>
	<input id="twitter" type="checkbox" name="add-twitter" value="2" <?php checked(2, get_option('add-twitter'), true); ?> />
	<label for="twitter"></label>
    <?php
}

function add_linkedin_function() { ?>
    <input id="linkedin" type="checkbox" name="add-linkedin" value="3" <?php checked(3, get_option('add-linkedin'), true); ?> />
	<label for="linkedin"></label>
    <?php
}

function add_stumbleupon_function() { ?>
	<input id="stumbleupon" type="checkbox" name="add-stumbleupon" value="4" <?php checked(4, get_option('add-stumbleupon'), true); ?> />
	<label for="stumbleupon"></label>
    <?php
}

function add_googleplus_function() { ?>
	<input id="googleplus" type="checkbox" name="add-googleplus" value="5" <?php checked(5, get_option('add-googleplus'), true); ?> />
	<label for="googleplus"></label>
    <?php
}

function add_tumblr_function() { ?>
	<input id="tumblr" type="checkbox" name="add-tumblr" value="6" <?php checked(6, get_option('add-tumblr'), true); ?> />
	<label for="tumblr"></label>
    <?php
}

function add_pinterest_function() { ?>
	<input id="pinterest" type="checkbox" name="add-pinterest" value="7" <?php checked(7, get_option('add-pinterest'), true); ?> />
	<label for="pinterest"></label>
    <?php
}

function add_reddit_function() { ?>
    <input id="reddit" type="checkbox" name="add-reddit" value="8" <?php checked(8, get_option('add-reddit'), true); ?> />
    <label for="reddit"></label>
    <?php
}

function add_digg_function() { ?>
    <input id="digg" type="checkbox" name="add-digg" value="9" <?php checked(9, get_option('add-digg'), true); ?> />
    <label for="digg"></label>
    <?php
}

function add_vk_function() { ?>
    <input id="vk" type="checkbox" name="add-vk" value="10" <?php checked(10, get_option('add-vk'), true); ?> />
    <label for="vk"></label>
    <?php
}

function add_xing_function() { ?>
    <input id="xing" type="checkbox" name="add-xing" value="13" <?php checked(13, get_option('add-xing'), true); ?> />
    <label for="xing"></label>
    <?php
}

function add_email_function() { ?>
	<input id="email" type="checkbox" name="add-email" value="11" <?php checked(11, get_option('add-email'), true); ?> />
	<label for="email"></label>
    <?php
}

function add_print_function() { ?>
    <input id="print" type="checkbox" name="add-print" value="12" <?php checked(12, get_option('add-print'), true); ?> />
    <label for="print"></label>
    <?php
}

function add_sizing_function() { ?>
    <input type="text" placeholder="14px" maxlength="6" size="12" name="add-sizing" id="fontawesome-size" value="<?php echo get_option('add-sizing'); ?>">
    <?php
}

function colour_options_function() { ?>
    <input type="text" class="jscolor" placeholder="000000" maxlength="6" size="12" name="colour-options" id="fontawesome-colour" value="<?php echo get_option('colour-options'); ?>">
    <?php
}

function display_background_colour_function() {
    ?>
    <input type="text" placeholder="ffffff" class="jscolor" maxlength="6" size="12" name="sm-bg-colour" id="colorpickerfield" value="<?php echo get_option('sm-bg-colour'); ?>">
    <?php
}

function display_title_function() {
    ?>
    <input type="text" placeholder="Sharing is caring!" name="display-title" value="<?php echo get_option('display-title'); ?>" />
    <?php
}

function circle_square_function() {
    $displayCircleOrSquare = get_option( 'circle-square' ); ?>
    <select name="circle-square">
    <option value="60" <?php selected( $displayCircleOrSquare, 60 ); ?> >Square Background</option>
    <option value="61" <?php selected( $displayCircleOrSquare, 61 ); ?> >Circle Background</option>
    </select><?php
}

function display_justify_function() {
	$display_justify_settings = get_option( 'display-justify' ); ?>
	<select name="display-justify">
        <option value="300" <?php selected( $display_justify_settings, 300 ); ?> >Floating Icons Left</option>
        <option value="400" <?php selected( $display_justify_settings, 400 ); ?> >Floating Icons Right</option>
        <option value="500" <?php selected( $display_justify_settings, 500 ); ?> >Embed In Post</option>

    </select><?php
}

function display_location_function() {
	$display_location_settings = get_option( 'display-location' ); ?>
    <p>NOTE: This only effects the above 'Embed In Post' option.</p>
	<select name="display-location">
        <option value="600" <?php selected( $display_location_settings, 600 ); ?> >Top Of Content</option>
        <option value="700" <?php selected( $display_location_settings, 700 ); ?> >Bottom Of Content</option>
    </select><?php
}

/*************************************************************************************************

Display controls for posts

*************************************************************************************************/

function add_rcktcld_social($socialContent) {	

    global $post;

    $current_page_url = get_permalink($post->ID);
    $current_page_url = esc_url($current_page_url);

    //get title
    $sm_title = get_option('display-title');
    $sm_title_display = "<p><strong>".$sm_title."</strong></p>";
    if ($sm_title != "") {
        $sm_title_display;
    }

	//icon size
	$get_size = get_option( 'add-sizing' );
    $concat_get_size = $get_size.'px';
    $icon_size = "font-size:$concat_get_size";

    //reset padding
    $setHxW = $get_size * 2;
    $setHeight = $setHxW.'px';
    $setWidth = $setHxW.'px';
    $totalHeight = "height:$setHeight";
    $totalWidth =  "width:$setWidth";

    //background colour
    $get_colour = get_option('sm-bg-colour');
    $sm_bg_colour = "background-color:#$get_colour";

	//icon colour
	$iconColour = get_option('colour-options');
    $faColour = "color:#$iconColour";
	
	//justify icon location
	if((get_option( 'display-justify' ) == 300)) {
		$justifyStyle = "style='position: fixed; top: 20%; left: 0; z-index:999999'";
		$iconStyle = 'iconStyleA';
	}
	elseif((get_option( 'display-justify' ) == 400)) {
		$justifyStyle = "style='position: fixed; top: 20%; right: 0; z-index:999999'";
        $iconStyle = 'iconStyleA';
	}
	elseif((get_option( 'display-justify' ) == 500)) {
		$justifyStyle = "style='float:left'";
        $iconStyle = 'iconStyleB';
	}

    //circle or square background
    if((get_option( 'circle-square' ) == 60)) {
        $circleOrSquare = "square";
    }
    elseif((get_option( 'circle-square' ) == 61)) {
        $circleOrSquare = "circle";
    }
	
	$displaySocial = '';
	if (is_single($post)) {
	
	$displaySocial = "<div $justifyStyle class='rcktcld-social-wrapper'>".$sm_title_display."<ul class='$iconStyle iconCustomStyle'>";

        // facebook displays
        if((get_option("add-facebook") == 1)) {
            $displaySocial = $displaySocial . "<li><a class='rkt share' target='_blank' href='http://www.facebook.com/sharer.php?u=" . $current_page_url . "'><i class='fa fa-facebook custom-icon $circleOrSquare' style='$sm_bg_colour; $faColour; $icon_size; $totalHeight; $totalWidth' aria-hidden='true'><span class='fix-editor'>&nbsp;</span></i></a></li>";
        }

        // twitter displays
        if((get_option("add-twitter") == 2)) {
            $displaySocial = $displaySocial . "<li><a class='rkt share' target='_blank' href='https://twitter.com/share?url=" . $current_page_url . "'><i class='fa fa-twitter custom-icon $circleOrSquare' style='$sm_bg_colour; $faColour; $icon_size; $totalHeight; $totalWidth' aria-hidden='true'><span class='fix-editor'>&nbsp;</span></i></a></li>";
        }

        // linkedin displays
        if((get_option("add-linkedin") == 3)) {
            $displaySocial = $displaySocial . "<li><a class='rkt share' target='_blank' href='http://www.linkedin.com/shareArticle?url=" . $current_page_url . "'><i class='fa fa-linkedin custom-icon $circleOrSquare' style='$sm_bg_colour; $faColour; $icon_size; $totalHeight; $totalWidth' aria-hidden='true'><span class='fix-editor'>&nbsp;</span></i></a></li>";
        }

        // stumbleupon displays
        if((get_option("add-stumbleupon") == 4)) {
            $displaySocial = $displaySocial . "<li><a class='rkt share' target='_blank' href='http://www.stumbleupon.com/submit?url=" . $current_page_url . "'><i class='fa fa-stumbleupon custom-icon $circleOrSquare' style='$sm_bg_colour; $faColour; $icon_size; $totalHeight; $totalWidth' aria-hidden='true'><span class='fix-editor'>&nbsp;</span></i></a></li>";
        }

        // google+ displays
        if((get_option("add-googleplus") == 5)) {
            $displaySocial = $displaySocial . "<li><a class='rkt share' target='_blank' href='https://plus.google.com/share?url=" . $current_page_url . "'><i class='fa fa-google-plus custom-icon $circleOrSquare' style='$sm_bg_colour; $faColour; $icon_size; $totalHeight; $totalWidth' aria-hidden='true'><span class='fix-editor'>&nbsp;</span></i></a></li>";
        }

        // tumblr displays
        if((get_option("add-tumblr") == 6)) {
            $displaySocial = $displaySocial . "<li><a class='rkt share' target='_blank' href='http://www.tumblr.com/share/link?url=" . $current_page_url . "'><i class='fa fa-tumblr custom-icon $circleOrSquare' style='$sm_bg_colour; $faColour; $icon_size; $totalHeight; $totalWidth' aria-hidden='true'><span class='fix-editor'>&nbsp;</span></i></a></li>";
        }

        // pinterest displays
        if((get_option("add-pinterest") == 7)) {
            $pinterestimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
            $displaySocial = $displaySocial . "<li><a class='rkt share' target='_blank' href='http://pinterest.com/pin/create/button/?url=" . $current_page_url . "&media=" . $pinterestimage[0] . "'><i class='fa fa-pinterest-p custom-icon $circleOrSquare' style='$sm_bg_colour; $faColour; $icon_size; $totalHeight; $totalWidth' aria-hidden='true'><span class='fix-editor'>&nbsp;</span></i></a></li>";
        }

	    //reddit
        if((get_option("add-reddit") == 8)) {
            $displaySocial = $displaySocial . "<li><a class='rkt share' target='_blank' href='http://www.reddit.com/submit?url=" . $current_page_url . "'><i class='fa fa-reddit-alien custom-icon $circleOrSquare' style='$sm_bg_colour; $faColour; $icon_size; $totalHeight; $totalWidth' aria-hidden='true'><span class='fix-editor'>&nbsp;</span></i></a></li>";
        }

        //digg
        if((get_option("add-digg") == 9)) {
            $displaySocial = $displaySocial . "<li><a class='rkt share' target='_blank' href='http://www.digg.com/submit?url=" . $current_page_url . "'><i class='fa fa-digg custom-icon $circleOrSquare' style='$sm_bg_colour; $faColour; $icon_size; $totalHeight; $totalWidth' aria-hidden='true'><span class='fix-editor'>&nbsp;</span></i></a></li>";
        }

        //VK
        if((get_option("add-vk") == 10)) {
            $displaySocial = $displaySocial . "<li><a class='rkt share' target='_blank' href='http://vkontakte.ru/share.php?url=" . $current_page_url . "'><i class='fa fa-vk custom-icon $circleOrSquare' style='$sm_bg_colour; $faColour; $icon_size; $totalHeight; $totalWidth' aria-hidden='true'><span class='fix-editor'>&nbsp;</span></i></a></li>";
        }

        //Xing
        if((get_option("add-xing") == 13)) {
            $displaySocial = $displaySocial . "<li><a class='rkt share' target='_blank' href='https://www.xing.com/spi/shares/new?url=" . $current_page_url . "'><i class='fa fa-xing custom-icon $circleOrSquare' style='$sm_bg_colour; $faColour; $icon_size; $totalHeight; $totalWidth' aria-hidden='true'><span class='fix-editor'>&nbsp;</span></i></a></li>";
        }
		
		// email displays
		if((get_option("add-email") == 11)) {
		$emailsubject = get_the_title();
		$displaySocial = $displaySocial . "<li><a class='rkt share' target='_blank' href='mailto:?subject=" . $emailsubject . "&body=Check out this site I came across: " . $current_page_url . "'><i class='fa fa-envelope custom-icon $circleOrSquare' style='$sm_bg_colour; $faColour; $icon_size; $totalHeight; $totalWidth' aria-hidden='true'><span class='fix-editor'>&nbsp;</span></i></a></li>";
		}

        //print
        if((get_option("add-print") == 12)) {
            $displaySocial = $displaySocial . "<li><a href='javascript:;' onclick='window.print()'><i class='fa fa-print custom-icon $circleOrSquare' style='$sm_bg_colour; $faColour; $icon_size; $totalHeight; $totalWidth' aria-hidden='true'><span class='fix-editor'>&nbsp;</span></i></a></li>";
        }

    $displaySocial = $displaySocial . "</ul></div><div class='pushAway'></div>";
	
	}
	
	//displays top or bottom
	if((get_option( 'display-location' ) == 700)) {
		return $socialContent = $socialContent . $displaySocial;
	}
	else {
		return $socialContent = $displaySocial . $socialContent;
		}
	}


add_filter('the_content', 'add_rcktcld_social', 99);
add_action("admin_menu", "rcktcld_social_menu_item");
add_action("admin_init", "rcktcld_social_settings");

/*************************************************************************************************

Creates link to the stylesheet and link from plugin to settings page

*************************************************************************************************/
add_action('wp_enqueue_scripts','register_my_scripts');
function register_my_scripts(){
    wp_enqueue_style( 'rkt-frontend', plugins_url( 'css/sharing-is-caring.css', __FILE__ ) );
    wp_enqueue_style( 'rkt-font-awesome', plugins_url( 'css/font-awesome/css/font-awesome.min.css', __FILE__ ) );
}

add_action('wp_enqueue_scripts', 'go_go_javascript');
function go_go_javascript() {
    wp_register_script('rkt-new-window', plugins_url('js/mini-window.js',  __FILE__ ),'','',true );
    wp_enqueue_script('rkt-new-window');
    //wp_register_script('rkt-colour-select', plugins_url('',  __FILE__ ),'','',false );
    //wp_enqueue_script('rkt-colour-select');
}

function load_custom_wp_admin_style($hook) {
    // Load only on ?page=mypluginname

    wp_enqueue_script( 'rkt-colour-select', plugins_url('js/jscolor.min.js', __FILE__) );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );


function rcktcld_settings_link($links) { 
  array_unshift($links, '<a href="options-general.php?page=sharing-is-caring">Settings</a>');
  return $links;
} // odb_settings_link()
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'rcktcld_settings_link');

?>