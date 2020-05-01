<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dish extends CI_Controller
{

    private int $dishes_per_page;
    public function __construct()
    {
        parent::__construct();
        $this->dishes_per_page = 5;
        $this->load->model('admin/Dish_model');
    }

    public function page($page_th){
        $data['page_th'] = $page_th;
        $data['total_page'] = $this->Dish_model->number_of_pages($this->dishes_per_page);
        $data['dish_data'] = $this->Dish_model->loadDishByPage($page_th, $this->dishes_per_page);
        $data['subview'] = 'admin/dish';
        $this->load->view('admin/index', $data);
    }   

    public function add_dish()
    {
        $data['subview'] = 'admin/add_dish';
        $this->load->view('admin/index', $data);
    }

    public function addDish()
    {
        //handle image
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["dish_image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["dish_image"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            //echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["dish_image"]["size"] > 500000) {
            //echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            //echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["dish_image"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["dish_image"]["name"]) . " has been uploaded.";
            } else {
                //echo "Sorry, there was an error uploading your file.";
            }
        }
        $dish_image = base_url() . 'uploads/' . basename($_FILES["dish_image"]["name"]);
        $dish_name = $this->input->post('dish_name');
        $dish_price = $this->input->post('dish_price');
        $dish_details = $this->input->post('dish_details');
        $dish_cat = $this->input->post('dish_cat');
        $dish_summary = $this->input->post('dish_summary');
        $dish_status = $this->input->post('dish_status');
        if ($this->input->post('dish_featured') == NULL) {
            $dish_featured = 0;
        } else {
            $dish_featured = 1;
        }
        $data = array(
            'dish_image' => $dish_image,
            'dish_name' => $dish_name,
            'dish_price' => $dish_price,
            'dish_details' => $dish_details,
            'dish_cat' => $dish_cat,
            'dish_summary' => $dish_summary,
            'dish_status' => $dish_status,
            'dish_featured' => $dish_featured
        );
        if ($this->Dish_model->addDish($data)) {
            $this->load->view('admin/success');
        }
    }

    public function edit_dish($dish_id)
    {
        $data['dish_info'] = $this->Dish_model->getDishDataById($dish_id);
        $data['category_data'] = $this->Dish_model->getDishCategoryData();
        $data['subview'] = 'admin/edit_dish';
        $this->load->view('admin/index', $data);
    }

    public function editDish($dish_id)
    {
        $dish_image_old = $this->input->post('dish_image_old');
        $dish_name = $this->input->post('dish_name');
        $dish_price = $this->input->post('dish_price');
        $dish_details = $this->input->post('dish_details');
        $dish_cat = $this->input->post('dish_cat');
        $dish_summary = $this->input->post('dish_summary');
        $dish_status = $this->input->post('dish_status');
        if ($this->input->post('dish_featured') == NULL) {
            $dish_featured = 0;
        } else {
            $dish_featured = 1;
        }
        //xử lý ảnh
        $dish_image = $_FILES['dish_image']['name'];
        if (empty($dish_image)) {
            $dish_image = $dish_image_old;
        } else {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["dish_image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["dish_image"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                //echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["dish_image"]["size"] > 500000) {
                //echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                //echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["dish_image"]["tmp_name"], $target_file)) {
                    echo "The file " . basename($_FILES["dish_image"]["name"]) . " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
            }
            $dish_image = base_url() . 'uploads/' . basename($_FILES["dish_image"]["name"]);
        }
        $data = array(
            'dish_image' => $dish_image,
            'dish_name' => $dish_name,
            'dish_price' => $dish_price,
            'dish_details' => $dish_details,
            'dish_cat' => $dish_cat,
            'dish_summary' => $dish_summary,
            'dish_status' => $dish_status,
            'dish_featured' => $dish_featured
        );
        //call model
        if($this->Dish_model->editDishById($dish_id, $data)){
            $this->load->view('admin/success');
        }
    }

    public function deleteDish($dish_id){
        if($this->Dish_model->deleteDishById($dish_id)){
            $this->load->view('admin/success');
        }
    }

    public function deleteCategoryById($dc_id)
    {
        $this->db->where('dc_id', $dc_id);
        return $this->db->delete('dish_category');
    }

}
