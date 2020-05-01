<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Slide extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Slide_model');
    }

    public function index()
    {
        $data_slide = $this->Slide_model->getSlidesData();
        $data_slide = json_decode($data_slide, true);
        $data['data_slide'] = $data_slide;
        $data['subview'] = 'admin/slide';
        $this->load->view('admin/index', $data);
    }

    public function add_slide()
    {
        $data['subview'] = 'admin/add_slide';
        $this->load->view('admin/index', $data);
    }

    public function addSlide()
    {
        //lấy dữ liệu từ trường slides_top_banner ra
        $data = $this->Slide_model->getSlidesData();
        //giải mã json
        $data = json_decode($data, true);

        if ($data == NULL) {
            $data = array();
        }
        //lấy dữ liệu từ view
        $slide_title = $this->input->post('slide_title');
        $slide_description = $this->input->post('slide_description');
        $button_link = $this->input->post('button_link');
        //upload file
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["slide_image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["slide_image"]["tmp_name"]);
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
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["slide_image"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["slide_image"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["slide_image"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $slide_image = base_url() . "uploads/" . basename($_FILES["slide_image"]["name"]);
        //tạo mảng lưu trữ dữ liệu đã lấy từ form
        $_1Slide = array(
            'slide_image' => $slide_image,
            'slide_title' => $slide_title,
            'slide_description' => $slide_description,
            'button_link' => $button_link
        );
        //thêm nội dung vào json dùng hàm array_push
        array_push($data, $_1Slide);
        //mã hóa lại thành json
        $data = json_encode($data);
        //đưa dữ liệu mới vào, update lại
        if ($this->Slide_model->updateSlidesData($data)) {
            $this->load->view('admin/noti_Slide');
        }
    }

    public function edit_slide()
    {
        $data_slide = $this->Slide_model->getSlidesData();
        $data_slide = json_decode($data_slide, true);
        $data['data_slide'] = $data_slide;
        $data['subview'] = 'admin/edit_slide';
        $this->load->view('admin/index', $data);
    }

    public function editSlide()
    {
        //lấy về nội dung từ view
        $slide_title = $this->input->post('slide_title');
        $slide_description = $this->input->post('slide_description');
        $button_link = $this->input->post('button_link');
        //lấy về các ảnh
        $images = $_FILES['slide_image']['name']; //lưu tên file
        $image_file = $_FILES['slide_image']['tmp_name']; //lưu file vật lý
        $slide_image_old = $this->input->post('slide_image_old');
        //duyệt mảng để lấy tên từng file
        $images_name = array();
        for ($i = 0; $i < count($images); $i++) {
            if ($images[$i] != '') {
                $direct = 'uploads/' . $images[$i];
                move_uploaded_file($image_file[$i], $direct);
                $images_name[$i] = base_url() . $direct;
            } else {
                $images_name[$i] = $slide_image_old[$i];
            }
        }
        //tạo mảng mới là tất cả slide
        $all_slide = array();
        //insert từng phần tử vào mảng tất cả slide
        for ($i = 0; $i < count($slide_title); $i++) {
            $temp = array();
            $temp['slide_title'] = $slide_title[$i];
            $temp['slide_description'] = $slide_description[$i];
            $temp['button_link'] = $button_link[$i];
            $temp['slide_image'] = $images_name[$i];
            array_push($all_slide, $temp);
        }
        //mã hóa đưa thành json
        $all_slide = json_encode($all_slide);
        //gọi model update dữ liệu
        if ($this->Slide_model->updateSlidesData($all_slide)) {
            $this->load->view('admin/noti_Slide');
        }
    }

    public function header(){
        $data_header = $this->Slide_model->getHeaderData();
        $data_header = json_decode($data_header, true);
        $data['data_header'] = $data_header;
        $data['subview'] = 'admin/header';
        $this->load->view('admin/index', $data);
           
    }

    public function edit_header(){
        $data_header = $this->Slide_model->getHeaderData();
        $data_header = json_decode($data_header, true);
        $data['data_header'] = $data_header;
        $data['subview'] = 'admin/edit_header';
        $this->load->view('admin/index', $data);
    }

    public function editHeader()
    {
        $facebook = $this->input->post('facebook');
        $twitter = $this->input->post('twitter');
        $tumblr = $this->input->post('tumblr');
        $instagram = $this->input->post('instagram');
        $hotline = $this->input->post('hotline');
        $open_time = $this->input->post('open_time');
        $close_time = $this->input->post('close_time');
        
        $data_header = array(
            'social_network' => array(
                'facebook' => $facebook,
                'twitter' => $twitter,
                'tumblr' => $tumblr,
                'instagram' => $instagram
            ),
            'hotline' => $hotline,
            'business_hours' => array(
                'open_time' => $open_time,
                'close_time' => $close_time
            )
        );
        $data_header = json_encode($data_header);
        if($this->Slide_model->updateHeaderData($data_header))
        {
            $this->load->view('admin/success');
            
        }
    }
}

/* End of file Slide.php */
