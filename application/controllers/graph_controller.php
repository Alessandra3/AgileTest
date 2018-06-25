<?php
class Graph_controller extends CI_Controller {

    public function __construct()
    {   
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('graph_model');
        $this->load->library('session');
        $this->load->library('javascript');
        
      
    }

     public function index()
    {   
        
        $this->load->view('graph_view');
    }

   
}
