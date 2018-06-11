<?php
class practice_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_practice()
	{
		$query = $this->db->get('practice');
		return $query->result_array();
	}

	public function get_sum($prac_num = 1){
		$points = $this->db->query("select sum(value) as value from tesi.question_answer as a join tesi.answer as b on b.id_que_ans=a.id_que_ans where b.id_practice=".$prac_num.";");
		$sum_point_practice = $points->result_array()[0]['value'];

		if ($sum_point_practice == null) {
			$sum_point_practice = 0;
		}

		$update = $this->db->query("UPDATE `tesi`.`practice` SET `points` = ".$sum_point_practice."  WHERE `id_practice` = ".$prac_num.";");

		return $sum_point_practice;
	}
}

