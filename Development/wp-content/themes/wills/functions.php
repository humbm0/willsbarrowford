<?php
/*===================================================================================
* Add global options
* =================================================================================*/

/**
 *
 * The page content surrounding the settings fields. Usually you use this to instruct non-techy people what to do.
 *
 */
function theme_settings_page(){ 
	?>
	<div class="wrap">
		<h1>Contact Info</h1>
		<p>This information is used around the website, so changing these here will update them across the website.</p>
		<form method="post" action="options.php">
			<?php
			settings_fields("section");
			do_settings_sections("theme-options");
			submit_button();
			?>
		</form>
	</div>
	
	<?php }

/**
 *
 * Next comes the settings fields to display. Use anything from inputs and textareas, to checkboxes multi-selects.
 *
 */

// Phone
function display_support_phone_element(){ ?>
	
	<input type="tel" name="support_phone" placeholder="Enter phone number" value="<?php echo get_option('support_phone'); ?>" size="35">

<?php }

// Email
function display_support_email_element(){ ?>
	
	<input type="email" name="support_email" placeholder="Enter email address" value="<?php echo get_option('support_email'); ?>" size="35">
	
<?php }

// Facebook
function display_facebook_element(){ ?>
	
	<input type="url" name="facebook_url" placeholder="https://example.com" value="<?php echo get_option('facebook_url'); ?>" size="35">
	
<?php }

// Facebook
function display_instagram_element(){ ?>
	
	<input type="url" name="instagram_url" placeholder="https://example.com" value="<?php echo get_option('instagram_url'); ?>" size="35">
	
<?php }


/**
 *
 * Here you tell WP what to enqueue into the <form> area. You need:
 *
 * 1. add_settings_section
 * 2. add_settings_field
 * 3. register_setting
 *
 */

function display_custom_info_fields(){
	
	add_settings_section("section", "Company Information", null, "theme-options");

	add_settings_field("support_phone", "Phone number", "display_support_phone_element", "theme-options", "section");
    add_settings_field("support_email", "Email address", "display_support_email_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook URL", "display_facebook_element", "theme-options", "section");
    add_settings_field("instagram_url", "Instagram URL", "display_instagram_element", "theme-options", "section");

	register_setting("section", "support_phone");
    register_setting("section", "support_email");
    register_setting("section", "facebook_url");
    register_setting("section", "instagram_url");
	
}

add_action("admin_init", "display_custom_info_fields");

/**
 *
 * Tie it all together by adding the settings page to wherever you like. For this example it will appear
 * in Settings > Contact Info
 *
 */

function add_custom_info_menu_item(){
	
	add_options_page("Contact Info", "Contact Info", "manage_options", "contact-info", "theme_settings_page");
	
}

add_action("admin_menu", "add_custom_info_menu_item");
?>