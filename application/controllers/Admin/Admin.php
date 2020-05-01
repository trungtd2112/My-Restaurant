<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data['subview'] = "admin/admin";
        $this->load->view('admin/index',$data);           
    }

}

/* End of file Admin.php */