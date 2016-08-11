<?php
/**
*
* Board Announcements extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 kasimi
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace phpbb\boardannouncements\migrations\v10x;

/**
* Migration stage 7: Add data changes to the database
*/
class m7_separate_guest_announcement extends \phpbb\db\migration\migration
{
	/**
	* Assign migration file dependencies for this migration
	*
	* @return array Array of migration files
	* @static
	* @access public
	*/
	static public function depends_on()
	{
		return array('\phpbb\boardannouncements\migrations\v10x\m6_only_on_index');
	}

	/**
	* Add board announcements data to the database.
	*
	* @return array Array of table data
	* @access public
	*/
	public function update_data()
	{
		return array(
			array('config.add', array('board_announcements_only_index_guests', 0)),

			array('config_text.add', array('announcement_guests_text', '')),
			array('config_text.add', array('announcement_guests_uid', '')),
			array('config_text.add', array('announcement_guests_bitfield', '')),
		);
	}
}
