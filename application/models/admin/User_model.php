<?php


defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
    }

    public function getUserData()
    {
        $this->db->select('*');
        $data = $this->db->get('user');
        $data = $data->result_array();
        return $data;
    }

    public function getUserDataByEmail($user_email)
    {
        $this->db->select('*');
        $this->db->where('user_email', $user_email);
        $data = $this->db->get('user');
        $data = $data->result_array();
        if (count($data) == 0) {
            return 0;
        }
        return $data;
    }

    public function addUser($data_user){
        $this->db->select('*');
        $this->db->where('user_email', $data_user['user_email']);
        $data = $this->db->get('user');
        $data = $data->result_array();
        if(count($data) > 0){
            return 0;
        }else{
            return $this->db->insert('user', $data_user);
        }
    }

    public function updateUserData($data_user, $user_mail){
        $data_user['user_email'] = $user_mail.'@gmail.com';
        $this->db->set($data_user);
        $this->db->where('user_email', $user_mail.'@gmail.com');
        return $this->db->update('user', $data_user);
    }

    public function deleteUser($user_mail){
        $this->db->where('user_email', $user_mail.'@gmail.com');
        return $this->db->delete('user');
        
    }
}

/* End of file User_model.php */
