<?php
class result1_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_max_practices(){

		$query = $this->db->query("select name as name from practice as p where p.points > 5;");
  		return $query->result_array();
	  }
	

	public function max_points_earned(){

		$dd = $this->db->query("select sum(points) as points from practice;");
		return $dd->result_array(1)[0]['points'];
	}

		
}

