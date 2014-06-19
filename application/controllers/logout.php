<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
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

/* End of file logout.php */
/* Location: ./application/controllers/logout.php */