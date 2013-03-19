<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Welcome Model
 *
 * @package Welcome
 * @subpackage Model
 * @author Terry June Jr.
 */
class Welcome_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Determines if the default page is a page or a module
	 *
	 * @access public
	 * @param  string $default_setting is the slug of the default page
	 * @return true             the default page is a page
	 * @return false            the default page is a module
	 */
	function default_page($default_setting)
	{
		$query = $this->db->select('slug')
				->from('pages')
				->where('slug', $default_setting)
				->get();

		if ($query->num_rows > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	/**
	 * Determines if the given string is a module
	 *
	 * @access public
	 * @param  string $uri is the slug of the module
	 * @return true             is a module
	 * @return false            isn't a module
	 */
	function is_module($uri)
	{
		$query = $this->db->select('slug')
				->from('pages')
				->where('slug', $uri)
				->get();

		if ($query->num_rows == 0 && is_dir(APPPATH . 'modules/' . $uri))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	/**
	 * This function checks if the uri is actually a page
	 * @param  string  $uri the uri you are checking
	 * @return boolean      if true, it's a page, else it's not
	 */
	function is_page($uri)
	{
		$query = $this->db->select('slug')
				->from('pages')
				->where('slug', $uri)
				->get();

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