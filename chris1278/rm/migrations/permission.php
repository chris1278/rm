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

class permission extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\chris1278\rm\migrations\acp_module');
	}

	public function update_data()
	{
		return array(
			array('permission.add', array('u_view_rm', true, 'u_')),
		);
	}

	public function revert_schema()
	{
		return array(
			array('permission.remove', array('u_view_rm', true, 'u_')),
		);
	}
}
