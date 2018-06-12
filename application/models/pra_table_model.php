<?php
class pra_table_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_max_practices(){

        $query = $this->db->query("select name as name from practice as p where p.points > 5;");
        return $query->result_array();
      }

    
}