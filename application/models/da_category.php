<?php
			class Da_category extends MY_Model { 
			public $category_id;
			public $category_name;
			public $category_title;
			public $category_image;
			public $category_sub;
			public $category_main;
			
			public function inserts() {
				$this->db->set('category_id', $this->category_id);
				$this->db->set('category_name', $this->category_name);
				$this->db->set('category_title', $this->category_title);
				$this->db->set('category_image', $this->category_image);
				$this->db->set('category_sub', $this->category_sub);
				$this->db->set('category_main', $this->category_main);
				
				$this->db->from('gcp_category');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('gcp_category');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('gcp_category', $data, $key);
			}
			public function updates() {
				
				$this->db->set('category_id', $this->category_id);
				$this->db->set('category_name', $this->category_name);
				$this->db->set('category_title', $this->category_title);
				$this->db->set('category_image', $this->category_image);
				// $this->db->set('category_sub', $this->category_sub);
				// $this->db->set('category_main', $this->category_main);
				
				$this->db->from('gcp_category');
				$this->db->where('category_id', $this->category_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('gcp_category');
				$this->db->where('category_id', $this->category_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('gcp_category');
				$this->db->order_by('category_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('gcp_category');
				$this->db->where('category_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}