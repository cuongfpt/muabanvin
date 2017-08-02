<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chinhanh extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Chinhanh_model');

    }
     function index()
    {
        $input = array();
        $list = $this->Chinhanh_model->get_chinhanh();
        //seo
       $listsys = $this->system_model->get_list();
        foreach($listsys as $item)
        {
            $this->data['meta_title'] = "Chi nhánh";
            $this->data['meta_keyword'] = $item->keyword;
            $this->data['meta_description'] = $item->metaDescription;
        }
        $this->data['list'] = $list;
        $this->data['temp'] = 'site/Chinhanh/index';
        $this->load->view('site/main-cat', $this->data);
    }
}