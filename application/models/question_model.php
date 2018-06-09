<?php
class question_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_question($question_num = 1)
	{
		$query = $this->db->query("select Q.text, Q.id_question, A.definition, A.count, A.value from question as Q, question_answer as A where Q.id_question=".$question_num." and A.id_question=Q.id_question order by A.count;");
		return $query->result_array(1);
	}

	public function set_answer()
	{
		// $data = array(
		// 	'id_question' => $this->input->post('question_num'),
		// 	'id_practice' => $this->input->post('practice_num'),
		// 	'id_que_ans' => $this->input->post('question_ans')
		// );
		// $this->db->insert('answer', $data);

		$this->load->helper('url');

		$id_q = $this->input->post('question_num');
		$id_p = $this->input->post('practice_num');
		$id_qa = $this->input->post('question_ans');
		

		$query = $this->db->query("INSERT INTO `tesi`.`answer` (`id_question`, `id_practice`,`id_que_ans`) VALUES (".$id_q.",".$id_p.",".$id_qa.") on duplicate key update id_question=".$id_q.",`id_practice`=".$id_p.",`id_que_ans`=".$id_qa.";");
		
		$ret = array(
			'id_practice' => $this->input->post('practice_num'),
			'next_page' => $this->input->post('question_num')+1
		);

		return $ret;
	}
}


