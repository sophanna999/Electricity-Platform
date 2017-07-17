<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Contactus extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mo_contact');
        $this->load->model('mo_contactuser');
        $this->load->helper('function');
        $this->load->helper('email');

    }
    public function index() {
        $this->mViewData['data_contact'] = $this->mo_contact->get_all();
        $this->render('contact');
    }

    public function create($id=NULL) {

		$this->load->library('form_validation');
		$this->form_validation->set_rules('contactuser_name','Contactuser_name', 'required');
		$this->form_validation->set_rules('contactuser_email','Contactuser_email', 'required');
		$this->form_validation->set_rules('contactuser_detail','Contactuser_detail', 'required');
						
		$this->mViewData['contactuser'] = '';

		if($this->form_validation->run() == FALSE){
			
		}
		else{
			$mailData = array(
	        'contactuser_name' => $this->input->post('contactuser_name'), 
	        'contactuser_email' => $this->input->post('contactuser_email'), 
	        'contactuser_detail' => $this->input->post('contactuser_detail'),
	          );
			$msg = "Name " . $mailData['contactuser_name'] . "\n\n";
	          $msg .= "Email " . $mailData['contactuser_email'] . "\n\n";
	          $msg .= "Detil " . $mailData['contactuser_detail'] . "\n\n";
		      $msg .= "Subject : \n";
	          $msg .= $mailData['contactuser_name'] . "\n\n";
	          $msg .= "Message : \n";
	          $msg .= $mailData['contactuser_detail'] . "\n\n";
			  
			mail('bunjong10@hotmail.com', $mailData['contactuser_name'], $msg);

			$this->mo_contactuser->contactuser_id = $this->input->post('contactuser_id');
			$this->mo_contactuser->contactuser_name = $this->input->post('contactuser_name');
			$this->mo_contactuser->contactuser_email = $this->input->post('contactuser_email');
			$this->mo_contactuser->contactuser_detail = $this->input->post('contactuser_detail');
			$this->mo_contactuser->contactuser_dateime = date('Y-m-d H:i:s',now());
			
			$this->mo_contactuser->inserts();
			
		}
		redirect('home', 'refresh');
	}

}
