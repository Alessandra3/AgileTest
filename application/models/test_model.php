<?php
class test_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_test()
		{
		        $query = $this->db->get('question');
		        return $query->result_array();
		}
}


