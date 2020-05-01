<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dish_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getDishCategoryData(){
        $this->db->select('*');
        $data = $this->db->get('dish_category');
        $data = $data->result_array();
        return $data;
    }

    function getDishData(){
        $this->db->select('*');
        $this->db->from('dish');
        $this->db->join('dish_category', 'dish_category.dc_id = dish.dish_cat', 'left');
        $data = $this->db->get('');
        $data = $data->result_array();
        return $data;
    }

    public function getDishDataById($dish_id){
        $this->db->select('*');
        $this->db->where('dish_id', $dish_id);
        $data = $this->db->get('dish');
        $data = $data->result_array();
        return $data;
    }

    public function getDishDataByCat($dish_cat){
        $this->db->select('*');
        $this->db->where('dish_cat', $dish_cat);
        $data = $this->db->get('dish');
        $data = $data->result_array();
        return $data;
    }
    
    public function addDish($data){
        return $this->db->insert('dish', $data);
    }

    public function getFeaturedDish(){
        $this->db->select('*');
        $this->db->where('dish_featured', 1);
        $this->db->where('dish_status', 1);
        $data = $this->db->get('dish');
        $data = $data->result_array();
        return $data;
    }

    public function editDishById($dish_id, $data)
    {
        $this->db->set($data);
        $this->db->where('dish_id', $dish_id);
        return $this->db->update('dish', $data);
    }

    public function deleteDishById($dish_id){
        $this->db->where('dish_id', $dish_id);
        return $this->db->delete('dish');
    }

    public function number_of_pages($dishes_per_page){
        $this->db->select('*');
        $data = $this->db->get('dish');
        $data = $data->result_array();
        return ceil(count($data) / $dishes_per_page);
    }

    public function loadDishByPage($page_th, $dishes_per_page){
        $offset = ((int)$page_th - 1) * (int)$dishes_per_page;
        $this->db->select('*');
        $this->db->from('dish');
        $this->db->join('dish_category', 'dish.dish_cat = dish_category.dc_id', 'left');
        $data = $this->db->get('', (int)$dishes_per_page, $offset);
        $data = $data->result_array();
        return $data;
    }

    public function add_dish_category($dc_name)
    {
        $this->db->select('*');
        $this->db->where('dc_name', $dc_name);
        $data = $this->db->get('dish_category');
        $data = $data->result_array();
        if (count($data) > 0 || $dc_name == "") {
            return 0;
        } else {
            $dc_name = array('dc_name' => $dc_name);
            $this->db->insert('dish_category', $dc_name);
            return $this->db->insert_id();
        }
    }

    public function updateDishCategoryById($dc_id, $dc_name)
    {
        $data = array(
            'dc_id' => (int)$dc_id,
            'dc_name' => $dc_name
        );
        $this->db->set($data);
        $this->db->where('dc_id', $dc_id);
        return $this->db->update('dish_category', $data);
    }

    public function deleteCategoryById($dc_id)
    {
        $this->db->where('dc_id', $dc_id);
        return $this->db->delete('dish_category');
    }

}

/* End of file Dish.php */
