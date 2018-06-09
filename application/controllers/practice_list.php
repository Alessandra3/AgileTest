<?php
class practice_list extends CI_Controller {

    public function __construct()
    {   
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('practice_model');
    }

     public function index()
    {   
        $this->session->set_userdata('practice_num',1);
        $data['pra'] = $this->practice_model->get_practice();
        $this->load->view('practice_view', $data);
    }
}
