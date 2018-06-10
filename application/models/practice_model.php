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

		public function get_sum(){

			$points = $this->db->query("select sum(value) from tesi.question_answer as a
					join tesi.answer as b on b.id_que_ans=a.id_que_ans
					where b.id_practice=1;");
			return $points->row();
			
		}



}

