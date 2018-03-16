<?php

class Template {

	protected $_ci;

	public function __construct() {
		$this->_ci =& get_instance();
	}

	public function display($template, $data = null) {
		$data['_content'] = $this->_ci->load->view($template, $data, true);
		$this->_ci->load->view('template', $data);
	}

}