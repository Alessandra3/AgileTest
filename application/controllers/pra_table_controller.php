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
    
}

