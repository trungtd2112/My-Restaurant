<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Blog_model');
    }


    public function index()
    {
        $data['category_data'] = $this->Blog_model->getCategoryData();
        $data['subview'] = 'admin/blog_category';
        $this->load->view('admin/index', $data);
    }

    public function add_blog_category()
    {
        $data['subview'] = 'admin/add_blog_category';
        $this->load->view('admin/index', $data);
    }

    public function edit_blog_category($id)
    {
        $data['cat_info'] = $this->Blog_model->getDataById($id);
        $data['subview'] = 'admin/edit_blog_category';
        $this->load->view('admin/index', $data);
    }

    public function editBlogCategory($id)
    {
        $category_name = $this->input->post('category_name');
        $this->Blog_model->updateCategoryById($id, $category_name);
    }

    public function deleteBlogCategory($id)
    {
        if ($this->Blog_model->deleteCategoryById($id)) {
            $this->load->view('admin/success');
        }
    }

    public function addJquery()
    {
        $category_name = $this->input->post('category_name');
        $result = $this->Blog_model->add_blog_category($category_name);
        echo json_encode($result);
    }

    public function news()
    {
        $data['subview'] = 'admin/news';
        $data['category_data'] = $this->Blog_model->getCategoryData();
        $data['news_data'] = $this->Blog_model->getNewsData();
        $this->load->view('admin/index', $data);
    }

    public function addNews()
    {
        //handle image
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["blog_thumbnail"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["blog_thumbnail"]["tmp_name"]);
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
        if ($_FILES["blog_thumbnail"]["size"] > 500000) {
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
            if (move_uploaded_file($_FILES["blog_thumbnail"]["tmp_name"], $target_file)) {
                //echo "The file " . basename($_FILES["blog_thumbnail"]["name"]) . " has been uploaded.";
            } else {
                //echo "Sorry, there was an error uploading your file.";
            }
        }
        $blog_thumbnail = base_url() . 'uploads/' . basename($_FILES["blog_thumbnail"]["name"]);
        $blog_title = $this->input->post('blog_title');
        $blog_content = $this->input->post('blog_content');
        $blog_category = $this->input->post('blog_category');
        $blog_summary = $this->input->post('blog_summary');
        $data = array(
            'blog_title' => $blog_title,
            'blog_content' => $blog_content,
            'blog_category' => $blog_category,
            'blog_thumbnail' => $blog_thumbnail,
            'blog_summary' => $blog_summary
        );
        if ($this->Blog_model->addNews($data)) {
            $this->load->view('admin/noti_Blog');
        }
    }

    public function edit_news($blog_id)
    {
        $data['category_data'] = $this->Blog_model->getCategoryData();
        $data['news_info'] = $this->Blog_model->getNewsDataById($blog_id);
        $data['subview'] = 'admin/edit_blog';
        $this->load->view('admin/index', $data, FALSE);
    }

    public function editNews($blog_id)
    {
        $old_thumbnail = $this->input->post('old_thumbnail');
        $blog_thumbnail = $_FILES['blog_thumbnail']['name'];
        if (empty($blog_thumbnail)) {
            $blog_thumbnail = $old_thumbnail;
        } else {
            //handle image
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["blog_thumbnail"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["blog_thumbnail"]["tmp_name"]);
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
            if ($_FILES["blog_thumbnail"]["size"] > 500000) {
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
                if (move_uploaded_file($_FILES["blog_thumbnail"]["tmp_name"], $target_file)) {
                    echo "The file " . basename($_FILES["blog_thumbnail"]["name"]) . " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
            }
            $blog_thumbnail = base_url() . 'uploads/' . basename($_FILES["blog_thumbnail"]["name"]);
        }

        $blog_title = $this->input->post('blog_title');
        $blog_content = $this->input->post('blog_content');
        $blog_category = $this->input->post('blog_category');
        $blog_summary = $this->input->post('blog_summary');
        $data = array(
            'blog_title' => $blog_title,
            'blog_content' => $blog_content,
            'blog_category' => $blog_category,
            'blog_thumbnail' => $blog_thumbnail,
            'blog_summary' => $blog_summary
        );
        //call model
        if ($this->Blog_model->editNewsById($blog_id, $data)) {
            $this->load->view('admin/noti_Blog');
        }
    }

    public function deleteNews($blog_id)
    {
        if ($this->Blog_model->deleteNewsById($blog_id)) {
            $this->load->view('admin/noti_Blog');
        }
    }
}

/* End of file Blog.php */
