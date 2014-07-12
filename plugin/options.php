<?php
// create custom plugin settings menu
add_action('admin_menu', 'prettypre_create_menu');

function prettypre_create_menu() {

	//create new top-level menu
	add_menu_page('Pretty Pre', 'Pretty Pre', 'administrator',__FILE__, 'prettypre_settings_page');

	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}


function register_mysettings() {

	//register our settings
	register_setting( 'prettypre-settings-group', 'selectstyle' );
}

function prettypre_settings_page() {
?>

<div class="wrap">

<h2>Pretty Pre Settings</h2>

<link rel="stylesheet" type="text/css" href="/wp-content/plugins/prettypre/prettyprecss.php?admin=1" />

<form method="post" action="options.php">

<?php settings_fields( 'prettypre-settings-group' ); ?>

<h3>Select a pre theme (this theme will become active throughout your entire site.)</h3>
<hr>

<div class="standard"><input type="radio" name=selectstyle value="1" <? if (get_option('selectstyle')=="1") { echo "checked"; }?>>Default</div>
<br>
<div class="apple"><input type="radio" name=selectstyle value="2" <? if (get_option('selectstyle')=="2") { echo "checked"; }?>>Apple2e</div>
<br>
<div class="linux"><input type="radio" name=selectstyle value="3" <? if (get_option('selectstyle')=="3") { echo "checked"; }?>>Linux</div>

    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>
</div>
<?php } ?>

