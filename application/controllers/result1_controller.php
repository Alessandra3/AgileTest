<?php
class result1_controller extends CI_Controller {

    public function __construct()
    {   
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('result1_model');

    }

     public function index()
    {
        $data['max_prac'] = $this->result1_model->get_max_practices();
        $data['max_points'] = $this->result1_model->max_points_earned();
        $this->load->view('result1_view', $data);
  
    }
}
