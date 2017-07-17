<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class News extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mo_news');
        $this->load->model('mo_contact');
        $this->load->library('pagination');
        $this->load->helper('function');

    }
    public function index($offset = 0) {
        $config["base_url"] = base_url() . "news";
        $config["total_rows"] = $this->mo_news->record_count();
        $config["per_page"] = 2;

        $this->pagination->initialize($config); 

        $page =  $this->input->get("p");
        if(!empty($page) && $page!=0)
            $page = ($page-1)*2;

        $this->mViewData['data_news'] = $this->mo_news->paditionpage($config["per_page"], $page);

        // $this->mViewData['data_news'] = $this->mo_news->get_all();
        $this->mViewData['data_contact'] = $this->mo_contact->get_all();
        $this->mViewData['data_newsright'] = $this->mo_news->gey_by_news();
        $this->render('news');
    }

    public function detail($id){
    	$this->mViewData['data_detailnews'] = $this->mo_news->get_by_key($id);
        $this->mViewData['data_contact'] = $this->mo_contact->get_all();
        $this->mViewData['data_newsright'] = $this->mo_news->gey_by_news();
    	$this->render('details-news');
    }
}
