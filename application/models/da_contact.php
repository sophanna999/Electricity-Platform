<?php
			class Da_contact extends MY_Model { 
			public $contact_id;
			public $contact_head;
			public $contact_phone;
			public $contact_phone2;
			public $contact_tal;
			public $contact_fax;
			public $contact_address;
			public $contact_linkline;
			public $contact_linkfacebook;
			public $contact_location;
			
			public function inserts() {
				$this->db->set('contact_id', $this->contact_id);
				$this->db->set('contact_head', $this->contact_head);
				$this->db->set('contact_phone', $this->contact_phone);
				$this->db->set('contact_phone2', $this->contact_phone2);
				$this->db->set('contact_tal', $this->contact_tal);
				$this->db->set('contact_fax', $this->contact_fax);
				$this->db->set('contact_address', $this->contact_address);
				$this->db->set('contact_linkline', $this->contact_linkline);
				$this->db->set('contact_linkfacebook', $this->contact_linkfacebook);
				$this->db->set('contact_location', $this->contact_location);
				
				$this->db->from('gcp_contact');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('gcp_contact');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('gcp_contact', $data, $key);
			}
			public function updates() {
				
			$this->db->set('contact_id', $this->contact_id);
				$this->db->set('contact_head', $this->contact_head);
				$this->db->set('contact_phone', $this->contact_phone);
				$this->db->set('contact_phone2', $this->contact_phone2);
				$this->db->set('contact_tal', $this->contact_tal);
				$this->db->set('contact_fax', $this->contact_fax);
				$this->db->set('contact_address', $this->contact_address);
				$this->db->set('contact_linkline', $this->contact_linkline);
				$this->db->set('contact_linkfacebook', $this->contact_linkfacebook);
				$this->db->set('contact_location', $this->contact_location);
				
				$this->db->from('gcp_contact');
				$this->db->where('contact_id', $this->contact_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('gcp_contact');
				$this->db->where('contact_id', $this->contact_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('gcp_contact');
				$this->db->order_by('contact_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('gcp_contact');
				$this->db->where('contact_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}