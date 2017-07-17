<?php
			class Da_product extends MY_Model { 
			public $product_id;
			public $product_name;
			public $product_title;
			public $product_detail;
			public $product_img;
			public $category_id;
			
			public function inserts() {
				$this->db->set('product_id', $this->product_id);
				$this->db->set('product_name', $this->product_name);
				$this->db->set('product_title', $this->product_title);
				$this->db->set('product_detail', $this->product_detail);
				$this->db->set('product_img', $this->product_img);
				$this->db->set('category_id', $this->category_id);
				
				$this->db->from('gcp_product');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('gcp_product');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('gcp_product', $data, $key);
			}
			public function updates() {
				
				$this->db->set('product_id', $this->product_id);
				$this->db->set('product_name', $this->product_name);
				$this->db->set('product_title', $this->product_title);
				$this->db->set('product_detail', $this->product_detail);
				$this->db->set('product_img', $this->product_img);
				$this->db->set('category_id', $this->category_id);
				
				$this->db->from('gcp_product');
				$this->db->where('product_id', $this->product_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('gcp_product');
				$this->db->where('product_id', $this->product_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('gcp_product');
				$this->db->order_by('product_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('gcp_product');
				$this->db->where('product_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}