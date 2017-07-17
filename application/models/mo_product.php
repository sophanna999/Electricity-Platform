<?php

include('da_product.php');

class Mo_product extends Da_product {
	
	public function get_all_product() {
		$this->db->from('gcp_product');
		$this->db->join('gcp_category', 'gcp_category.category_id = gcp_product.category_id', 'left');
		$this->db->order_by('product_id', 'ASC');
		return $this->db->get()->result();
	}
	public function get_all_productcat($id,$limit,$offset ,$val) {
		$this->db->from('gcp_product');
		$this->db->join('gcp_category', 'gcp_category.category_id = gcp_product.category_id', 'left');
		$this->db->where('gcp_product.category_id', $id);

		if(!empty($val)){
			foreach($val as $row){
				$this->db->or_where('gcp_product.category_id', $row["category_id"]);
			}
		}
		$this->db->order_by('product_id', 'ASC');
		$this->db->limit($limit,$offset);
		return $this->db->get()->result();
	}
	public function get_all_productcat2($id){
		$this->db->select('*');
		$this->db->from('gcp_category');
		$this->db->where('category_sub',$id);
		$this->db->order_by('category_id', 'ASC');
		return $this->db->get()->result();
	}
	public function record_count(){
		$this->db->select('*');
		$this->db->join('gcp_category', 'gcp_category.category_id = gcp_product.category_id', 'left');
		$this->db->from('gcp_product');
		$query = $this->db->get()->num_rows();
		return $query;
	}
		public function record_count2($id,$val){
		$this->db->select('*');
		$this->db->join('gcp_category', 'gcp_category.category_id = gcp_product.category_id', 'left');
		$this->db->from('gcp_product');
		$this->db->where('gcp_product.category_id', $id);

		if(!empty($val)){
			foreach($val as $row){
				$this->db->or_where('gcp_product.category_id', $row["category_id"]);
			}
		}

		$this->db->order_by('product_id', 'ASC');
		$query = $this->db->get()->num_rows();
		return $query;
	}
	public function paditionpage($limit,$offset){
		$this->db->select('*');
		$this->db->from('gcp_product');
		$this->db->join('gcp_category', 'gcp_category.category_id = gcp_product.category_id', 'left');
		$this->db->order_by("product_id","desc");
		$this->db->limit($limit,$offset);
		$query = $this->db->get()->result();
		return $query;
	}
	public function get_categorymain($id){
		$this->db->select('*');
		$this->db->from('gcp_category');
		$this->db->where('category_sub',0);
		$this->db->order_by('category_id', 'ASC');
		return $this->db->get()->result();
	}

	public function count_product($id){
		$this->db->set('product_count', 'product_count+1', FALSE);
		$this->db->from('gcp_product');
		$this->db->where('product_id', $id);
		return $this->db->update();
		}


}
