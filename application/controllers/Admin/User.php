<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/User_model');
    }

    public function index()
    {
        $data['user_data'] = $this->User_model->getUserData();
        $data['subview'] = 'admin/user';
        $this->load->view('admin/index', $data);
    }

    public function add_user()
    {
        $data['subview'] = 'admin/add_user';
        $this->load->view('admin/index', $data);
    }

    public function addUser()
    {
        $user_email = $this->input->post('user_email');
        $user_name = $this->input->post('user_name');
        $user_password = $this->input->post('user_password');
        $user_re_pass = $this->input->post('user_re_pass');
        $noti = 0;
        if ($user_password != $user_re_pass) {
            $noti = 1;
        }
        $user_access = $this->input->post('user_access');
        $data_user = array(
            'user_email' => $user_email,
            'user_name' => $user_name,
            'user_password' => $user_password,
            'user_access' => $user_access
        );
        if ($noti == 1) {
            $noti = array('noti' => $noti);
            $this->load->view('admin/noti', $noti);
        } else if ($this->User_model->addUser($data_user) == 0) {
            $noti = 2;
            $noti = array('noti' => $noti);
            $this->load->view('admin/noti', $noti);
        } else {
            $noti = array('noti' => $noti);
            $this->load->view('admin/noti', $noti);
        }
    }

    public function edit_user($user_email)
    {
        $user_email = $user_email . "@gmail.com";
        $data['user_info'] = $this->User_model->getUserDataByEmail($user_email);
        $data['subview'] = 'admin/edit_user';
        $this->load->view('admin/index', $data);
    }

    public function editUser($user_mail)
    {
        $user_email = $this->input->post('user_email');
        $user_name = $this->input->post('user_name');
        $user_password = $this->input->post('user_password');
        $user_re_pass = $this->input->post('user_re_pass');
        $user_date_created = $this->input->post('user_date_created');
        $user_access = $this->input->post('user_access');
        $noti = 0;
        if ($user_password != $user_re_pass) {
            $noti = 1;
        }
        $data_user = array(
            'user_email' => $user_email,
            'user_name' => $user_name,
            'user_password' => $user_password,
            'user_access' => $user_access,
            'user_date_created' => $user_date_created
        );
        if ($noti == 1) {
            $data['noti'] = 1;
            $data['user_mail'] = $user_mail;
            $this->load->view('admin/noti_editUser', $data);
        } else {
            if ($this->User_model->updateUserData($data_user, $user_mail)) {
                $noti = array('noti' => $noti);
                $this->load->view('admin/noti_editUser', $noti);
            }
        }
    }

    public function deleteUser($user_mail)
    {
        if ($this->User_model->deleteUser($user_mail)) {
            $noti = array('noti' => 0);
            $this->load->view('admin/noti_User', $noti);
        }
    }
}

/* End of file User.php */
