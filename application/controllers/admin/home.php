<?php

class Home extends CI_Controller {


	public function __construct() {
		parent::__construct();

		$this->load->model('post_model');

		$logged = ($this->session->userdata('login') == true) ? null : redirect(base_url());
	}

	public function index()
	{
		$data['posts'] = $this->post_model->get_posts();
		$data['session'] = $this->session->all_userdata();
		
		$this->load->view('header');
		$this->load->view('admin/main', $data);
		$this->load->view('fotter');
	}
}

?>