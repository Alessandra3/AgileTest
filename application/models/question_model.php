<?php
class question_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_question($question_num = 1)
	{
        $query = $this->db->query("select text from question where id_question=".$question_num.";");
        return $query->row_array(1);
	}
}


