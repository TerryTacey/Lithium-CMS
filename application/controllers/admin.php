<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		if (!$this->session->userdata('logged_in'))
		{
			$this->template->set_theme('admin');
			$this->template->title('Admin', 'Login');

			$this->template->set_partial('header', 'header')
							->set_partial('module', 'login')
							->set_partial('footer', 'footer')
							->build('header');
		}
	}

	
}