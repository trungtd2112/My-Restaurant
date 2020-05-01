<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Bill extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Bill_model');
        
    }
    

    public function index(){
        $data['bill_data'] = $this->Bill_model->getBillData();
        $data['subview'] = 'admin/bill';
        $this->load->view('admin/index', $data);
    }

    public function bill_details($bill_id){
        $data['bill_details_data'] = $this->Bill_model->getBillDetailsData($bill_id);
        $data['subview'] = 'admin/bill_details';
        $this->load->view('admin/index', $data);
    }

    public function done($bill_id){
        $this->Bill_model->updateBillStatus1($bill_id);
        $data['bill_data'] = $this->Bill_model->getBillData();
        $data['subview'] = 'admin/bill';
        $this->load->view('admin/index', $data);
    }

    public function incomplete($bill_id){
        $this->Bill_model->updateBillStatus2($bill_id);
        $data['bill_data'] = $this->Bill_model->getBillData();
        $data['subview'] = 'admin/bill';
        $this->load->view('admin/index', $data);
    }


}

/* End of file Bill.php */
