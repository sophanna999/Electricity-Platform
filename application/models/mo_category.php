<?php

include('da_category.php');

class mo_category extends da_category {
	
	public function get_by_sub($key) {
		
		$this->db->select('*');
		$this->db->from('gcp_category');
		$this->db->where('category_sub', $key);
		$query = $this->db->get()->result();
		return $query;
		
	}
	
	public function get_by_main() {
		$this->db->select('*');
		$this->db->from('gcp_category');
		$this->db->where('category_main', 0);
		$query = $this->db->get()->result();
		return $query;
		
	}

	// public function get_cat_all(){
	// 		$data_cat = $this->mo_category->get_by_main();
	// 		$array = array();
	// 		$lv=0;
	// 		foreach($data_cat as $row){
				
	// 			$array[] = array('category_id'=>$row->category_id,'category_name'=>$row->category_name,'category_title'=>$row->category_title,'lv'=>$lv);
				
	// 			if($this->get_category_tree($row->category_id,$lv)!=NULL){
	// 				$array_dummy = $this->get_category_tree($row->category_id,$lv);
	// 				$array = array_merge($array,$array_dummy);
	// 				$array_dummy = array();
	// 			}
				
	// 		}
	// 		return $array;
	// 	}
		
	// 	public function get_category_tree($id=null,$lv=0) {
	// 		$array = array();
	// 		$sub = $this->mo_category->get_by_sub($id);
	// 		if(!empty($sub)){
	// 			foreach($sub as $row){
	// 				$array[] = array('category_id'=>$row->category_id,'category_name'=>$row->category_name,'category_title'=>$row->category_title,'lv'=>$lv+1);

	// 				if($this->get_category_tree($row->category_id,$lv+1)!=NULL){
	// 					$array_dummy = $this->get_category_tree($row->category_id,$lv+1);
	// 					$array = array_merge($array,$array_dummy);
	// 					$array_dummy = array();
	// 				}
	// 			}
	// 			return $array;
	// 		}
	// 		else{
	// 			return null;
	// 		}
	// 	}
	

}
		