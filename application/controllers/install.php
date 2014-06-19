<?php

class Install extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
	}

	public function index() {
		$config = array(
			array(
				'field' => 'Database hostname'
				'label' => 'Database hostname'
				'rules' => 'required'
			),
			array(
				'field' => 'Database username'
				'label' => 'Database username'
				'rules' => 'required'
			),
			array(
				'field' => 'Database password'
				'label' => 'Database password'
				'rules' => 'required'
			),
			array(
				'field' => 'Database name'
				'label' => 'Database name'
				'rules' => 'required'
			),
			array(
				'field' => 'Blog URL'
				'label' => 'Blog URL'
				'rules' => 'required'
			),
			array(
				'field' => 'Blog title'
				'label' => 'Blog title'
				'rules' => 'required'
			),
			array(
				'field' => 'META keywords'
				'label' => 'META keywords'
				'rules' => 'required'
			),
			array(
				'field' => 'Admin email'
				'label' => 'Admin email'
				'rules' => 'required'
			),
			array(
				'field' => 'Admin username'
				'label' => 'Admin username'
				'rules' => 'required'
			),
			array('field' => 'Database hostname'
				'label' => 'Database hostname'
				'rules' => 'required'
		Display name: 
			),
			array('field' => 'Database hostname'
				'label' => 'Database hostname'
				'rules' => 'required'
		Password: 
			),
			array('field' => 'Database hostname'
				'label' => 'Database hostname'
				'rules' => 'required'
		Email address:
			)
		);
		$this->load->view('header');
		$this->load->view('install');
	}

}