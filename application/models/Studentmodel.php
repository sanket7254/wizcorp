<?php

	class Studentmodel extends CI_Model
	{		
		public function insertstudent($studdata,$uid,$course_commission,$payment)
		{
			$a = $this->db->insert('student', $studdata);
			//Reterive last inserted id
			$sid = $this->db->insert_id();

			//Store data in array for commission table
			$comm_data=['student_id'=>$sid,'franchise_id'=>$uid,'commission'=>$course_commission];

			//Fire query to insert data in commission
			$abc = $this->db->insert('commission', $comm_data);

			//Store data in array for payments table
			$payment['student_id']=$sid;

			//Fire query to insert data in payments
			$pay_data=$this->db->insert('payments', $payment);

			//Return an array to a function in controller
			return $a;
		}

		public function update_retrive($id)
		{
			$this->db->where('id',$id)
						->join('course', 'course.course_id = student.course_id')
						->from('student');
			$q = $this->db->get();
			
			return $q->result(); //this will get all the result inside the database
		}

		public function admin_calculate_commission()
		{
			$this->db->select_sum('commission');
			$total = $this->db->get('commission')->row();
			return $total->commission;
		}

		public function calculate_commission()
		{
			$user_id = $this->session->userdata('user_id');
			$this->db->select_sum('commission')
						->where('franchise_id', $user_id);
			$total = $this->db->get('commission')->row();
			return $total->commission;
		}

		public function students_list()
		{
			$user_id = $this->session->userdata('user_id');
			$query = $this->db
								->select("*")
								->from('student')
								->where('user_id', $user_id)
								->get();
			return $query->result();
		}

		public function all_students_list( $limit, $offset )
		{
			

			$query  =   $this->db
                				->select("*")
								->from('student')
								->get();
            /*echo "<pre>";
            print_r($this->db->last_query());
            exit();*/

            return $query->result();
		}

		public function fran_students_list(  )
		{
			$user_id = $this->session->userdata('user_id');
			$query = $this->db
								->select("*")
								->from('student')
								->where('user_id', $user_id)
								->get();
			return $query->result();
		}

		/*public function fran_students_list_view($value)
		{;
			$query = $this->db
								->select("*")
								->from('student')
								->where('user_id', $user_id)
								->get();
			return $query->result();
		}*/

		public function find($id)
		{
			$q = $this->db->from('student')
						->where(['id' => $id])						
						->get();

			return $q->num_rows();
		}

		public function num_rows()
		{
			$user_id = $this->session->userdata('user_id');
			$query = $this->db
								->select(['firstname','lastname','registration_date'])
								->from('student')
								->where('user_id', $user_id)
								->get();
			return $query->num_rows();
		}

		public function num_students()
		{
			$query = $this->db->query('SELECT * FROM student');
			return $query->num_rows();
		}

		public function get_student($value)
        {
            $q=$this->db->select("*")
                        ->where('id',$value)
                        ->join('course', 'course.course_id = student.course_id')
                        ->get('student');

            return $q->row();
        }

        public function get_student_abc()
        {
            $q=$this->db->select("*")
                        ->get('student');

            return $q->row();
        }

        public function get_student_edit()
        {
            $q=$this->db->select("*")
                        ->get('student');

            return $q->row();
        }

        public function editstudent($id,$editstuddata)
        {
            return $this->db->where('id',$id)
                    ->update('student', $editstuddata);
        }

        public function delete_stud($value)
        {
            $abc = $this->db->where('id', $value)
            			    ->delete('student');

            $this->db->where('student_id',$value)
            			->delete('commission');

            return $abc;
        }

        /*public function getRows($id = " ")
		{
	        $this->db->select('img_id,file_name');
	        $this->db->from('image_files');
	        if($id)
	        {
	            $this->db->where('id',$id);
	            $query = $this->db->get();
	            $result = $query->row_array();
	        }
	        else
	        {
	            $query = $this->db->get();
	            $result = $query->result_array();
	        }
	        return !empty($result)?$result:false;
    	}

        public function get_multi_images($value)
        {     
                $q = $this->db->where('id', $value)
                            ->get("image_files");
				return $q->result();
        }

        public function insert($data = array())
    	{
    		// print_r($data);
    		// exit();
	        $insert = $this->db->insert_batch('image_files',$data);
	        return $insert?true:false;
    	}*/
	}
?>