<?php
class test_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_test()
		{
		        $query = $this->db->get('company');
		        return $query->result_array();
		}
}


