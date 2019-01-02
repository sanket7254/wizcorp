<?php

class News_model extends CI_Model
{
	
	public function add_news($newsdata)
	{

		 return $this->db->insert('news_events', $newsdata);

	}
	public function news_list()
	{
	    $user_id = $this->session->userdata('user_id');
	    $query = $this->db
								->select("*")
								->from('news_events')
								->where('user_id', $user_id)
								->get();
								//print_r($this->db->last_query());exit();
			return $query->result();
	}
	public function fontend_news_list()
	{
		 $query = $this->db
								->select("*")
								->from('news_events')
								->get();
								//print_r($this->db->last_query());exit();
			return $query->result();
	}
	public function update_retrive($news_id)
		{
			$this->db->where('news_id',$news_id)
						->from('news_events');
			$q = $this->db->get();
			return $q->result();
		}
	 public function get_news($value)
        {
    
            $q = $this->db->select("*")
            		    ->where('news_id',$value)
                        ->get('news_events');
                        //print_r($this->db->last_query());exit();
                return $q->row();
        }

        public function get_news_edit()
        {
    
            $q = $this->db->select("*")
                        ->get('news_events');
                        //print_r($this->db->last_query());exit();
                return $q->row();
        }
         public function update_news($news_id,$editdata)
        {

          return $this->db->where('news_id',$news_id)
                    ->update('news_events', $editdata);
                      
                   
        }

         public function delete_news($value)
        {
            $abc = $this->db->where('news_id', $value)
            		->delete("news_events");

            return $abc;
        }
}
?>