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
}