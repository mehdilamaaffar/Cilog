<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$logged = ($this->session->userdata('login') == true) ? redirect(base_url()) : null;
	}

	public function index()
	{
		$this->login();
	}

	public function login()
	{
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');

		$config = array(
			array(
			   'field' => 'username',
			   'label' => 'Username',
			   'rules' => 'required'
			),
			array(
			   'field' => 'password',
			   'label' => 'Password',
			   'rules' => 'required'
			)
		);

		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == false) {
			$this->load->view('header');
			$this->load->view('login');
			$this->session->set_userdata('login', false);
		} else {
			if ($this->user_model->loggedIn()) {
				$data = array(
					'name' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'login' => true
				);

			$this->session->set_userdata($data);

			$info['message'] = 'now u log in!';
			$this->load->view('header');
			$this->load->view('success', $info);
			} else {
				echo "user not found";
			}
		}
	}

		public function register()
		{
		  $this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');

		  $config = array(
			array(
			   'field' => 'username',
			   'label' => 'The username',
			   'rules' => 'required|is_unique[users.username]'
			),
			array(
			   'field' => 'email',
			   'label' => 'The email address',
			   'rules' => 'required|valid_email|is_unique[users.email]'
			),
			array(
			   'field' => 'password',
			   'label' => 'Password',
			   'rules' => 'required'
			)
		);
		  $this->form_validation->set_rules($config);
		  $this->form_validation->set_message('is_unique', '%s is already exist');
		  
		  if ($this->form_validation->run() == false) {
			$this->load->view('header');
			$this->load->view('register');
		  } else {
            $this->user_model->user_add();
            $this->load->view('header');

            $info['message'] = 'You have successfully registered and logged in.';
            $info['url'] = base_url();
            $this->load->view('success', $info);
		  }
		}

	public function logout()
	{
		$this->load->library('session');
		if ($this->session->userdata('login') == true) {
		$this->session->sess_destroy();
		redirect(base_url());
		} else {
			echo show_404();
		}
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */