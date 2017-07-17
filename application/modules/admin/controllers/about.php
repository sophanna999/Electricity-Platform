
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
			$this->mPageTitle = 'About';
			$this->mViewData['data_cat'] = $this->mo_about->get_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('about/v_about');
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				// $this->form_validation->set_rules('aboutat_logo','Aboutat_logo', 'required');
				$this->form_validation->set_rules('aboutat_nameth','Aboutat_nameth', 'required');
				$this->form_validation->set_rules('aboutat_nameen','Aboutat_nameen', 'required');
				$this->form_validation->set_rules('aboutat_detailth','Aboutat_detailth', 'required');
						
		$this->mViewData['about'] = '';

		if($id!=NULL || !empty($this->input->post('aboutat_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['about'] = $this->mo_about->get_by_key($id);
			}
			else{
				// $field_name = "aboutat_logo";
				// $path = "./assets/uploads/about/";
				// $allowed_types = "png|jpg|jpeg|gif";
				// $img_name = $this->upload_file($field_name, $path, $allowed_types); 


				$this->mo_about->aboutat_id = $this->input->post('aboutat_id');
				$this->mo_about->aboutat_logo = $this->input->post('aboutat_logo');
				$this->mo_about->aboutat_nameth = $this->input->post('aboutat_nameth');
				$this->mo_about->aboutat_nameen = $this->input->post('aboutat_nameen');
				$this->mo_about->aboutat_detailth = $this->input->post('aboutat_detailth');

				// if($img_name!="")
				// 	$this->mo_about->aboutat_logo = $img_name;
				// else
				// 	$this->mo_about->aboutat_logo = $this->mViewData['about'][0]->aboutat_logo;
				
				$this->mo_about->updates();
				redirect('admin/about/create/1', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
				// $field_name = "aboutat_logo";
				// $path = "./assets/uploads/about/";
				// $allowed_types = "png|jpg|jpeg|gif";
				// $img_name = $this->upload_file($field_name, $path, $allowed_types); 


			$this->mo_about->aboutat_id = $this->input->post('aboutat_id');
				$this->mo_about->aboutat_logo = $img_name;
				$this->mo_about->aboutat_nameth = $this->input->post('aboutat_nameth');
				$this->mo_about->aboutat_nameen = $this->input->post('aboutat_nameen');
				$this->mo_about->aboutat_detailth = $this->input->post('aboutat_detailth');
				
				$this->mo_about->inserts();
				redirect('admin/about/', 'refresh');
			}
		}

		$this->mPageTitle = 'ABOUT';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('about/v_about_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_about->aboutat_id = $id;
			$this->mo_about->deletes();
		}
		redirect('admin/about/', 'refresh');
	}

}
						