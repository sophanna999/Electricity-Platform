<?php
			class Da_slide extends MY_Model { 
			public $slide_id;
			public $slide_name;
			
			public function inserts() {
				$this->db->set('slide_id', $this->slide_id);
				$this->db->set('slide_name', $this->slide_name);
				
				$this->db->from('gcp_slide');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('gcp_slide');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('gcp_slide', $data, $key);
			}
			public function updates() {
				
			$this->db->set('slide_id', $this->slide_id);
				$this->db->set('slide_name', $this->slide_name);
				
				$this->db->from('gcp_slide');
				$this->db->where('slide_id', $this->slide_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('gcp_slide');
				$this->db->where('slide_id', $this->slide_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('gcp_slide');
				$this->db->order_by('slide_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('gcp_slide');
				$this->db->where('slide_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}