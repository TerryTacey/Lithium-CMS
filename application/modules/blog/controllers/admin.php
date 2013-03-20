<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();

		logged_in('blog');
	}

	function index()
	{
		echo "hey";
	}
}