<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Dish_model');
        
    }
    
    public function index()
    {
        $data['cat_data'] = $this->Dish_model->getDishCategoryData();
        $data['subview'] = 'admin/category';
        $this->load->view('admin/index', $data);
        
    }

    public function addJquery()
    {
        $dc_name = $this->input->post('dc_name');
        $result = $this->Dish_model->add_dish_category($dc_name);
        echo json_encode($result);
    }

    public function editDishCategory($dc_id)
    {
        $dc_name = $this->input->post('dc_name');
        $this->Dish_model->updateDishCategoryById($dc_id, $dc_name);
    }

    public function deleteDishCategory($dc_id)
    {
        if ($this->Dish_model->deleteCategoryById($dc_id)) {
            $this->load->view('admin/success');
        }
    }

}

/* End of file User.php */