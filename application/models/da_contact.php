<?php
			class Da_contact extends MY_Model { 
			public $id;
			public $company_name;
			public $first_tel;
			public $second_tel;
			public $company_tel;
			public $fax;
			public $address;
			public $line;
			public $facebook;
			public $img_map;
			
			public function inserts() {
				$this->db->set('id', $this->id);
				$this->db->set('company_name', $this->company_name);
				$this->db->set('first_tel', $this->first_tel);
				$this->db->set('second_tel', $this->second_tel);
				$this->db->set('company_tel', $this->company_tel);
				$this->db->set('fax', $this->fax);
				$this->db->set('address', $this->address);
				$this->db->set('line', $this->line);
				$this->db->set('facebook', $this->facebook);
				$this->db->set('img_map', $this->img_map);
				
				$this->db->from('tbl_contact');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tbl_contact');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tbl_contact', $data, $key);
			}
			public function updates() {
				
			$this->db->set('id', $this->id);
				$this->db->set('company_name', $this->company_name);
				$this->db->set('first_tel', $this->first_tel);
				$this->db->set('second_tel', $this->second_tel);
				$this->db->set('company_tel', $this->company_tel);
				$this->db->set('fax', $this->fax);
				$this->db->set('address', $this->address);
				$this->db->set('line', $this->line);
				$this->db->set('facebook', $this->facebook);
				$this->db->set('img_map', $this->img_map);
				
				$this->db->from('tbl_contact');
				$this->db->where('id', $this->id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tbl_contact');
				$this->db->where('id', $this->id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tbl_contact');
				$this->db->order_by('id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tbl_contact');
				$this->db->where('id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}