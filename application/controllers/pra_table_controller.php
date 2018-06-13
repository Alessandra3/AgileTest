<?php
class pra_table_controller extends CI_Controller {

    public function __construct()
    {   
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('pra_table_model');
        $this->load->library('table');
    }

     public function index()
    {
        $this->table->set_heading('Practice Name', 'Creativity', 'Proaction', 'Reaction');
        $data['max_prac'] = $this->pra_table_model->get_max_practices();
        $this->load->view('pra_table_view', $data);

    }

    // public function send_answer_2($name,$row2=1,$row3=1,$row4=1)
    // {
    //     $this->question_model->save_table_data();
    //     $this->load->view('pra_table_view');
    // }

    public function ajax_add()
    {
        header('Access-Control-Allow-Origin: *');
        $postData = $this->input->post();
        print_r($postData);
        $data = $this->pra_table_model->add_property($postData);
        echo $postData;
    }
}

