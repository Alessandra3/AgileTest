<?php
class practice_list extends CI_Controller {

    public function __construct()
    {   
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('practice_model');
        $this->load->library('session');
    }

     public function index()
    {   
        // $this->session->set_userdata('practice_num',1);
        $data['small_releases'] = $this->practice_model->get_sum(1);
        $data['planning_game'] = $this->practice_model->get_sum(2);
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
            default:
                $q_num = 1;
                break;
        }

        redirect('/question/'.$q_num.'/'.$prac_num);//temp solution
    }
}
