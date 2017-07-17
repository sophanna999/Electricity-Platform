
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Category extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_category');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'CATEGORY';
			$this->mViewData['data_cat'] = $this->mo_category->get_all();
			
			
			$this->mViewData['data_cat2'] = $this->mo_category->get_by_main();
			
			$array = array();
			$lv=0;
			foreach($this->mViewData['data_cat2'] as $row){
				
				$array[] = array('category_id'=>$row->category_id,'category_name'=>$row->category_name,'category_title'=>$row->category_title,'lv'=>$lv,'category_image'=>$row->category_image);
				
				if($this->get_category_tree($row->category_id,$lv)!=NULL){
					$array_dummy = $this->get_category_tree($row->category_id,$lv);
					$array = array_merge($array,$array_dummy);
					$array_dummy = array();
				}
				
			}

			$this->mViewData['data_cat2'] = $array;

			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('category/v_category');
		}
		
		public function get_cat_all(){
			$data_cat = $this->mo_category->get_by_main();
			$array = array();
			$lv=0;
			foreach($data_cat as $row){
				
				$array[] = array('category_id'=>$row->category_id,'category_name'=>$row->category_name,'category_title'=>$row->category_title,'lv'=>$lv);
				
				if($this->get_category_tree($row->category_id,$lv)!=NULL){
					$array_dummy = $this->get_category_tree($row->category_id,$lv);
					$array = array_merge($array,$array_dummy);
					$array_dummy = array();
				}
				
			}
			return $array;
		}
		
		public function get_category_tree($id=null,$lv=0) {
			$array = array();
			$sub = $this->mo_category->get_by_sub($id);
			if(!empty($sub)){
				foreach($sub as $row){
					$array[] = array('category_id'=>$row->category_id,'category_name'=>$row->category_name,'category_title'=>$row->category_title,'lv'=>$lv+1);

					if($this->get_category_tree($row->category_id,$lv+1)!=NULL){
						$array_dummy = $this->get_category_tree($row->category_id,$lv+1);
						$array = array_merge($array,$array_dummy);
						$array_dummy = array();
					}
				}
				return $array;
			}
			else{
				return null;
			}
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
			$this->form_validation->set_rules('category_name','Category_name', 'required');
			// $this->form_validation->set_rules('category_title','Category_title', 'required');
			// $this->form_validation->set_rules('category_sub','Category_sub', 'required');
						
		$this->mViewData['category'] = '';
		if($id!=NULL || !empty($this->input->post('category_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['category'] = $this->mo_category->get_by_key($id);
			}
			else{
				$field_name = "category_image";
				$path = "./assets/uploads/category/";
				$allowed_types = "png|jpg|jpeg|gif";
				$img_name = $this->upload_file($field_name, $path, $allowed_types); 

				$this->mo_category->category_id = $this->input->post('category_id');
				$this->mo_category->category_name = $this->input->post('category_name');
				$this->mo_category->category_title = $this->input->post('category_title');
				
				if($img_name){
					$this->mo_category->category_image = $img_name;
					// @unlink("./assets/uploads/category/".$this->input->post('category_image_old'));
				}
				else{
					$this->mo_category->category_image = $this->input->post('category_image_old');
				}

				// if($this->input->post('category_sub') == 0){
				// 	$this->mo_category->category_sub = 0;
				// 	$this->mo_category->category_main = 0;
				// } else {
				// $this->mo_category->category_sub = $this->input->post('category_sub');
				// $this->mo_category->category_main = $this->input->post('category_sub');
				// }
				$this->mo_category->updates();
				redirect('admin/category/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
				$field_name = "category_image";
				$path = "./assets/uploads/category/";
				$allowed_types = "png|jpg|jpeg|gif";
				$img_name = $this->upload_file($field_name, $path, $allowed_types);

				$this->mo_category->category_id = $this->input->post('category_id');
				$this->mo_category->category_name = $this->input->post('category_name');
				$this->mo_category->category_title = $this->input->post('category_title');
				if($img_name!=""){
					$this->mo_category->category_image = $img_name;
				}

				if($this->input->post('category_sub') == 0){
					$this->mo_category->category_sub = 0;
					$this->mo_category->category_main = 0;
				} else {
				$this->mo_category->category_sub = $this->input->post('category_sub');
				$this->mo_category->category_main = $this->input->post('category_sub');
				}

				$this->mo_category->inserts();
				redirect('admin/category/', 'refresh');
			}
		}
		$this->mViewData['all_cat'] = $this->get_cat_all();

		$this->mPageTitle = 'CREATE CATEGORY';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('category/v_category_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_category->category_id = $id;
			$this->mo_category->deletes();
		}
		redirect('admin/category/', 'refresh');
	}

}
						