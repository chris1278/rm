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

class rm_info
{
	function module()
	{
		return array(
			'filename'	=> '\chris1278\rm\acp\rm_module',
			'title'		=> 'ACP_RM',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'settings'		=> array(
					'title'		=> 'ACP_RM_SETTINGS',
					'auth'		=> 'ext_chris1278/rm && acl_a_board',
					'cat'		=> array('ACP_RM'),
				),
			),
		);
	}
}
