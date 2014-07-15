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
	register_setting( 'prettypre-settings-group', 'textsize' );
}

function prettypre_settings_page() {

?>

<div class="wrap">

	<h2>Pretty Pre Settings</h2>
	
	<!-- Initiate admin style classes -->
	<link rel="stylesheet" type="text/css" href="<?php echo plugins_url( "/prettyprecss.php?admin=1&style=".get_option('selectstyle')."&ts=".get_option('textsize'), __FILE__ ) ?>" />
	<link rel="stylesheet" href="<?php echo plugins_url( "/jquery-ui.css", __FILE__ ) ?>">
	
	<!-- Initiate admin javascript for slider -->
	<script src="<?php echo plugins_url( "/jquery-1.10.2.js", __FILE__ ) ?>"></script>
	<script src="<?php echo plugins_url( "/jquery-ui.js", __FILE__ ) ?>"></script>

	<script>

		$(function() {

		$( "#slider-range-max" ).slider({
			range: "max",
			min: 6,
			max: 24,
			value: <? if (get_option('textsize')>"0") { echo get_option('textsize'); } else { echo "10"; }?>,
			slide: function( event, ui ) {
				$( "#textsize" ).val( ui.value );
			}
		});

		$( "#textsize" ).val( $( "#slider-range-max" ).slider( "textsize" ) );
		});

	</script>

	<form method="post" action="options.php">

		<?php settings_fields( 'prettypre-settings-group' ); ?>

		<h3>Select a pre theme (this theme will become active throughout your entire site.)</h3>
		
		<div style="float:left;"><input type="radio" name=selectstyle value="1" <? if (get_option('selectstyle')=="1") { echo "checked"; }?>></div>
		<div class="standard" style="float:left;">&#60;&#63;php  // Default pre style &#63;&#62;</div>

		<div style="clear:both;padding:5px;"><hr></div>

		<div style="float:left;"><input type="radio" name=selectstyle value="2" <? if (get_option('selectstyle')=="2") { echo "checked"; }?>></div>
		<div class="apple" style="float:left;">&#60;&#63;php  // Apple2e pre style &#63;&#62;</div>

		<div style="clear:both;padding:5px;"><hr></div>

		<div style="float:left;">
		<input type="radio" name=selectstyle value="3" <? if (get_option('selectstyle')=="3") { echo "checked"; }?>></div>
		<div class="linux" style="float:left;">&#60;&#63;php  // Linux pre style &#63;&#62;</div>

		<div style="clear:both;padding:5px;"><hr></div>

		<div style="width:50%;">
		
			<label for="amount">Font size:</label>
			<input type="text" id="textsize" name="textsize"<? if (get_option('textsize')>"0") { echo "value=\"".get_option('textsize')."\""; }?>readonly style="border:0; color:#f6931f; font-weight:bold;">

		</div>
<div id="slider-range-max"></div>

		<p class="submit">

			<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />

		</p>

	</form>

</div>

This is an open source project and a work in progress.  You can learn more at <a href="http://prettypre.com" target="_blank">The Prettypre Website</a> or contribute to the plugin at <a href="https://github.com/ifyouwillit/Prettypre" target="_blank">Github</a>.
<?php } ?>
