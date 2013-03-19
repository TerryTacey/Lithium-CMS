<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MX_Controller {
	function __construct()
	{
		parent::__construct();
	}

	function index($module = null)
	{
		$this->load->model(array('welcome_model', 'settings_model'));

		$settings_data = array(
			'default_page' => $this->settings_model->get_setting_value('default_page')
			);

		if ($this->welcome_model->is_module($settings_data['default_page'])){
			$this->load->module($settings_data['default_page'])->index();
		}
		else if  ($this->welcome_model->is_page($settings_data['default_page']))
		{
			$this->load->module('page')->index($settings_data['default_page']);
		}
		else
		{
			show_404();
		}
	}
}