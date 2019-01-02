<?php
class Excel_import_model extends CI_Model
{
 function select()
 {
  $this->db->order_by('course_id', 'DESC');
  $query = $this->db->get('course');
  return $query;
 }

 function insert($data)
 {
  $this->db->insert_batch('course', $data);
 }
}