<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * page Controller
 *
 * @package Page
 * @subpackage Controller
 * @author Terry June Jr.
 */
class Page extends MX_Controller {
	
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * This function loads the page according to the uri
	 * @param string $uri        The uri of the page
	 */
	function index($slug)
	{
		$this->load->model(array('welcome/welcome_model', 'welcome/settings_model', 'page_model'));


		if ($this->page_model->is_page($slug))
		{
			$settings_data = array(
				'site_theme' => $this->settings_model->get_setting_value('site_theme'),
				'site_name' => $this->settings_model->get_setting_value('site_name')
			);

			$page_data = array(
				'page' => $this->page_model->get_page($slug)
			);

			$this->template->set_theme($settings_data['site_theme']);
			$this->template->title($settings_data['site_name'], $page_data['page']['title']);

			$this->template->set_partial('header', 'header')
							->set_partial('module', 'page', $page_data)
							->set_partial('footer', 'footer')
							->set_layout('default')
							->build('header');
		}
		else
		{
			// that page doesn't exist
		}	
		
	}
}

// end of file