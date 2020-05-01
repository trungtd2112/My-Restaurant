<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Slide_model extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
    }

    public function getSlidesData()
    {
        $this->db->select('*');
        $this->db->where('attribute_name', 'slides_top_banner');
        $data = $this->db->get('homepage');
        $data = $data->result_array();
        return $data[0]['attribute_value'];
    }

    public function updateSlidesData($data)
    {
        $data = array(
            'attribute_name' => 'slides_top_banner',
            'attribute_value' => $data
        );
        $this->db->where('attribute_name', 'slides_top_banner');
        return $this->db->update('homepage', $data);
    }

    public function getHeaderData()
    {
        $this->db->select('*');
        $this->db->where('attribute_name', 'header');
        $data = $this->db->get('homepage');
        $data = $data->result_array();
        return $data[0]['attribute_value'];
    }

    public function updateHeaderData($data_header)
    {
        $data = array(
            'attribute_name' => 'header',
            'attribute_value' => $data_header
        );
        $this->db->where('attribute_name', 'header');
        return ($this->db->update('homepage', $data));
    }

    

}

/* End of file Slide_model.php */
