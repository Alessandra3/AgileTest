<?php
class practice_list extends CI_Controller {

    public function __construct()
    {   
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('practice_model');
        $this->load->library('session');
        $this->load->library('javascript');
      
    }

     public function index()
    {   
        // $this->session->set_userdata('practice_num',1);
        $data['small_releases'] = $this->practice_model->get_sum(1);
        $data['planning_game'] = $this->practice_model->get_sum(2);
        $data['stand_up_meeting'] = $this->practice_model->get_sum(3);
        $data['retrospective'] = $this->practice_model->get_sum(4);
        $data['hours'] = $this->practice_model->get_sum(5);
        $data['costumer'] = $this->practice_model->get_sum(6);
        $data['pp'] = $this->practice_model->get_sum(7);
        $data['test'] = $this->practice_model->get_sum(8);
        $data['integration'] = $this->practice_model->get_sum(9);
        $data['coll_ownership'] = $this->practice_model->get_sum(10);
        $data['open_space'] = $this->practice_model->get_sum(11);
        $this->load->view('practice_view', $data);
    }

    public function practice_set($prac_num)
    {
        $this->session->set_userdata('practice_num',$prac_num);

        switch ($prac_num) {
            case 1:
                $q_num = 1;
                break;
            case 2:
                $q_num = 5;
                break;
            case 3:
                $q_num = 11;
                break;
            case 4:
                $q_num = 17;
                break;
            case 5:
                $q_num = 23;
                break;
            case 6:
                $q_num = 26;
                break;
            case 7:
                $q_num = 31;
                break;
            case 8:
                $q_num = 34;
                break;
            case 9:
                $q_num = 38;
                break;
            case 10:
                $q_num = 41;
                break;
            case 11:
                $q_num = 45;
                break;
            default:
                $q_num = 1;
                break;
        }
        redirect('/question/'.$q_num.'/'.$prac_num);
    }
}
