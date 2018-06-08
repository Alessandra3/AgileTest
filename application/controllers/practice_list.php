<?php
class practice_list extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('practice_model');
    }

     public function index()
    {
        $data['pra'] = $this->practice_model->get_practice();
        $this->load->view('practice_view', $data);
    }

    public function view()
    {
        $data['pra'] = $this->practice_model->get_practice();
        $this->load->view('practice_view', $data);
    }
}
