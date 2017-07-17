<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class download extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mo_download');
        $this->load->library('pagination');
        $this->load->helper('function');
        $this->load->helper('url');

    }
    public function index($offset = 0) {
    	$config["base_url"] = base_url() . "download";
        $config["total_rows"] = $this->mo_download->record_count();
        $config["per_page"] = 6;

		$this->pagination->initialize($config); 

		// $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$page =  $this->input->get("p");
        if(!empty($page) && $page!=0)
            $page = ($page-1)*6;

        $this->mViewData['data_download'] = $this->mo_download->paditionpage($config["per_page"], $page);
    	// echo "<pre>";
    	// print_r($this->mo_download->paditionpage());
    	// echo "</pre>";
    	// exit();
        $this->render('download');
    }
}
