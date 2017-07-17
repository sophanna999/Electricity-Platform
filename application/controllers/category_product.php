<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Category_product extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mo_product');
        $this->load->helper('function');
        $this->load->library('pagination');

    }
    public function index($id=NULL ,$offset = 0) {
    	$config["base_url"] = base_url() . "product/category";
        $config["total_rows"] = $this->mo_product->record_count();
        $config["per_page"] = 1;

         $this->pagination->initialize($config); 

        $page =  $this->input->get("p");
        if(!empty($page) && $page!=0)
            $page = ($page-1)*1;

        $this->mViewData['data_product'] = $this->mo_product->paditionpage2($id,$config["per_page"], $page);

        // $this->mViewData['data_product'] = $this->mo_product->get_all_product();
        $this->render('category_product');
    }

}
