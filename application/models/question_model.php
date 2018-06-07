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
}


