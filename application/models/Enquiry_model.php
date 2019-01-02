<?php
    /**
     * 
     */
    class Enquiry_model extends CI_Model
    {
         public function add_enquiry($enqu_data)
        {

            return $this->db->insert('tbl_enquiry',$enqu_data);
            
        }
        public function enquiry_list()
        {
            $user_id = $this->session->userdata('user_id');
            $query = $this->db
                                ->select("*")
                                ->from('tbl_enquiry')
                                ->get();
                                // print_r($this->db->last_query());exit();
            return $query->result();
        }
    }
?>