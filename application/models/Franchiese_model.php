<?php

class Franchiese_model extends CI_Model
{
	
	public function add_franchiese($array,$fran)
	{
		$abc= $this->db->insert('add_franchiese', $array);
		$id=$this->db->insert_id();
		$code="WPL".'/'.date('Y/m').'/'.$id;
		if($abc)
		{
			$uni= $this->db->set('franchiese_code', $code)
							->where('id',$id)
							->update('add_franchiese');
			if($uni)
			{
				$fran['fran_id']=$id;
				$data= $this->db->insert('user', $fran);
			}
		}		
		return true;

	}
	public function update_retrive($id)
		{
			$this->db->where('id',$id)
						->from('add_franchiese');
			$q = $this->db->get();
			return $q->result();
		}

	public function franchiese_list()
		{
			$user_id = $this->session->userdata('user_id');
			$query = $this->db
								->select("*")
								->from('add_franchiese')
								->limit('5')
								->get();
								//print_r($this->db->last_query());exit();
			return $query->result();
		}
		public function page_franchiese_list()
		{
			$user_id = $this->session->userdata('user_id');
			$query = $this->db
								->select("*")
								->from('add_franchiese')
								->get();
								//print_r($this->db->last_query());exit();
			return $query->result();
		}
		public function num_rows()
		{
			$user_id = $this->session->userdata('user_id');
			$query = $this->db
								->select(['id','fname','fcontact','femail'])
								->from('add_franchiese')
								->where('user_id', $user_id)
								->get();
			return $query->num_rows();

		}
		 public function get_franchiese($value)
        {
    
            $q = $this->db->select("*")
            		    ->where('id',$value)
                        ->get('add_franchiese');

                return $q->row();
        }
         public function get_franchiese_edit()
        {
    
            $q = $this->db->select("*")
                        ->get('add_franchiese');

                return $q->row();
        }
         public function insertfranchiese($id,$editfrandata,$fran)
        {
            $data = $this->db->where('id',$id)
                    		->update('add_franchiese', $editfrandata);

            $abc = $this->db->set('uname', $fran['uname'])
                    		->set('password', $fran['password'])
                    		->set('first_name', $fran['first_name'])
                    		->set('last_name', $fran['last_name'])
                    		->where('fran_id',$fran['fran_id'])
                    		->update('user');

            return $data;
                    
        }
        public function delete_franch($value)
        {
            $fran=$this->db->where('id', $value)
            			    ->delete("add_franchiese");

            $user_fran=$this->db->where('fran_id', $value)
            			    ->delete("user");
            
        }
        public function get_code($value)
        {
    
            $q = $this->db->select("*")
            		    ->where('id',$value)
                        ->get('add_franchiese');

                return $q->row();
        }

        public function get_fran_student($value)
        {
    
            $q = $this->db->select("*")
            		    ->where('franchise_code',$value)
                        ->get('student');

                return $q->result();
        }

        public function franchise_code_valid($francode)
		{
			/*print_r($francode);
                    exit();*/
			$q = $this->db->where('franchiese_code',$francode)
							->get('add_franchiese');
			if ( $q->num_rows() )
			{
				return true;
			}
			else
			{
				return FALSE;				
			}
		}

}
?>