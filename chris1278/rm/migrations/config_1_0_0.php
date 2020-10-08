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

class config_1_0_0 extends \phpbb\db\migration\migration
	{
	static public function depends_on()
	{
		return array('\chris1278\rm\migrations\permission');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('rm_enable', 1)),
			array('config.add', array('show_rm_all', 0)),
			array('config.add', array('rm_position', 4)),
			array('config.add', array('revolvermaps_widget', '')),
		);
	}
	public function revert_schema()
	{
		return array(
			array('config.remove', array('rm_enable')),
			array('config.remove', array('show_rm_all')),
			array('config.remove', array('rm_position')),
			array('config.remove', array('revolvermaps_widget', '')),
		);
	}
}
