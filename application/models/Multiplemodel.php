<?php
    /**
     * 
     */
    class Multiplemodel extends CI_Model
    {
        
        function insertgallery($gallerydata)
        {
            return $this->db->insert('gallery_desc',$gallerydata);
           
        
        }

         public function insert($data = array())
    {
        $insert = $this->db->insert_batch('new_gallery',$data);
        return $insert?true:false;
    }
    }
?>