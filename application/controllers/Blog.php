<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    
    private int $news_per_page;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Blog_model');
        $this->news_per_page = 2;
    }
    

    public function page($page_th){
        $this->load->model('admin/Slide_model');
        $header_data = json_decode($this->Slide_model->getHeaderData(), true);
        $data['header_data'] = $header_data;
        $data['category_data'] = $this->Blog_model->getCategoryData();
        $data['page_th'] = $page_th;
        $data['subview'] = 'client/blog';
        $data['news_info'] = $this->Blog_model->loadNewsByPage($page_th, $this->news_per_page);
        $data['number_of_pages'] = $this->Blog_model->number_of_pages($this->news_per_page);
        $this->load->view('client/index', $data);
    }

    public function detail($blog_id){
        $this->load->model('admin/Slide_model');
        $header_data = json_decode($this->Slide_model->getHeaderData(), true);
        $data['header_data'] = $header_data;
        $data['category_data'] = $this->Blog_model->getCategoryData();
        $data['blog_detail'] =  $this->Blog_model->getNewsDataById($blog_id);
        $data['related_news'] = $this->Blog_model->getRelatedNews($blog_id);
        $data['subview'] = 'client/single-blog';
        $this->load->view('client/index', $data);
    }

    public function category($id, $page_th)
    {
        $this->load->model('admin/Slide_model');
        $header_data = json_decode($this->Slide_model->getHeaderData(), true);
        $data['header_data'] = $header_data;
        $data['page_th'] = $page_th;
        $data['category_data'] = $this->Blog_model->getCategoryData();
        $data['subview'] = 'client/blog';
        $data['news_info'] = $this->Blog_model->loadNewsByCategory($id,$page_th, $this->news_per_page);
        $data['number_of_pages'] = $this->Blog_model->number_of_pages_in_category($id, $this->news_per_page);
        $this->load->view('client/index', $data);
    }    

}

/* End of file Blog.php */
