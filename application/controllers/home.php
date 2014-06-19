<?php

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		$this->load->model('post_model');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index($start = 0)
	{
		$data['posts'] = $this->post_model->get_posts(5, $start);

		$this->load->library('pagination');
		
		$config['base_url'] = base_url().'home/index';
		$config['total_rows'] = $this->post_model->count_posts();
		$config['per_page'] = 5;

		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();

		$data_side['recent_posts'] = $this->post_model->recent_posts();

		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('content', $data);
		$this->load->view('side', $data_side);
		$this->load->view('footer');
	}

	public function add()
	{
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
		$config = array(
		   array(
		   		"field" => "name",
		   		"label" => "name",
		   		"rules" => "required",
		   ),
		   array(
		   		"field" => "content",
		   		"label" => "content",
		   		"rules" => "required",
		   ),
		   array(
		   		"field" => "tag",
		   		"label" => "tag",
		   		"rules" => "required",
		   )
		);

		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == false) {
			$this->load->view('header');
			$this->load->view('add');
		} else {
			$data = array(
				'id' => null,
				'author' => $this->session->userdata('author'),
				'name' => $this->input->post('name'),
				'content' => $this->input->post('content'),
				'date' => date('m-d-y'),
				'tag' =>  $this->input->post('tag')
			);
			$this->post_model->add_post($data);
			$info['message'] = 'The post has been post it';
			$this->load->view('header');
			$this->load->view('success', $info);
		}
	}

	public function post($post_id)
	{
		$data['post'] = $this->post_model->get_post($post_id);
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('post', $data);
		$this->load->view('footer');
	}

	public function update($id) {
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');

		$config = array(
		   array(
		   		"field" => "name",
		   		"label" => "name",
		   		"rules" => "required",
		   ),
		   array(
		   		"field" => "author",
		   		"label" => "author",
		   		"rules" => "required",
		   ),
		   array(
		   		"field" => "content",
		   		"label" => "content",
		   		"rules" => "required",
		   ),
		   array(
		   		"field" => "tag",
		   		"label" => "tag",
		   		"rules" => "required",
		   )
		);

		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == false) {
			$data['posts'] = $this->post_model->get_post($id);
			$this->load->view('update', $data);
		} else {
			$data = array(
			   'author' => $this->input->post('author'),
			   'name' => $this->input->post('name'),
			   'content' => $this->input->post('content'),
			   'date' => date('d-m-y h-i-s'),
			   'tag' => $this->input->post('tag')
			);
			$this->post_model->edit_post($id, $data);

			$info['message'] = 'the form had been updated';
			$this->load->view('header');
			$this->load->view('success', $info);
		}
	}

	public function delete($id, $confirme = null)
	{
		if ($id == null) {
			echo show_404();
		}
		if ($confirme == null) {
			$data['id'] = $id;
			$this->load->view('header');
			$this->load->view('delete', $data);
		} elseif ($confirme == 'unconfirmed') {
			redirect(base_url());
		} elseif ($confirme == 'confirmed') {
			$this->post_model->delete_post($id);

			$info['message'] = 'the post has beeen deleted !';
			$this->load->view('header');
			$this->load->view('success', $info);
		}
	}

	public function search($data) {
		$data['search_posts'] = $this->post_model->search_posts($data);
		$this->load->view('header');
		$this->load->view('search', $data);
		$this->load->view('footer');
	}

}

?>