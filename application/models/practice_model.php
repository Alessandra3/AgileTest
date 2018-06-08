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
}

