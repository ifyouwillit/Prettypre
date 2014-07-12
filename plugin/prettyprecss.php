<? 
header("Content-type: text/css");
?>
/* Import The One True Font */
@font-face {
  font-family: 'The One True Font (System 8x12) Regular';
  src: url('http://www.fontsaddict.com/fontface/the-one-true-font-system-8x12-regular.ttf');
}
				

/* Import Press Start 2P Font from Google */
@font-face {
  font-family: 'Press Start 2P';
  font-style: normal;
  font-weight: 400;
  src: local('Press Start 2P'), local('PressStart2P-Regular'), url(http://fonts.gstatic.com/s/pressstart2p/v3/8Lg6LX8-ntOHUQnvQ0E7o3dD2UuwsmbX3BOp4SL_VwM.woff) format('woff');
}

<? if (($_GET['style']=='1') || ($_GET['admin']=='1')) { ?>
/* Standard pre style */
pre, .standard {
	background: #f3f3f7 !important;
	border: 1px solid #dedee3  !important;
	padding: 11px !important;
	font-size: 12px !important;
	line-height: 1.3em !important;
	margin-bottom: 22px !important;
	overflow: auto !important;
}

<? } if (($_GET['style']=='3') || ($_GET['admin']=='1')) { ?>
/* Linux Terminal */
pre, .linux {
	background:#000000 !important;
	color:#ffffff !important;
}

<? } if (($_GET['style']=='2') || ($_GET['admin']=='1')) { ?>
/* Apple IIe */
pre, .apple {
	background:#000000 !important;
	color:#67e744 !important;
	font-size: 16px !important;
	font-family: 'Press Start 2P', Arial, serif !important; 
	font-weight: 50 !important;
}

<? } ?>
