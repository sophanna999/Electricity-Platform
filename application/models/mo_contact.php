<?php

		include('da_contact.php');

		class mo_contact extends Da_contact {

			public function get_contact() {
			$this->db->select('*');
			$this->db->from('gcp_contact');
			$query = $this->db->get()->result();
			return $query;
			}
		}
		