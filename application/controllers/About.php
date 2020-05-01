<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    //anh yêu em

    public function index()
    { 
        $this->load->model('admin/Slide_model');
        $header_data = json_decode($this->Slide_model->getHeaderData(), true);
        $data['header_data'] = $header_data;
        $data['subview'] = 'client/about';
        $this->load->view('client/index', $data);
    }

}

/* End of file About.php */
