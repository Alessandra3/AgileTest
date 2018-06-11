<?php
class Question extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('question_model');
        $this->load->library('session');

    }

    // public function index()  //validation function that does not work (resolved with checked item on the button field)
    // {
    //     $this->load->helper(array('send_answer', 'url'));
    //     $this->load->library('form_validation');
    //     $this->form_validation->set_rules('question_ans', 'AAA', 'required');

    //     if ($this->form_validation->run() == FALSE)
    //     {
    //         $this->load->view('question_view');
    //     }
    // }

    public function view($question_num = 1, $prac_num)
    {
        $this->session->set_userdata('practice_num',$prac_num);

        $test = $this->question_model->check_page_exist($question_num);
        if($test == false){
            $this->load->view('practice_view');
        }else{
            $data['practice_name'] = $this->question_model->get_practice_name($_SESSION['practice_num']);
            $data['question_item'] = $this->question_model->get_question($question_num);
            $this->load->view('question_view', $data);
        }
    }

    public function send_answer($ans_points=0)
    {
        $ret = $this->question_model->set_answer();

        $test = $this->question_model->check_page_exist($ret['next_page']);
        if($test == false){
            redirect('/practice_list');
        }else{
            $data['practice_name'] = $this->question_model->get_practice_name($_SESSION['practice_num']);
            $data['question_item'] = $this->question_model->get_question($ret['next_page']);
            $this->load->view('question_view', $data);
        }
    }
}