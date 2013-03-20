<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function get_user_info($id, $field)
	{
		if (is_int($id))
		{
			$query = $this->db->select($field)
					->from('users')
					->where('id', $id)
					->get();
		}
		else
		{
			$query = $this->db->select($field)
					->from('users')
					->where('username', $id) 
					->get();
		}

		if ($query->num_rows() > 0)
		{
			$row = $query->row();

			return $row->$field;
		}
	}
}