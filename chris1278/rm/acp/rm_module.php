<?php
/**
*
* Real-time statistics with Revolvermaps Extension for the phpBB Forum Software package.
*
* @copyright (c) 2020 (Christian-Esch.de)
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/
namespace chris1278\rm\acp;

class rm_module
{
	var $u_action;
	public function main()
	{
		global $user, $cache, $request, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpbb_container, $phpbb_ext_manager, $phpEx, $language;

		$language	= $phpbb_container->get('language');

		$this->root_path = $phpbb_root_path . 'ext/chris1278/rm/';
		$this->user = $user;
		$this->cache = $cache;
		$this->template = $template;
		$this->config = $config;
		$this->request = $request;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->phpbb_admin_path = $phpbb_admin_path;
		$this->php_ext = $phpEx;
		$this->phpbb_ext_manager = $phpbb_ext_manager;

		//Revolvermaps Settings
		add_form_key('acp_rm');
		$this->tpl_name = 'acp_rm_settings';
		$this->page_title = $this->user->lang['ACP_RM_SETTINGS'];
		$submit					= $this->request->is_set_post('submit');

		if ($submit)
		{
			if (!check_form_key('acp_rm'))
			{
			trigger_error($this->user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}
			$this->config->set('rm_enable', $this->request->variable('rm_enable', '1'));
			$this->config->set('show_rm_all', $this->request->variable('show_rm_all', '0'));
			$this->config->set('rm_position', $this->request->variable('rm_position', ''));
			$this->config->set('revolvermaps_widget', $this->request->variable('revolvermaps_widget', ''));
			trigger_error($this->user->lang['RM_UPDATE'] . adm_back_link($this->u_action));
		}

			$template->assign_vars(array(
			'RM_ENABLE'						=> $this->config['rm_enable'],
			'SHOW_RM_ALL'					=> $this->config['show_rm_all'],
			'RM_POSITION'					=> $this->config['rm_position'],
			'REVOLVERMAPS_WIDGET'			=> $this->config['revolvermaps_widget'],

			'U_USER_PERMISSIONS'			=> append_sid("{$phpbb_admin_path}index.$this->php_ext" ,'i=permissions&amp;mode=setting_user_global'),
			'U_GROUP_PERMISSIONS'			=> append_sid("{$phpbb_admin_path}index.$this->php_ext" ,'i=permissions&amp;mode=setting_group_global'),
			'U_ACTION'						=> $this->u_action,
		));
	}
}
