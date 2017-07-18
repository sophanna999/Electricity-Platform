
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Contact extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_contact');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'Contact';
			$this->mViewData['data_cat'] = $this->mo_contact->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('contact/v_contact');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('company_name','Company_name', 'required');
				$this->form_validation->set_rules('first_tel','First_tel', 'required');
				$this->form_validation->set_rules('second_tel','Second_tel', 'required');
				$this->form_validation->set_rules('company_tel','Company_tel', 'required');
				$this->form_validation->set_rules('fax','Fax', 'required');
				$this->form_validation->set_rules('address','Address', 'required');
				$this->form_validation->set_rules('line','Line', 'required');
				$this->form_validation->set_rules('facebook','Facebook', 'required');
				$this->form_validation->set_rules('img_map','Img_map', 'required');
						
		$this->mViewData['contact'] = '';

		if($id!=NULL || !empty($this->input->post('id'))){
			if(empty($this->input->post())){
				$this->mViewData['contact'] = $this->mo_contact->get_by_key($id);
			}
			else{

				$field_name 	= "img_map";
				$path 			= "./assets/uploads/contact/";
				$allowed_files  = "jpg|png|jpeg|gif";
			    $img_name 		= $this->upload_file($field_name, $path, $allowed_files);

				$this->mo_contact->id = $this->input->post('id');
				$this->mo_contact->company_name = $this->input->post('company_name');
				$this->mo_contact->first_tel = $this->input->post('first_tel');
				$this->mo_contact->second_tel = $this->input->post('second_tel');
				$this->mo_contact->company_tel = $this->input->post('company_tel');
				$this->mo_contact->fax = $this->input->post('fax');
				$this->mo_contact->address = $this->input->post('address');
				$this->mo_contact->line = $this->input->post('line');
				$this->mo_contact->facebook = $this->input->post('facebook');
				// $this->mo_contact->img_map = $this->input->post('img_map');
				if ($img_name) {
					$this->mo_contact->img_map = $img_name;
				} else {
					$this->mo_contact->img_map = $this->input->post('old_img_map');
				}
				
				$this->mo_contact->updates();
				redirect('admin/contact/', 'refresh');
			}
		} else {

				if ($this->input->post()) {

				$field_name 	= "img_map";
				$path 			= "./assets/uploads/contact/";
				$allowed_files  = "jpg|png|jpeg|gif";
			    $img_name 		= $this->upload_file($field_name, $path, $allowed_files);

				$this->mo_contact->id = $this->input->post('id');
				$this->mo_contact->company_name = $this->input->post('company_name');
				$this->mo_contact->first_tel = $this->input->post('first_tel');
				$this->mo_contact->second_tel = $this->input->post('second_tel');
				$this->mo_contact->company_tel = $this->input->post('company_tel');
				$this->mo_contact->fax = $this->input->post('fax');
				$this->mo_contact->address = $this->input->post('address');
				$this->mo_contact->line = $this->input->post('line');
				$this->mo_contact->facebook = $this->input->post('facebook');
				$this->mo_contact->img_map = $img_name;
				
				$this->mo_contact->inserts();
				redirect('admin/contact/', 'refresh');
				}

		}

		$this->mPageTitle = 'Create contact';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('contact/v_contact_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_contact->id = $id;
			$this->mo_contact->deletes();
		}
		redirect('admin/contact/', 'refresh');
	}

}
						