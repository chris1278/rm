<?php
/**
*
* Real-time statistics with Revolvermaps Extension for the phpBB Forum Software package.
*
* @copyright (c) 2020 (Christian-Esch.de)
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\rm\migrations;

class acp_module extends \phpbb\db\migration\migration
	{
	static public function depends_on()
	{
		return array('\chris1278\rm\migrations\initial_install');
	}

	public function update_data()
	{
		return array(
		array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_RM'
			)),

			array('module.add', array(
				'acp',
				'ACP_RM',
				array(
					'module_basename'	=> '\chris1278\rm\acp\rm_module',
					'modes'				=> array('information'),
				),
			)),
			array('module.add', array(
				'acp',
				'ACP_RM',
				array(
					'module_basename'	=> '\chris1278\rm\acp\rm_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}

	public function revert_schema()
	{
		return array(
			array('module.remove', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_RM'
			)),

			array('module.remove', array(
				'acp',
				'ACP_RM',
				array(
					'module_basename'	=> '\chris1278\rm\acp\rm_module',
					'modes'				=> array('information'),
				),
			)),
			array('module.remove', array(
				'acp',
				'ACP_RM',
				array(
					'module_basename'	=> '\chris1278\rm\acp\rm_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
