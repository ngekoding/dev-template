<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Component extends CI_Controller {

	public function index()
	{
		$this->template->display('dashboards/index');
	}

	public function forms()
	{
		$this->template->display('components/form');
	}

	public function tables()
	{
		$this->template->display('components/table');
	}
}
