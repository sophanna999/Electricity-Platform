
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class About extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_about');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle            = 'About';
			$this->mViewData['data_cat'] = $this->mo_about->get_all();
			$form = $this->form_builder  ->create_form();
			$this->mViewData['form']     = $form;
			$this->render('about/v_about');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('title','Title', 'required');
				$this->form_validation->set_rules('detail','Detail', 'required');
				$this->form_validation->set_rules('image','Image', 'required');
						
		$this->mViewData['about'] = '';

		if($id!=NULL || !empty($this->input->post('id'))){
			if(empty($this->input->post())){
				$this->mViewData['about'] = $this->mo_about->get_by_key($id);
			}
			else{
				$field_name    = "image";
				$path  		   = "./assets/uploads/about/";
				$allowed_files = "jpg|png|jpeg|gif";
				$img_name      = $this->upload_file($field_name, $path, $allowed_files);	

				$this->mo_about->id = $this->input->post('id');
				$this->mo_about->title   = $this->input->post('title');
				$this->mo_about->detail  = $this->input->post('detail');
				// $this->mo_about->image   = $this->input->post('image');
				if ($img_name) {
					$this->mo_about->image = $img_name;
				} else {
					$this->mo_about->image = $this->input->post('old_image)');
				}
				
				$this->mo_about->updates();
				redirect('admin/about/', 'refresh');
			}
		} else {
			if ($this->input->post() != null ) {

				$field_name     = "image";
				$path           = "./assets/uploads/about";
				$allowed_files  = "jpg|png|jpeg|gif";
				$img_name 	    = $this->upload_file($field_name, $path, $allowed_files);

				$this->mo_about->id     = $this->input->post('id');
				$this->mo_about->title  = $this->input->post('title');
				$this->mo_about->detail = $this->input->post('detail');
				$this->mo_about->image  = $img_name;
				
				$this->mo_about->inserts();
				redirect('admin/about/', 'refresh');
			}
	}
				$this->mPageTitle = 'Create about';
				$form = $this->form_builder->create_form();
				$this->mViewData['form'] = $form;
				$this->render('about/v_about_create');
}

	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_about->id = $id;
			$this->mo_about->deletes();
		}
		redirect('admin/about/', 'refresh');
	}

}
						