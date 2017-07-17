<?php

		include('da_news.php');

		class Mo_news extends Da_news {
			public function gey_by_news(){
				$this->db->select('*');
				$this->db->from('gcp_news');
				$this->db->order_by("news_id", "desc");
    			$this->db->limit(3,0);
				$query = $this->db->get()->result();
				return $query;
			}

			public function get_first_news(){
				$this->db->select('*');
				$this->db->from('gcp_news');
				$this->db->order_by("news_id","desc");
				$this->db->limit(1,0);
				$query = $this->db->get()->result();
				return $query;
			}
			public function record_count(){
				$this->db->select('*');
				$this->db->from('gcp_news');
				$query = $this->db->get()->num_rows();
				return $query;
			}
			public function paditionpage($limit,$offset){
				$this->db->select('*');
				$this->db->from('gcp_news');
				$this->db->order_by("news_id","desc");
				$this->db->limit($limit,$offset);
				$query = $this->db->get()->result();
				return $query;
			}

		}
		