<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Settings Model
 *
 * @package Welcome
 * @subpackage Model
 * @author Terry June Jr.
 */
class Settings_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Retrieves the setting that is given
	 *
	 * @access public
	 * @param  string $setting_name is the name of the setting
	 * @return string           The value of the setting
	 */
	function get_setting_value($setting_name)
	{	
		$query = $this->db->select('setting_value')
				->from('settings')
				->where('setting_name', $setting_name)
				->get();
		
		if ($query->num_rows() > 0)
		{
			$row = $query->row();

			return $row->setting_value;
		}
	}
}