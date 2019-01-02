 
<?php

class Add_coursemodel extends CI_Model
{
	public function add_course($array )
	{
		return $this->db->insert('course', $array);

	}

	public function course_list()
	{
		$user_id = $this->session->userdata('user_id');
		$query = $this->db->select("*")
							->from('course')
							->get();
		return $query->result();
	}
     public function ourcourse_list()
        {

           $query = $this->db
                                ->select("*")
                                ->from('course')
                                ->get();
                                //print_r($this->db->last_query());exit();
            return $query->result();

        }


	public function get_course($value)
   	{
        $q = $this->db->select("*")
            	    ->where('course_id',$value)
                    ->get('course');                       
        return $q->row();        
    }

    public function insertcourse($course_id,$editcourses)
    {
         return $this->db->where('course_id',$course_id)
           			     ->update('course', $editcourses);                    
    }

    public function delete_courses($value)
    {
        return  $this->db->where('course_id', $value)
            			 ->delete("course");
    }

    public function course_frontend_list()
        {

           $query = $this->db
                                ->select("*")
                                ->from('course')
                                 ->limit('5')
                                ->get();
                                //print_r($this->db->last_query());exit();
            return $query->result();

        }

}
