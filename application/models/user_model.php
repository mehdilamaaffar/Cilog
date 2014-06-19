<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	
	private $table = 'users';

	public function __construct()
	{
		parent::__construct();
	}

	public function loggedIn()
	{
		$query = $this->db->get_where($this->table, array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		));
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

	public function user_exist($username)
	{
		$query = $this->db->get_where($this->table, array('username', $username));
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function user_add()
	{	
		$data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'type' => 1,
		);
		$this->db->insert($this->table, $data);
	}
}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */

?>