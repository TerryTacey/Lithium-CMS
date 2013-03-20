<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('logged_in'))
{
	function logged_in($slug = null)
	{
		$ci =& get_instance();

		if ($ci->session->userdata('logged_in'))
		{
			return true;
		}
		else
		{
			if ($slug)
			{
				$ci->session->set_flashdata('panel', $slug);
				redirect('admin');
			}

			return false;
		}
	}
}