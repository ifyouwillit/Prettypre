<?php
// create custom plugin settings menu
add_action('admin_menu', 'prettypre_create_menu');

function prettypre_create_menu() {

	//create new top-level menu
	$page_hook_suffix = add_menu_page('Pretty Pre', 'Pretty Pre', 'administrator',__FILE__, 'prettypre_settings_page');

	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
	add_action('admin_print_scripts-' . $page_hook_suffix, 'prettypre_admin_scripts');
}

function prettypre_admin_scripts() {

	/* Link our already registered script to a page */

	wp_enqueue_style( 'prettypre-admin',plugins_url("/prettyprecss.php?admin=1&style=".get_option('selectstyle')."&ts=".get_option('textsize'), __FILE__ ));
}

function register_mysettings() {

	//register our settings
	register_setting( 'prettypre-settings-group', 'selectstyle' );
	register_setting( 'prettypre-settings-group', 'textsize' );

}

function prettypre_settings_page() {

?>
<div class="wrap">

	<h2>Pretty Pre Settings</h2>
	
	<form method="post" action="options.php">

		<?php settings_fields( 'prettypre-settings-group' ); ?>

		<h3>Select a pre theme (this theme will become active throughout your entire site.)</h3>
		
		<div style="float:left;"><input type="radio" name="selectstyle" value="1" <? if (get_option('selectstyle')=="1") { echo "checked"; }?>></div>
		<div class="standard" style="float:left;">&#60;&#63;php  // Default pre style &#63;&#62;</div>

		<div style="clear:both;padding:5px;"><hr></div>

		<div style="float:left;"><input type="radio" name="selectstyle" value="2" <? if (get_option('selectstyle')=="2") { echo "checked"; }?>></div>
		<div class="apple" style="float:left;">] REM --APPLE IIE</div>

		<div style="clear:both;padding:5px;"><hr></div>

		<div style="float:left;">
		<input type="radio" name="selectstyle" value="3" <? if (get_option('selectstyle')=="3") { echo "checked"; }?>></div>
		<div class="linux" style="float:left;">$ mkdir BashCommandLine</div>

		<div style="clear:both;padding:5px;"><hr></div>

		<div style="float:left;">

		<input type="radio" name="selectstyle" value="4" <? if (get_option('selectstyle')=="4") { echo "checked"; }?>></div>
		<div class="suzette" style="float:left;">&#60;style&#62;  /* Suzette's (@mt_Suzette) pre style */ &#60;/style&#62;</div>

		<div style="clear:both;padding:5px;"><hr></div>
		<div style="float:left;">
		<input type="radio" name="selectstyle" value="5" <? if (get_option('selectstyle')=="5") { echo "checked"; }?>></div>
		<div class="dos" style="float:left;">C:\>DOSSTYLE.EXE</div>

		<div style="clear:both;padding:5px;"><hr></div>
		<div style="float:left;">
		<input type="radio" name="selectstyle" value="6" <? if (get_option('selectstyle')=="6") { echo "checked"; }?>></div>
		<div class="commodore" style="float:left;">Commodore 64</div>

		<div style="clear:both;padding:5px;"><hr></div>
		<div style="float:left;">
		<input type="radio" name="selectstyle" value="7" <? if (get_option('selectstyle')=="7") { echo "checked"; }?>></div>
		<div class="hand" style="float:left;">&lt;?php echo "my handwriting"; ?&gt;</div>

		<div style="clear:both;padding:5px;"><hr></div>

		<div style="width:50%;">
		
			<label for="amount">Font size:</label>
			<select name="textsize">
				<option value="<? if (get_option('textsize')>"0") { echo get_option('textsize'); } else { echo "10"; }?>"><? if (get_option('textsize')>"0") { echo get_option('textsize'); } else { echo "10"; }?>px</option>
				<option value="6">6px</option>
				<option value="8">8px</option>
				<option value="10">10px</option>
				<option value="12">12px</option>
				<option value="14">14px</option>
				<option value="16">16px</option>
				<option value="18">18px</option>
				<option value="20">20px</option>
				<option value="22">22px</option>
				<option value="24">24px</option>
			</select>
			
		</div>
<div id="slider-range-max"></div>

		<p class="submit">

			<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />

		</p>

	</form>

</div>

This is an open source project and a work in progress.  You can learn more at <a href="http://prettypre.com" target="_blank">The Prettypre Website</a> or contribute to the plugin at <a href="https://github.com/ifyouwillit/Prettypre" target="_blank">Github</a>.
<?php } ?>
