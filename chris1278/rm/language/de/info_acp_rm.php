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
	'ACP_RM_INFO'						=>	'Installationsinfo',
	'ACP_RM_SETTINGS'					=>	'Einstellungen',
	'RM_UPDATE'							=>	'Die Revolvermaps-Einstellungen wurden erfolgreich übernommen!',

	//Permission Translation
	'ACL_U_VIEW_RM'						=>	'Kann Revolvermaps sehen',

	// Settings-Page
	'ACP_RM_INSTALLATIONS_INFORMATION'	=>	'<strong>Vorabinfo:</strong>
											<br><br> 
											Um diese Extension Nutzen zu können musst du dir erst den Skripcode für das widget auf
											<a href="https://www.revolvermaps.com/" target="_blank"><mark>Revolvermaps.com</mark></a> besorgen.
											<br><br>											 
											Suche dir dort ein Widget aus was du gerne haben möchtest. Du kannst zwischen verschiedenen Optionen bzw. Varianten  wählen. 
											Wenn du dir dort ein Widget erstellst, bekommst du am Ende einen Skriptcode denn du in deine Homepage einbinden kannst. Das Widget ist nicht nur für Foren geeignet, sondern man kann dieses auch auf einer ganz normalen HTML Homepage einbinden.
											Diesen Skriptcode brauchst du, damit du in deinem Forum dieses Widget einbinden kannst.
											<br><br>
											Dann wünsch ich dir Viel Spaß damit!',
	'ACP_RM_PAGE_TITLE'					=>	'Revolvermaps-Einstellungen',
	'ACP_RM_PAGE_TITLE_EXPLAIN'			=>	'Hier kannst du einige Einstellungen für die Erweiterung vornehmen.',
	'ACP_RM_PERM_TITLE'					=>	'Einstellen der Berechtigungen:',
	'ACP_RM_PERMISSION_BEFORE'			=>	 'Mit dem <b>phpbb eigenem Berechtigungssystem</b> kann über die Einstellungen der  ',
	'ACP_RM_USERS_PERMISSIONS'			=>	'Benutzerrechte',
	'ACP_ANDOR'							=>	' und bzw. oder den ',
	'ACP_RM_GROUPS_PERMISSIONS'			=>	'Gruppenrechten',
	'ACP_RM_PERMISSION_AFTER'			=>	' unter <b>Diverses</b> eingestellt werden, wer die Revolvermaps sehen darf.',
	'ACP_RM_SET_TITLE'					=>	'Einstellungsoptionen:',
	'RM_ENABLE'							=>	'Revolvermaps Aktivieren/Deaktivieren',
	'RM_ENABLE_EXPLAIN'					=>	'Hier kannst du die Revolvermaps Erweiterung Aktivieren bzw. deaktivieren.',
	'RM_POSITION'						=>	'Anzeige-Position:',
	'RM_POSITION_EXPLAIN'				=>	'Hier kannst du auswählen an welcher Stelle du die Revolvermaps im Forum angezeigt haben möchtest.<br><br><b>Standard: </b> "Unter der Statistik anzeigen"',
	'RM_FORUMLIST_BEFORE'				=> 	'Über der Navbar',
	'RM_FORUMLIST_AFTER'				=> 	'Unter der Navbar',
	'RM_ONLINE_LIST_BEFORE'				=> 	'Über der Statistik anzeigen',
	'RM_STATISTICS_AFTER'				=> 	'Unter der Statistik anzeigen',
	'SHOW_RM_ALL'						=>	'Zeige Revolvermaps auf allen Positionen',
	'SHOW_RM_ALL_EXPLAIN'				=>	'Dies dient dir als Administrator dazu auszuwählen wo du die Revolvermaps gerne platzieren bzw. anzeigen lassen möchtest. Wenn du diese Option auf <b>"Ja"</b> setzt werden alle verfügbaren Positionen eingeblendet. Du solltest danach wieder auf <b>"Nein"</b> wählen damit die Revolvermaps am Ende nur auf der von dir Gewünschten Position eingeblendet wird.<br><br> <i><u><strong>Wichtig:</strong></u></i><br>Dies ist nur für Benutzer mit Administrator-Rechten sichtbar. Alle Anderen Benutzer sehen nur (je nach eingestellten Berechtigungen) die in der Positionsauswahl eingestellte Position. ',
	'RM_WIDGET'							=>	'Skriptcode-Eingabe',
	'RM_WIDGET_EXPLAIN'					=>	'Hier gib bitte denn Skriptcode ein, welchen du dir vorher bei <a href="https://www.revolvermaps.com/" target="_blank"><mark>Revolvermaps.com</mark></a> erstellen lassen musst. <br><br>Weitere Info Siehe Obere Box.',
	'ACP_WIDGETINFO'					=>	'Bitte hier den Skriptcode Einfügen',
));
