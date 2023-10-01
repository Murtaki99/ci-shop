<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends MY_Model
{
    protected $perPage = 2;

    public function getDefaultValues()
    {
        return [
            'id'   => '',
            'slug' => '',
            'name' => ''
        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'slug',
                'label' => 'Slug',
                'rules' => 'trim|required|callback_unique_slug'
            ],
            [
                'field' => 'name',
                'label' => 'Category',
                'rules' => 'trim|required|callback_unique_slug'
            ]
        ];
    }
}

/* End of file ModelName.php */