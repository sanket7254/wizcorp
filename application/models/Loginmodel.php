<?php

class Loginmodel extends CI_Model
{
	public function login_valid( $username, $password)
	{
		$q = $this->db->where(['uname'=>$username,'password'=>$password])
						->get('user');
			
// print_r($this->db->last_query());
// exit();
		if ( $q->num_rows() )
		{
			return $q->row()->id;				
		}
		else
		{
			return FALSE;				
		}
	}

	public function num_rows()
	{
		$query = $this->db->query('SELECT * FROM user');
		return $query->num_rows();
	}

	public function get_user($value)
    {
        $q=$this->db->select("*")
                    ->where('id',$value)
                    ->get('user');

        return $q->row();
            // print_r($q);
        }
}