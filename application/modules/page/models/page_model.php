<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Page Model
 *
 * @package Page
 * @subpackage Model
 * @author Terry June Jr.
 */
class Page_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * This function retrieves the pages content
	 * @param  string $page  
	 * @param  [type] $field [description]
	 * @return [type]        [description]
	 */
	function get_page($slug)
	{
		$query = $this->db->where('slug', $slug)
				->get('pages');

		if ($query->num_rows() > 0)
		{
			foreach($query->result_array() as $row)
			{
				return $row;
			}
		}
	}

	function is_page($slug)
	{
		$query = $this->db->select('slug')
				->where('slug', $slug)
				->get('pages');

		if ($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

// end of file