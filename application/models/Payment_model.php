<?php

	class Payment_model extends CI_Model
	{		
		public function insertpayment($payment)
		{
			//Fire query to insert data in payments
			$a=$pay_data=$this->db->insert('payments', $payment);

			//Return an array to a function in controller
			return $a;
		}

		public function get_pay_details($value)
        {
            $q=$this->db->select("*")
                        ->where('student_id',$value)
                        ->order_by('id', 'DESC')
                        ->get('payments') ;

            return $q->row();
        }

        public function get_pay_details_abc()
        {
            $q=$this->db->select("*")  
                        ->group_by("student_id")
                        ->get('payments') ;
// print_r($this->db->last_query());
// exit();
            return $q->row();
        }
	}
?>