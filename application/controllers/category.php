<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class category extends MY_Controller {

    public function __construct() {
        parent::__construct();
       // $this->load->model('mo_demo_blog_categories','categories');
        $this->load->model('mo_category');
        $this->load->helper('function');

    }
    public function index() {
        // $this->mViewData['data_category'] = $this->mo_category->get_by_main();
        // $this->mViewData['data_category'] = $this->mo_category->get_by_main();
        // $this->mViewData['data_main'] = $this->mo_category->get_by_main();
        // $this->render('product');

    }
    public function category(){
        return $this->mo_category->get_by_main();
    }

}
