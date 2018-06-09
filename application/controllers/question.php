<?php
class Question extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('question_model');
    }

    public function view($question_num = 1)
    {
        $data['question_item'] = $this->question_model->get_question($question_num);
        $this->load->view('question_view', $data);
    }

    public function send_answer()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $ret = $this->question_model->set_answer();
        $this->session->set_userdata('practice_num',$ret['id_practice']);

        $data['question_item'] = $this->question_model->get_question($ret['next_page']);
        $this->load->view('question_view', $data);
    }
}