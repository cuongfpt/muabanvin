<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daily extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
     

    }
     function index()
    {
          //seo
       $listsys = $this->system_model->get_list();
        foreach($listsys as $item)
        {
            $this->data['meta_title'] = "Tuyển đại lý";
            $this->data['meta_keyword'] = $item->keyword;
            $this->data['meta_description'] = $item->metaDescription;
        }
        $this->data['temp'] = 'site/tuyendaily/index';
        $this->load->view('site/main-cat', $this->data);
    }
}