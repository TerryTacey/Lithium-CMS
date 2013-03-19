<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MX_Controller {
	
	function __construct()
	{
		parent::__construct();
	}

	function index($slug = null)
	{
		$this->load->model(array('welcome/welcome_model', 'welcome/settings_model', 'blog_model'));

		$settings_data = array(
			'site_theme' => $this->settings_model->get_setting_value('site_theme'),
			'site_name' => $this->settings_model->get_setting_value('site_name')
		);

		if ($slug)
		{

			if ($this->blog_model->is_post($slug))
			{
				$post_data = array(
					'article' => $this->blog_model->get_single_post($slug)
				);

				$this->template->set_theme($settings_data['site_theme']);
				$this->template->title($settings_data['site_name'], $post_data['article']['title']);

				$this->template->set_partial('header', 'header')
								->set_partial('module', 'single', $post_data)
								->set_partial('footer', 'footer')
								->set_layout('default')
								->build('header');
			}
			else
			{
				// post doesn't exist
			}
		}
		else
		{
			$post_data = array(
				'posts' => $this->blog_model->get_posts()
			);

			$this->template->set_theme($settings_data['site_theme']);
			$this->template->title($settings_data['site_name'], 'Blog');

			$this->template->set_partial('header', 'header')
							->set_partial('module', 'blog', $post_data)
							->set_partial('footer', 'footer')
							->set_layout('default')
							->build('header');
		}
	}
}

/* End of file login.php */
/* Location: ./application/controllers/admin/login.php */
/* Author: Terry June Jr. */
/* Last Edit: 3/13/2013 */