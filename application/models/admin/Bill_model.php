<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Bill_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    public function insertBillData($bill_data)
    {
        $this->db->insert('bill', $bill_data);
        return $this->db->insert_id('bill', $bill_data);
    }


    public function insertBillDetailsData($bill_details_data)
    {
        $this->db->insert('bill_details', $bill_details_data);
    }

    public function getBillData(){
        $this->db->select('*');
        $data = $this->db->get('bill');
        $data = $data->result_array();
        return $data;
    }

    public function getBillDetailsData($bill_id){
        $this->db->select('*');
        $this->db->where('bill_id', $bill_id);
        $data = $this->db->get('bill_details');
        $data = $data->result_array();
        return $data;
    }

    public function updateBillStatus1($bill_id){
        $this->db->where('bill_id', $bill_id);
        $this->db->set('bill_status', 1);
        $this->db->update('bill');
    }

    public function updateBillStatus2($bill_id){
        $this->db->where('bill_id', $bill_id);
        $this->db->set('bill_status', 0);
        $this->db->update('bill');
    }

}

/* End of file Bill_model.php */
