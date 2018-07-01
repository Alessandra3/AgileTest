<?php
class pra_table_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_max_practices(){

        $query = $this->db->query("select name, id_practice from practice as p where p.points > 5;");
        return $query->result_array();
      }

    public function save_table_data(){

        $this->load->helper('url');

        $id_row1 = $this->input->post('row1');
        $id_row2 = $this->input->post('row2');
        $id_row3 = $this->input->post('row3');
        $id_row4 = $this->input->post('row4');
        $id_row5 = $this->input->post('row5');
        $id_row6 = $this->input->post('row6');
        $id_row7 = $this->input->post('row7');

        $query = $this->db->query("UPDATE `tesi`.`practice` SET `creativity` = ".$id_row1.",`proaction` = ".$id_row2.",`reaction` = ".$id_row3.",`learning` = ".$id_row4.",`cost` = ".$id_row5." ,`quality` = ".$id_row6.",`simplicity` = ".$id_row7." WHERE `id_practice` = 1;");

    }

    public function add_property($postData){
        $query = $this->db->query("UPDATE `tesi`.`practice` SET ".$postData['property']." = '".$postData['value']."' WHERE id_practice = ".$postData['id'].";");
    }
}