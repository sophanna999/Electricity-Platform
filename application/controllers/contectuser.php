<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contactusers extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mo_contact');
        $this->load->helper('function');

    }
    public function index() {
        $this->mViewData['data_contact'] = $this->mo_contact->get_all();
        $this->render('contact');
    }
}

						