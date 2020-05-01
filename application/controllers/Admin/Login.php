<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/User_model');
    }


    public function index()
    {

        $data = $this->User_model->getUserData();
        $data = array('data' => $data);
        $this->load->view('admin/login', $data);
    }

    public function sign_up()
    {
        $this->load->view('admin/sign_up');
    }

    public function login()
    {
        $user_email = $this->input->post('user_email');
        $user_password = $this->input->post('user_password');
        $user_name = $this->input->post('user_name');
        $data = $this->User_model->getUserDataByEmail($user_email);
        if ($data == 0) {
            $data = array('data' => $data);
            $this->load->view('admin/error_login', $data);
        } else if ($data[0]['user_password'] != $user_password) {
            $data = array('data' => $data);
            $this->load->view('admin/error_login', $data);
        } else {
            
            $array = array(
                'user_email' => $user_email,
                'user_password' => $user_password,
                'user_name' => $data[0]['user_name'],
                'user_access' => $data[0]['user_access']
            );
            $this->session->set_userdata( $array );
            $data['subview'] = 'admin/admin';
            $this->load->view('admin/index', $data);
        }
    }

    public function logout(){
        $this->session->unset_userdata('user_email', 'user_password', 'user_name', 'user_access');
        $this->load->view('admin/logout');
        
    }
}

/* End of file Login.php */
