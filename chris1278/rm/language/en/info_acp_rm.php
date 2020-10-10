<?php
/**
*
* Real-time statistics with Revolvermaps Extension for the phpBB Forum Software package.
*
* @copyright (c) 2020 (Christian-Esch.de)
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/
/**
* DO NOT CHANGE
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	// ACP Allgemein Translation
	'ACP_RM'							=> 	'Revolvermaps',
	'ACP_RM_INFO'						=>	'Installation info',
	'ACP_RM_SETTINGS'					=>	'Settings',
	'RM_UPDATE'							=>	'The Revolvermaps settings have been successfully applied!',

	//Permission Translation
	'ACL_U_VIEW_RM'						=>	'Can Revolvermaps see',

	// Settings-Page
	'ACP_RM_INSTALLATIONS_INFORMATION'	=>	'<strong>Advance info:</strong> 
											<br><br>
											Um diese Erweiterung verwenden zu können, muss der Skriptcode für das Widget auf <a href="https://www.revolvermaps.com/" target="_blank"><mark>Revolvermaps.com</mark></a> generiert werden.
											<br><br>
											Go to the website <a href="https://www.revolvermaps.com/" target="_blank"><mark>Revolvermaps.com</mark></a> and choose a widget there that you would like to have. You can choose between different options or variants. 
											If you have created a widget there, you will receive a script code at the end that you can integrate into your homepage. The widget is not only suitable for forums, but can also be integrated into a normal HTML homepage.
											You need this script code so that you can integrate this widget in your forum.
											<br><br>
											Then I wish you a lot of fun with it!',
	'ACP_RM_PAGE_TITLE'					=>	'Revolvermaps-Settings',
	'ACP_RM_PAGE_TITLE_EXPLAIN'			=>	'Here you can make some settings for the extension.',
	'ACP_RM_PERM_TITLE'					=>	'Settings of permissions:',
	'ACP_RM_PERMISSION_BEFORE'			=>	 'With <b>phpbb´s own authorization system</b> can change the settings ',
	'ACP_RM_USERS_PERMISSIONS'			=>	'User rights',
	'ACP_ANDOR'							=>	' and or or the ',
	'ACP_RM_GROUPS_PERMISSIONS'			=>	'Group rights',
	'ACP_RM_PERMISSION_AFTER'			=>	' can be set under <b>Misc</b>, who can see the Revolvermaps.',
	'ACP_RM_SET_TITLE'					=>	'Setting options:',
	'RM_ENABLE'							=>	'Revolvermaps Activate/Deactivate',
	'RM_ENABLE_EXPLAIN'					=>	'Here you can activate or deactivate the Revolvermaps extension.',
	'RM_POSITION'						=>	'Display position:',
	'RM_POSITION_EXPLAIN'				=>	'Here you can select where you would like the revolver maps to be displayed in the forum.<br><br><b>Default: </b> "Show under the statistics"',
	'RM_FORUMLIST_BEFORE'				=> 	'Above the navbar',
	'RM_FORUMLIST_AFTER'				=> 	'Under the navbar',
	'RM_ONLINE_LIST_BEFORE'				=> 	'Display above the statistics',
	'RM_STATISTICS_AFTER'				=> 	'Show under the statistics',
	'SHOW_RM_ALL'						=>	'Show Revolvermaps in all positions',
	'SHOW_RM_ALL_EXPLAIN'				=>	'This enables you as the administrator to select where you would like to place or display the revolver maps. If you have this option on <b>"Yes"</b>  all available positions are displayed. You should then select <b> "No" </b> again so that the revolver map is only displayed in the position you want at the end.<br><br> <i><u><strong>Important:</strong></u></i><br>This is only visible to users with administrator rights. All other users only see (depending on the set authorizations) the position set in the position selection.',
	'RM_WIDGET'							=>	'Skriptcode-Eingabe',
	'RM_WIDGET_EXPLAIN'					=>	'Please enter your script here, which you must have created beforehand at <a href="https://www.revolvermaps.com/" target="_blank"><mark>Revolvermaps.com</mark></a>. <br><br>See the box above for more information.',
	'ACP_WIDGETINFO'					=>	'Please insert the script code here',
));
