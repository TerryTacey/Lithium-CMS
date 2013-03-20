<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		if (!logged_in())
		{
			$this->load->library('form_validation');

				$this->form_validation->set_rules('username', 'Username', 'required|htmlspecialchars');
				$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == false)
			{
				$this->template->set_theme('admin');
				$this->template->title('Admin', 'Login');

				if ($this->session->flashdata('panel'))
				{
					$this->session->keep_flashdata('panel');
				}

				$this->template->set_partial('header', 'header')
								->set_partial('module', 'login')
								->set_partial('footer', 'footer')
								->build('header');
			}
			else
			{
				$this->login();

				if ($this->session->flashdata('panel'))
				{
					redirect('admin/' . $this->session->flashdata('panel'));
				}
				else
				{
					echo "main dashboard";
				}
			}
		}
		else
		{
			echo "main dashboard";
		}
	}

	function login()
	{
		$this->load->model(array('welcome/settings_model', 'admin_model'));

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$hashed_pass =  hash('sha512', $this->settings_model->get_setting_value('encryption_key') . $password . $this->admin_model->get_user_info($username, 'salt'));

		if ($username == $this->admin_model->get_user_info($username, 'username') && $hashed_pass == $this->admin_model->get_user_info($username, 'password'))
		{
			$this->session->set_userdata(array('logged_in' => true, 'id' => $this->admin_model->get_user_info($username, 'id')));
		}
		else
		{
			echo "wrong password";
		}
	}
}