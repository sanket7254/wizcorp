<?php

class Gallerymodel extends CI_Model
    {
		public function get_recent_sr($value)
		{
			$q=$this->db->select_max('title_id')
			            ->where('user_id',$value)
			           	->get('gallery_desc');
			    // print_r($this->db->last_query());exit();
			return $q->row();
		}

		public function update_gallery($id , Array $data)
		{
			return $this->db
					    ->where('title_id',$id)
					    ->update('gallery_desc',$data );

		}

		public function all_gall_list()
		{
			$user_id = $this->session->userdata('user_id');
			$query = $this->db
						->select("*")
						->from('gallery_desc')
						->where('user_id', $user_id)
						->get();
			return $query->result();
		}
		
		public function all_img_list($value)
		{
			$q= $this->db
					->select("*")
					->where('title_id',$value)
					->get('new_gallery');
			return $q->result();
		}

		public function frotend_gall_list()
		{
			$q=$this->db->select('*')
    				 ->from('gallery_desc')
    				 ->join('new_gallery', 'new_gallery.title_id = gallery_desc.title_id') 
    				 ->group_by('new_gallery.title_id')
    				 ->get();
			 return $q->result();
		}

		public function get_gallery($title_id)
        {
    
           $this->db->where('title_id',$title_id)
						->from('new_gallery');
			$q = $this->db->get();
			return $q->result();
        }
			 
		public function num_gall()
		{
			$query = $this->db->query('SELECT * FROM gallery_desc');
			return $query->num_rows();
		}
		
		public function get_multi_images($value)
        {
        	$q = $this->db->select("*")
                		->where('title_id', $value)
                        ->get("new_gallery");
			return $q->result();
        }
        public function get_multi_images_edit($value)
        {
        	$q = $this->db->select("*")
                        ->get("new_gallery");
			return $q->result();
        }

        public function get_img_des($value)
        {
    
            $q = $this->db->select(['title_id','img_title','img_desc','created_at'])
                        ->get('gallery_desc');
			return $q->row();
        }
        public function get_img_des_edit()
        {
    
            $q = $this->db->select(['title_id','img_title','img_desc','created_at'])
                        ->get('gallery_desc');
			return $q->row();
        }

        public function get_image($img_id)
        {
            $q = $this->db->where('img_id', $img_id)
                            ->get("new_gallery");
	        return $q->row();
        }

        public function get_image_name($img_id)
        {
            $q = $this->db->select("*")
            				->where('img_id', $img_id)
                            ->get("new_gallery");
			return $q->row();
        }

        public function del_image($img_id)
        {
          
            $q=$this->db->where('img_id', $img_id)
                     ->delete('new_gallery');
            return $q;                    
        }

        public function delete_gallery_all($value)
		{
			$this->db->where('title_id', $value)
                    ->delete("new_gallery");
			
			return  $this->db->where('title_id', $value)
                            ->delete("gallery_desc");
		}
         public function insert($data = array())
    	{
	        $insert = $this->db->insert_batch('new_gallery',$data);
	        return $insert?true:false;
    	}



 }
 ?>