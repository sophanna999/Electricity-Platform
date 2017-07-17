
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Cell extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_Cell');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'Cell';
			$this->mViewData['data_cat'] = $this->mo_Cell->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('Cell/v_Cell');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('name','Name', 'required');
				$this->form_validation->set_rules('status','Status', 'required');
						
		$this->mViewData['Cell'] = '';

		if($id!=NULL || !empty($this->input->post('id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['Cell'] = $this->mo_Cell->get_by_key($id);
			}
			else{
			$this->mo_Cell->id = $this->input->post('id');
				$this->mo_Cell->name = $this->input->post('name');
				$this->mo_Cell->status = $this->input->post('status');
				
				$this->mo_Cell->updates();
				redirect('admin/Cell/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_Cell->id = $this->input->post('id');
				$this->mo_Cell->name = $this->input->post('name');
				$this->mo_Cell->status = $this->input->post('status');
				
				$this->mo_Cell->inserts();
				redirect('admin/Cell/', 'refresh');
			}
		}

		$this->mPageTitle = 'Create Cell';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('Cell/v_Cell_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_Cell->id = $id;
			$this->mo_Cell->deletes();
		}
		redirect('admin/Cell/', 'refresh');
	}

}
						