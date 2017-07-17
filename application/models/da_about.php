<?php
class Da_about extends MY_Model { 
	public $aboutat_id;
	public $aboutat_logo;
	public $aboutat_nameth;
	public $aboutat_nameen;
	public $aboutat_detailth;
	
	public function inserts() {
		$this->db->set('aboutat_id', $this->aboutat_id);
		$this->db->set('aboutat_logo', $this->aboutat_logo);
		$this->db->set('aboutat_nameth', $this->aboutat_nameth);
		$this->db->set('aboutat_nameen', $this->aboutat_nameen);
		$this->db->set('aboutat_detailth', $this->aboutat_detailth);
		
		$this->db->from('gcp_about');
		return $this->db->insert();
	}
	
	public function inserts_array($data=null) {
		$this->db->set($data);
		$this->db->from('gcp_about');
		return $this->db->insert();
	}
	public function updates_array($data=null,$key=null) {
		return $this->db->update('gcp_about', $data, $key);
	}
	public function updates() {
		
	$this->db->set('aboutat_id', $this->aboutat_id);
		$this->db->set('aboutat_logo', $this->aboutat_logo);
		$this->db->set('aboutat_nameth', $this->aboutat_nameth);
		$this->db->set('aboutat_nameen', $this->aboutat_nameen);
		$this->db->set('aboutat_detailth', $this->aboutat_detailth);
		
		$this->db->from('gcp_about');
		$this->db->where('aboutat_id', $this->aboutat_id);
		return $this->db->update();
	}

	public function deletes() {
		$this->db->from('gcp_about');
		$this->db->where('aboutat_id', $this->aboutat_id);
		$this->db->delete();
	}

	public function get_all() {
		$this->db->from('gcp_about');
		$this->db->order_by('aboutat_id', 'ASC');
		return $this->db->get()->result();
	}

	public function get_by_key($key) {
		$this->db->select('*');
		$this->db->from('gcp_about');
		$this->db->where('aboutat_id', $key);
		$query = $this->db->get()->result();
		return $query;
	}

}