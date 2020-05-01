<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getCategoryData()
    {
        $this->db->select('*');
        $data = $this->db->get('blog_category');
        $data = $data->result_array();
        return $data;
    }

    public function getDataById($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $data = $this->db->get('blog_category');
        $data = $data->result_array();
        return $data;
    }

    public function add_blog_category($category_name)
    {
        $this->db->select('*');
        $this->db->where('category_name', $category_name);
        $data = $this->db->get('blog_category');
        $data = $data->result_array();
        if (count($data) > 0 || $category_name == "") {
            return 0;
        } else {
            $category_name = array('category_name' => $category_name);
            $this->db->insert('blog_category', $category_name);
            return $this->db->insert_id();
        }
    }

    public function updateCategoryById($id, $category_name)
    {
        $data = array(
            'id' => $id,
            'category_name' => $category_name
        );
        $this->db->where('id', $id);
        return $this->db->update('blog_category', $data);
    }

    public function deleteCategoryById($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('blog_category');
    }



    //Model for News
    public function addNews($data)
    {
        return $this->db->insert('blog', $data);
    }

    public function getNewsData()
    {
        $this->db->select('*');
        $data = $this->db->get('blog');
        $data = $data->result_array();
        return $data;
    }

    public function getNewsDataById($blog_id)
    {
        $this->db->select('*');
        $this->db->from('blog_category');
        $this->db->join('blog', 'blog.blog_category = blog_category.id', 'left');
        $this->db->where('blog.blog_id', $blog_id);
        $data = $this->db->get();
        $data = $data->result_array();
        return $data;
    }

    public function editNewsById($blog_id, $data)
    {
        $this->db->set($data);
        $this->db->where('blog_id', $blog_id);
        return $this->db->update('blog', $data);
    }

    public function deleteNewsById($blog_id)
    {
        $this->db->where('blog_id', $blog_id);
        return $this->db->delete('blog');
    }

    public function number_of_pages($news_per_page)
    {
        $this->db->select('*');
        $total = $this->db->get('blog');
        $total = $total->result_array();
        $count = count($total);
        return ceil($count / $news_per_page);
    }

    public function loadNewsByPage($page_th, $news_per_page)
    {
        $offset = ((int) $page_th - 1) * (int) $news_per_page;
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('blog_category', 'blog.blog_category = blog_category.id', 'left');
        $data = $this->db->get('', (int) $news_per_page, (int) $offset);
        $data = $data->result_array();
        return $data;
    }

    public function getRelatedNews($blog_id)
    {
        $this->db->select('blog_category');
        $this->db->where('blog_id', $blog_id);
        $id = $this->db->get('blog');
        $id = $id->result_array();
        $id = (int)$id[0]['blog_category'];
        $this->db->select('*');
        $this->db->where('blog_category', $id);
        $this->db->where('blog_id !=', $blog_id);
        $data = $this->db->get('blog', 3);
        $data = $data->result_array();
        return $data;
    }

    public function loadNewsByCategory($id, $page_th, $news_per_page)
    {
        $offset = ((int) $page_th - 1) * (int) $news_per_page;
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('blog_category', 'blog.blog_category = blog_category.id', 'left');
        $this->db->where('blog_category.id', $id);
        $data = $this->db->get('', (int) $news_per_page, $offset);
        $data = $data->result_array();
        return $data;
    }

    public function number_of_pages_in_category($id, $news_per_page)
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('blog_category', 'blog.blog_category = blog_category.id', 'left');
        $this->db->where('blog_category.id', $id);
        $data = $this->db->get('');
        $data = $data->result_array();
        $count = count($data);
        return ceil($count / $news_per_page);
    }
}

/* End of file Blog_model.php */
