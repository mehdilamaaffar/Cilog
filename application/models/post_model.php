<?php 

class Post_model extends CI_model {


	private $table = 'posts';

	public function get_posts($num = 20, $start = 0)
	{
		$query = $this->db->get($this->table, $num, $start);
		return $query->result_array();
	}

	public function get_post($id)
	{
		return $this->db->get_where($this->table, array('id' => $id))->first_row('array');
	}

	public function add_post($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function edit_post($id, $data)
	{
		$this->db->where('id', $id)->update($this->table, $data);
	}

	public function delete_post($id)
	{
		$this->db->delete($this->table, array('id' => $id));
	}

	public function count_posts() {
		return $this->db->count_all_results($this->table);
	}

	public function recent_posts($num = 5, $start = 0) {
		return $this->db->order_by("id", "desc")->get($this->table, $num, $start)->result_array();
	}

	public function search_posts($data) {
		$query = $this->db->like('name', $data)->get($this->table);
		if ($query->num_rows() == 0) {
			return "result not found";
		} else {
			return $query->result_array();
		}
	}
} 

?>