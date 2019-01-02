<?php

class Admin_model extends CI_Model
{
	
	public function add_admin($array,$frand)
	{
		$abc= $this->db->insert('admin_details', $array);
		$id=$this->db->insert_id();
		$frand['Admin_id']=$id;
		$data= $this->db->insert('user', $frand);
		return $abc;

	}

	public function admin_list()
		{
			$user_id = $this->session->userdata('user_id');
			$query = $this->db
								->select("*")
								->from('admin_details')
								->get();
								// print_r($this->db->last_query());exit();
			return $query->result();
		}

		/*public function num_rows()
		{
			$user_id = $this->session->userdata('user_id');
			$query = $this->db
								->select(['id','fname','fcontact','femail'])
								->from('add_franchiese')
								->where('user_id', $user_id)
								->get();
			return $query->num_rows();
		}*/

		 public function get_admin($value)
        {
    
            $q = $this->db->select("*")
            		    ->where('Admin_id',$value)
                        ->get('admin_details');

                return $q->row();
        }
         public function get_admin_edit()
        {
    
            $q = $this->db->select("*")
                        ->get('admin_details');

                return $q->row();
        }

        public function insertadmin($Admin_id,$adminedit,$update)
        {

            $data = $this->db->where('Admin_id',$Admin_id)
                    ->update('admin_details', $adminedit);

                    $abc = $this->db->set('uname', $update['uname'])
                    				->set('password', $update['password'])
                    				->set('first_name', $update['first_name'])
                    				->set('last_name', $update['last_name'])
                    				->where('Admin_id',$update['Admin_id'])
                    				->update('user');
					return $data;          
        }
        public function delete_admin($value)
        {
            $abc = $this->db->where('Admin_id', $value)
            		->delete("admin_details");

            $this->db->where('Admin_id',$value)
            		->delete('user');

            return $abc;
        }

}
?>