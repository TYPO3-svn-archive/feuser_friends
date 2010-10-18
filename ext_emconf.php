<?php

########################################################################
# Extension Manager/Repository config file for ext "feuser_friends".
#
# Auto generated 18-10-2010 20:18
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Frontend-user friends',
	'description' => 'A styleable FE user list and profile viewer using templates. Use t3jquery for better integration of other jQuery extensions.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '0.4.2',
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Juergen Furrer',
	'author_email' => 'juergen.furrer@gmail.com',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'php' => '5.0.0-5.3.99',
			'typo3' => '4.3.0-4.4.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:63:{s:12:"ext_icon.gif";s:4:"54d5";s:17:"ext_localconf.php";s:4:"a0de";s:14:"ext_tables.php";s:4:"7324";s:14:"ext_tables.sql";s:4:"105c";s:33:"icon_tx_feuserfriends_friends.gif";s:4:"c5c4";s:33:"icon_tx_feuserfriends_message.gif";s:4:"2f6e";s:13:"locallang.xml";s:4:"a0c5";s:16:"locallang_db.xml";s:4:"347a";s:46:"selicon_tt_content_tx_feuserfriends_view_0.gif";s:4:"7148";s:46:"selicon_tt_content_tx_feuserfriends_view_1.gif";s:4:"5370";s:46:"selicon_tt_content_tx_feuserfriends_view_2.gif";s:4:"cb3f";s:46:"selicon_tt_content_tx_feuserfriends_view_3.gif";s:4:"c5c4";s:46:"selicon_tt_content_tx_feuserfriends_view_4.gif";s:4:"2f6e";s:12:"t3jquery.txt";s:4:"ba1f";s:14:"doc/manual.sxw";s:4:"1e26";s:14:"pi1/ce_wiz.gif";s:4:"b3b7";s:34:"pi1/class.tx_feuserfriends_pi1.php";s:4:"8e7c";s:42:"pi1/class.tx_feuserfriends_pi1_wizicon.php";s:4:"ae05";s:13:"pi1/clear.gif";s:4:"cc11";s:23:"pi1/feuser_friends.tmpl";s:4:"699a";s:17:"pi1/locallang.xml";s:4:"42d9";s:21:"res/jquery/index.html";s:4:"a338";s:54:"res/jquery/css/custom-theme/jquery-ui-1.7.2.custom.css";s:4:"58eb";s:76:"res/jquery/css/custom-theme/images/ui-bg_diagonals-thick_18_b81900_40x40.png";s:4:"1c7f";s:76:"res/jquery/css/custom-theme/images/ui-bg_diagonals-thick_20_666666_40x40.png";s:4:"f040";s:66:"res/jquery/css/custom-theme/images/ui-bg_flat_10_000000_40x100.png";s:4:"c18c";s:67:"res/jquery/css/custom-theme/images/ui-bg_glass_100_f6f6f6_1x400.png";s:4:"5f18";s:67:"res/jquery/css/custom-theme/images/ui-bg_glass_100_fdf5ce_1x400.png";s:4:"d26e";s:66:"res/jquery/css/custom-theme/images/ui-bg_glass_65_ffffff_1x400.png";s:4:"e5a8";s:73:"res/jquery/css/custom-theme/images/ui-bg_gloss-wave_35_9f2614_500x100.png";s:4:"946d";s:76:"res/jquery/css/custom-theme/images/ui-bg_highlight-soft_100_eeeeee_1x100.png";s:4:"384c";s:75:"res/jquery/css/custom-theme/images/ui-bg_highlight-soft_75_ffe45c_1x100.png";s:4:"b806";s:62:"res/jquery/css/custom-theme/images/ui-icons_222222_256x240.png";s:4:"9129";s:62:"res/jquery/css/custom-theme/images/ui-icons_228ef1_256x240.png";s:4:"8d4d";s:62:"res/jquery/css/custom-theme/images/ui-icons_65160b_256x240.png";s:4:"9f31";s:62:"res/jquery/css/custom-theme/images/ui-icons_ef8c08_256x240.png";s:4:"47fc";s:62:"res/jquery/css/custom-theme/images/ui-icons_ffd27a_256x240.png";s:4:"f224";s:62:"res/jquery/css/custom-theme/images/ui-icons_ffffff_256x240.png";s:4:"2cc8";s:51:"res/jquery/css/theme-1.8/jquery-ui-1.8.4.custom.css";s:4:"89c6";s:73:"res/jquery/css/theme-1.8/images/ui-bg_diagonals-thick_18_b81900_40x40.png";s:4:"95f9";s:73:"res/jquery/css/theme-1.8/images/ui-bg_diagonals-thick_20_666666_40x40.png";s:4:"f040";s:63:"res/jquery/css/theme-1.8/images/ui-bg_flat_10_000000_40x100.png";s:4:"c18c";s:64:"res/jquery/css/theme-1.8/images/ui-bg_glass_100_f6f6f6_1x400.png";s:4:"5f18";s:64:"res/jquery/css/theme-1.8/images/ui-bg_glass_100_fdf5ce_1x400.png";s:4:"d26e";s:63:"res/jquery/css/theme-1.8/images/ui-bg_glass_65_ffffff_1x400.png";s:4:"e5a8";s:70:"res/jquery/css/theme-1.8/images/ui-bg_gloss-wave_35_9f2614_500x100.png";s:4:"da5d";s:70:"res/jquery/css/theme-1.8/images/ui-bg_gloss-wave_35_f6a828_500x100.png";s:4:"58d2";s:73:"res/jquery/css/theme-1.8/images/ui-bg_highlight-soft_100_eeeeee_1x100.png";s:4:"384c";s:72:"res/jquery/css/theme-1.8/images/ui-bg_highlight-soft_75_ffe45c_1x100.png";s:4:"b806";s:59:"res/jquery/css/theme-1.8/images/ui-icons_222222_256x240.png";s:4:"ebe6";s:59:"res/jquery/css/theme-1.8/images/ui-icons_228ef1_256x240.png";s:4:"79f4";s:59:"res/jquery/css/theme-1.8/images/ui-icons_65160b_256x240.png";s:4:"8250";s:59:"res/jquery/css/theme-1.8/images/ui-icons_ef8c08_256x240.png";s:4:"ef9a";s:59:"res/jquery/css/theme-1.8/images/ui-icons_ffd27a_256x240.png";s:4:"ab8c";s:59:"res/jquery/css/theme-1.8/images/ui-icons_ffffff_256x240.png";s:4:"342b";s:33:"res/jquery/js/jquery-1.3.2.min.js";s:4:"7d91";s:33:"res/jquery/js/jquery-1.4.2.min.js";s:4:"1009";s:33:"res/jquery/js/jquery-1.4.3.min.js";s:4:"e495";s:43:"res/jquery/js/jquery-ui-1.7.2.custom.min.js";s:4:"8854";s:43:"res/jquery/js/jquery-ui-1.8.4.custom.min.js";s:4:"033d";s:34:"res/jquery/js/jquery.easing-1.3.js";s:4:"6516";s:20:"static/constants.txt";s:4:"e082";s:16:"static/setup.txt";s:4:"2b76";}',
	'suggests' => array(
	),
);

?>