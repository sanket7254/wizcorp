<?php

	class global_setting extends CI_Model
	{		
		public function insertsetting($company)
		{
			return $this->db->insert('global_settings', $company);
		}

		public function global_list()
		{
			$query = $this->db->select("*")
								->from('global_settings')
								->get();
			return $query->result();
		}

		public function get_setting($value)
        {
    		$q = $this->db->select("*")
            		   		->where('id',$value)
                        	->get('global_settings');

                return $q->row();
        }

        public function get_setting_view()
        {
    		$q = $this->db->select("*")
                        	->get('global_settings');

                return $q->result();
        }

        public function updatesetting($company)
        {

            return $this->db->update('global_settings', $company);        
        }
	}
?>