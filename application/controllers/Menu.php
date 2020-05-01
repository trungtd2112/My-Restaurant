<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Dish_model');
    }
    

    public function index()
    {
        $this->load->model('admin/Slide_model');
        $header_data = json_decode($this->Slide_model->getHeaderData(), true);
        $data['header_data'] = $header_data;
        $data['number_of_dishes'] = count($this->Dish_model->getDishData());
        $data['number_of_dishes_1'] = count($this->Dish_model->getDishDataByCat(1));
        $data['number_of_dishes_2'] = count($this->Dish_model->getDishDataByCat(2));
        $data['number_of_dishes_3'] = count($this->Dish_model->getDishDataByCat(3));
        $data['menu'] = $this->Dish_model->getDishData();
        $data['menu_breakfast'] = $this->Dish_model->getDishDataByCat(1);
        $data['menu_lunch'] = $this->Dish_model->getDishDataByCat(2);
        $data['menu_dinner'] = $this->Dish_model->getDishDataByCat(3);
        $data['featured_dish'] = $this->Dish_model->getFeaturedDish();
        $data['subview'] = 'client/menu';
        $this->load->view('client/index', $data);
    }

}

/* End of file Menu.php */
