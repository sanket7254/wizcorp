<?php

class FranchiseController extends CI_Controller
{
	public function fran_dashboard()
	{
		$this->load->library('pagination');
		$config= [
					'base_url'			=> base_url('frontend/franchise_dashboard'),
					'per_page'			=> 3,
					'total_rows'		=> $this->students->num_rows(),
					'full_tag_open'		=>"<ul class='pagination'>",
					'full_tag_close'	=>"</ul>",
					'first_tag_open'	=>'<li>',
					'first_tag_close'	=>'</li>',
					'last_tag_open'		=>'<li>',
					'last_tag_close'	=>'</li>',
					'next_tag_open'		=>'<li>',
					'next_tag_close'	=>'</li>',
					'prev_tag_open'		=>'<li>',
					'prev_tag_close'	=>'</li>',
					'num_tag_open'		=>'<li>',
					'num_tag_close'		=>'</li>',
					'cur_tag_open'		=>"<li class='active'><a>",
					'cur_tag_close'		=>'</a></li>',
				];
		$this->pagination->initialize($config);

		$comm = $this->students->calculate_commission();
		$student = $this->students->fran_students_list( $config['per_page'], $this->uri->segment(3) );
		$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
		$this->load->view('frontend/franchise_dashboard', ['student'=>$student,'comm'=>$comm,'user_row'=>$user_row]);
	}

	
	public function franchise_all_students()
	{
		$this->load->library('pagination');
		$config= [
					'base_url'			=> base_url('frontend/student_list'),
					'per_page'			=> 10,
					'total_rows'		=> $this->students->num_students(),
					'full_tag_open'		=>"<ul class='pagination'>",
					'full_tag_close'	=>"</ul>",
					'first_tag_open'	=>'<li>',
					'first_tag_close'	=>'</li>',
					'last_tag_open'		=>'<li>',
					'last_tag_close'	=>'</li>',
					'next_tag_open'		=>'<li>',
					'next_tag_close'	=>'</li>',
					'prev_tag_open'		=>'<li>',
					'prev_tag_close'	=>'</li>',
					'num_tag_open'		=>'<li>',
					'num_tag_close'		=>'</li>',
					'cur_tag_open'		=>"<li class='active'><a>",
					'cur_tag_close'		=>'</a></li>',
				];
		$this->pagination->initialize($config);
		$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
		$student = $this->students->fran_students_list( $config['per_page'], $this->uri->segment(3) );
		$this->load->view('frontend/franchise_all_students', ['student'=>$student,'user_row'=>$user_row]);
	}

	public function __construct()
		{
			parent::__construct();
			
			$this->load->helper('form');
			$this->load->library('session');
			/*$this->load->model('file');*/
			$this->load->model('loginmodel', 'mlogin');
			$this->load->model('studentmodel', 'students');
						
 		}

 		public function get_code($value)
        {    
            $q = $this->db->select("*")
            		    ->where('id',$value)
                        ->get('add_franchiese');

                return $q->row();
        }

}

?>