<?php

class Record_model extends CI_Model
{

    public function students_list($first_date,$second_date)
    {
        /*print_r($first_date);
        print_r($second_date);
        exit();*/
        $query = $this->db
                            ->select("*")
                            ->from('student')
                            ->where('registration_date >=',$first_date)
                            ->where('registration_date <=',$second_date)
                            ->join('commission as comm', 'comm.student_id = student.id')
                            ->join('course', 'course.course_id = student.course_id')
                            ->get();
            return $query->result();

            /*$query = $this->db
                            ->select("*")
                            ->from('student')
                            ->where_between('registration_date', $first_date, $second_date)
                            ->get();
                            echo "<pre>";
            print_r($query->result());
            exit();*/
    }

    public function students_list_franchise($first_date,$second_date,$c_id)
    {
        $query = $this->db
                            ->select("*")
                            ->from('student')
                            ->where('registration_date >=',$first_date)
                            ->where('registration_date <=',$second_date)
                            ->join('commission as comm', 'comm.student_id = student.id')
                            ->join('course', 'course.course_id = student.course_id')
                            ->where('franchise_id',$c_id)
                            ->get();
            return $query->result();
    }
}