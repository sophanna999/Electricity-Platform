<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class About extends MY_Controller {

    public function __construct() {
        parent::__construct();
       // $this->load->model('mo_demo_blog_categories','categories');
        $this->load->model('mo_about');
        $this->load->model('mo_contact');
        $this->load->helper('function');

    }
    public function index() {
        $this->mViewData['data_about'] = $this->mo_about->get_all();
        $this->mViewData['data_contact'] = $this->mo_contact->get_all();
        $this->render('about');
    }

}
