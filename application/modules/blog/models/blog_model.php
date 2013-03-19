<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	function get_posts()
	{
		$query = $this->db->order_by('id', 'desc')
				->get('posts');

		if ($query->num_rows() > 0)
		{
			return $query->result_array();
		}
	}

	function get_single_post($post_slug)
	{
		$query = $this->db->where('slug', $post_slug)
				->get('posts');

		if ($query->num_rows() > 0)
		{
			foreach($query->result_array() as $row)
			{
				return $row;
			}
		}
	}

	function is_post($post_slug)
	{
		$query = $this->db->select('slug')
				->where('slug', $post_slug)
				->get('posts');

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

/* End of file login.php */
/* Location: ./application/controllers/admin/login.php */
/* Author: Terry June Jr. */
/* Last Edit: 3/13/2013 */