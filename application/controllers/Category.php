<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index($page = null)
    {
        $data['title']  = 'Categories';
        $data['content'] = $this->category->paginate($page)->get();
        $data['total_rows'] = $this->category->count();
        $data['pagination'] = $this->category->makePagination(base_url('category'), 3, $data['total_rows']);
        $data['page'] = 'pages/category/index';

        $this->view($data);
    }
}

/* Category.php */