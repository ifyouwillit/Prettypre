<? header("Content-type: text/css"); ?>

@font-face { /* Import The One True Font */
  font-family: 'The One True Font (System 8x12) Regular';
  src: url('http://www.fontsaddict.com/fontface/the-one-true-font-system-8x12-regular.ttf');
}
				
@font-face { /* Import Press Start 2P Font from Google */
  font-family: 'Press Start 2P';
  font-style: normal;
  font-weight: 400;
  src: local('Press Start 2P'), local('PressStart2P-Regular'), url(http://fonts.gstatic.com/s/pressstart2p/v3/8Lg6LX8-ntOHUQnvQ0E7o3dD2UuwsmbX3BOp4SL_VwM.woff) format('woff');
}

<? if (($_GET['style']=='1') || ($_GET['admin']=='1')) { ?>

pre, .standard { /* Standard pre style */
	background: #f3f3f7 !important;
	border: 1px solid #dedee3  !important;
	padding: 11px !important;
	font-size: 12px !important;
	line-height: 1.3em !important;
	overflow: auto !important;
	font-size: <?php echo $_GET['ts']; ?>px !important;
}

<? } if (($_GET['style']=='3') || ($_GET['admin']=='1')) { ?>

pre, .linux { /* Linux Terminal */
	background:#000000 !important;
	color:#ffffff !important;
	padding: 11px !important;
	font-size: <?php echo $_GET['ts']; ?>px !important;
}

<? } if (($_GET['style']=='2') || ($_GET['admin']=='1')) { ?>

pre, .apple { /* Apple IIe */
	background:#000000 !important;
	color:#67e744 !important;
	font-size: <?php echo $_GET['ts']; ?>px !important;
	font-family: 'Press Start 2P', Arial, serif !important; 
	font-weight: 50 !important;
	padding: 11px !important;
}

<? } if (($_GET['style']=='4') || ($_GET['admin']=='1')) { ?>

pre, .suzette { /* Suzette Terminal */
	background:#000000 !important;
	color:#FF00FF !important;
	padding: 11px !important;
	font-size: <?php echo $_GET['ts']; ?>px !important;
}
<? } ?>
