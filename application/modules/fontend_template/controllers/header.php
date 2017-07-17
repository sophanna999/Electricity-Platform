<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class header extends MY_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('mo_content');
        $this->load->helper('function');

    }
    public function index() {
    	// $this->mViewData['data_contant'] = $this->mo_contact->get_all();
     //    $this->render('home');
    }

    public function getheader(){
        $this->mViewData['data_contant'] = $this->content->get_content();
        $this->render('navbar');
    }

}
