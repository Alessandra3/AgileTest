<?php
class Test extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('test_model');
        }

        public function index()
        {
                $data['test'] = $this->test_model->get_test();
                $this->load->view('comp', $data);
        }

        public function view()
        {
                $data['test_item'] = $this->test_model->get_test();
                $this->load->view('comp', $data);
        }
}