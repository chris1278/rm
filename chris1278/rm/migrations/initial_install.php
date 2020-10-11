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

class initial_install extends \phpbb\db\migration\migration
	{
	public function effectively_installed()
	{
		return;
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('rm_version', '1.0.1')),
		);
	}

	public function revert_schema()
	{
		return array(
			array('config.remove', array('rm_version', '1.0.1')),
		);
	}
}
