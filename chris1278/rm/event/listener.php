<?php
/**
*
* Real-time statistics with Revolvermaps Extension for the phpBB Forum Software package.
*
* @copyright (c) 2020 (Christian-Esch.de)
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\rm\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var string PHP extension */
	protected $php_ext;

	public function __construct(\phpbb\auth\auth $auth, \phpbb\config\config $config, \phpbb\template\template $template, $language, $php_ext, \phpbb\collapsiblecategories\operator\operator $operator = null)
	{
		$this->auth			= $auth;
		$this->config		= $config;
		$this->template		= $template;
		$this->php_ext		= $php_ext;
		$this->operator		= $operator;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	*/

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'				=>	'load_language_on_setup',
			'core.permissions'				=>	'permissions',
			'core.display_forums_after'		=>	array(array('show_rm')),
			'core.page_header'				=> 	array(array('collaps')),
		);
	}

	/**
	* Load language during user setup
	*
	* @param object $event The event object
	* @return null
	*/
	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name'	=> 'chris1278/rm',
			'lang_set'	=> 'rm',
		);

			if (defined('ADMIN_START'))
			{
			$lang_set_ext[] = array(
				'ext_name'	=> 'chris1278/rm',
				'lang_set' => 'info_acp_rm',
			);
		}

		$event['lang_set_ext'] = $lang_set_ext;
	}

	/**
	* Load permission event
	*/

	public function permissions($event)
	{
			$permissions = $event['permissions'];
			$permissions['u_view_rm'] = array('lang' => 'ACL_U_VIEW_RM', 'cat' => 'misc');
			$event['permissions'] = $permissions;
	}

	/**
	* Settings or the Revolvermaps-Extension
	*/

	public function show_rm()
	{
		if ($this->auth->acl_get('u_view_rm'))
		{
			$rm_enable 							= $this->config['rm_enable'];
			$show_rm_all 						= $this->config['show_rm_all'];
			$rm_position						= $this->config['rm_position'];
			$revolvermaps_widget				= htmlspecialchars_decode($this->config['revolvermaps_widget']);

			$this->template->assign_vars(array(
				'RM_ENABLE'						=> $rm_enable,
				'SHOW_RM_ALL'					=> $show_rm_all,
				'RM_POSITION'					=> $rm_position,
				'REVOLVERMAPS_WIDGET'			=> $revolvermaps_widget,
				));
		}
	}

	/**
	* Settings or the Collapsible Kategorie Extensions
	*/

	public function collaps()
	{
		if ($this->operator !== null)
		{
			$fid = 'rm'; // can be any unique string to identify your extension's collapsible element
			$this->template->assign_vars(array(
				'S_RM_HIDDEN' => $this->operator->is_collapsed($fid),
				'U_RM_COLLAPSE_URL' => $this->operator->get_collapsible_link($fid),
			));
		}
	}
}
