<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller
{


	public function prelogin()
	{
		$this->load->view('frontend/login');
	}


	public function login()
	{	

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','username','required|alpha|trim');
		$this->form_validation->set_rules('password','password','required');

		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if ( $this->form_validation->run() )
		{//if validation passess

			$username = $this->input->post('username');
			$password= $this->input->post('password');

			$this->load->model('loginmodel');

			$login_id = $this->loginmodel->login_valid( $username, $password);
			if ( $login_id )
			{
					
				$this->session->set_userdata('user_id', $login_id);
				$this->session->set_userdata('fname', $username);
				redirect(base_url('Dashboard'));
			}
			else
			{
				$this->session->set_flashdata('login_failed','Invalid Username or Password.');
				redirect(base_url('Login'));
			}
		}
		else
		{
			redirect(base_url('Login'));
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		redirect(base_url('Login'));
	}

	
	public function add_student()
	{
		$this->load->view('frontend/add_student');

	}

	public function addstudent()
	{
		$this->load->library('form_validation');

			$this->form_validation->set_rules('firstname','firstname','required');
			$this->form_validation->set_rules('lastname','lastname','required');
			$this->form_validation->set_rules('email','email','required');

			$this->load->helper('date');
            

			if($this->form_validation->run())
			{
				$fname=$this->input->post("firstname");
                $lname=$this->input->post("lastname");
                $mail=$this->input->post("email");
                $class=$this->input->post("department");
                $date= date('Y-m-d H:i:s');
                $number=$this->input->post("number");
                $gender=$this->input->post("gender");
                $ffname=$this->input->post("ffirstname");
                $fmname=$this->input->post("fmiddlename");
                $flname=$this->input->post("flastname");
                $profession=$this->input->post("profession");
                $fnumber=$this->input->post("fmobileno");
                $femail=$this->input->post("femail");
                $ccactivity=$this->input->post("ccactivity");
                $address=$this->input->post("address");
                $course=$this->input->post("course");
                $coursetype=$this->input->post("coursetype");
                $paymenttype=$this->input->post("paymenttype");
                $ageproof=$this->input->post("ageproof");
                $idproof=$this->input->post("idproof");

                /*$uid=$this->input->post("user_id");*/

                $studdata = ['firstname'=>$fname,'lastname'=>$lname,'email'=>$mail,'user_id'=> $this->session->userdata('user_id'),'created_at'=>$date,'class'=>$class,'gender'=>$gender,'Mo_number'=>$number,'ffname'=>$ffname,'fmname'=>$fmname,'flname'=>$flname,'profession'=>$profession,'fmnumber'=>$fnumber,'femail'=>$femail,'ccactivity'=>$ccactivity,'address'=>$address,'course'=>$course,'coursetype'=>$coursetype,'paymenttype'=>$paymenttype,'ageproof'=>$ageproof,'idproof'=>$idproof];
 
                $this->load->model('studentmodel');

                if($this->studentmodel->insertarticle($studdata))
                    {
                        redirect(base_url('Dashboard'));
                    }
                    else
                    {

                        return redirect('admin/add_student');
                    }
			}
			else
			{

                $this->load->view('add_student');
			}

	}

	public function all_student()
	{
		$this->load->library('pagination');
		$config= [
					'base_url'			=> base_url('frontend/student_list'),
					'per_page'			=> 5,
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

		$student = $this->students->students_list( $config['per_page'], $this->uri->segment(3) );
		$this->load->view('frontend/student_list', ['student'=>$student]);
	}

	public function edit_student($value)
	{
		$this->load->model("studentmodel");
        $stud_row=$this->studentmodel->get_student($value);
        $this->load->view('frontend/edit_student',['stud_row'=>$stud_row]);
	}

	public function editstudent()
	{
		$this->load->library('form_validation');

			$this->form_validation->set_rules('firstname','firstname','required');
			$this->form_validation->set_rules('lastname','lastname','required');
			$this->form_validation->set_rules('email','email','required');

			$this->load->helper('date');
            

			if($this->form_validation->run())
			{
				$fname=$this->input->post("firstname");
                $lname=$this->input->post("lastname");
                $mail=$this->input->post("email");
                $class=$this->input->post("department");
                $date= date('Y-m-d H:i:s');
                $number=$this->input->post("number");
                $gender=$this->input->post("gender");
                $ffname=$this->input->post("ffirstname");
                $fmname=$this->input->post("fmiddlename");
                $flname=$this->input->post("flastname");
                $profession=$this->input->post("profession");
                $fnumber=$this->input->post("fmobileno");
                $femail=$this->input->post("femail");
                $ccactivity=$this->input->post("ccactivity");
                $address=$this->input->post("address");
                $course=$this->input->post("course");
                $coursetype=$this->input->post("coursetype");
                $paymenttype=$this->input->post("paymenttype");
                $ageproof=$this->input->post("ageproof");
                $idproof=$this->input->post("idproof");

                $id=$this->input->post("id");

                /*$uid=$this->input->post("user_id");*/

                $editstuddata = ['firstname'=>$fname,'lastname'=>$lname,'email'=>$mail,'user_id'=> $this->session->userdata('user_id'),'created_at'=>$date,'class'=>$class,'gender'=>$gender,'Mo_number'=>$number,'ffname'=>$ffname,'fmname'=>$fmname,'flname'=>$flname,'profession'=>$profession,'fmnumber'=>$fnumber,'femail'=>$femail,'ccactivity'=>$ccactivity,'address'=>$address,'course'=>$course,'coursetype'=>$coursetype,'paymenttype'=>$paymenttype,'ageproof'=>$ageproof,'idproof'=>$idproof];
 
                $this->load->model('studentmodel');



                if($this->studentmodel->editstudent($id,$editstuddata))
                    {
                        redirect(base_url('Dashboard'));
                    }
                    else
                    {

                        return redirect('admin/add_student');
                    }
			}
			else
			{

                $this->load->view('add_student');
			}

	}

	public function delete_student($id)
    {
        $this->load->model('studentmodel');                    
                         

        if($this->studentmodel->delete_stud($id))
        {
            redirect(base_url('Dashboard'));
        }
        else
        {
            echo "Delete Failed";   	
            redirect(base_url('Dashboard'));
        }
    }

    public function docs_multi()
	{
		print_r($this->input->post('s_id'));
		exit();
		$aid=$this->input->post('s_id');
		echo  $aid;
		exit();
		
		$this->load->model('studentmodel', 'students');
		

		$this->load->view('frontend/upload_files',['sid'=>$id]);			
	}

    public function documents()
	{
		$this->load->model('studentmodel');
		$sid=$this->input->post('id');
		

		$data = array();
        // If file upload form submitted
       	if($this->input->post('fileSubmit') && !empty($_FILES['files']['name']))
       	{
       		$data = array();
           	$filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++)
            {
	            $_FILES['file']['name']     = $_FILES['files']['name'][$i];
	            $_FILES['file']['type']     = $_FILES['files']['type'][$i];
	            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
	            $_FILES['file']['error']    = $_FILES['files']['error'][$i];
	            $_FILES['file']['size']     = $_FILES['files']['size'][$i];
	                
	            // File upload configuration
	            $uploadPath = 'uploads/files/';
	            $config['upload_path'] = $uploadPath;
	            $config['allowed_types'] = 'jpg|jpeg|png|gif';
	                
	            // Load and initialize upload library
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);
	                
	            // Upload file to server
	            if($this->upload->do_upload('file'))
	            {
	                // Uploaded file data
	                // print_r($aid);
	                $fileData = $this->upload->data();
	                $uploadData[$i]['file_name'] = $fileData['file_name'];
	                $uploadData[$i]['image_path'] = "uploads/files/".$fileData["raw_name"].$fileData['file_ext'];
	                $uploadData[$i]['id'] = $this->input->post('id');
	                    
	                redirect(base_url('Dashboard'));

                }
            }
            
	        if(!empty($uploadData))
	        {
	            // Insert files data into the database
	            $insert = $this->studentmodel->insert($uploadData);
	                
	            // Upload status message
	            $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
	            $this->session->set_flashdata('statusMsg',$statusMsg);
            }
        }
        
	    // Get files data from the database
	    $data['image_files'] = $this->studentmodel->getRows();
	        
	    // Pass the files data to view
	    /* $this->load->view('admin/upload_files', $data);*/
    }

	public function addfranchise()
	{
		$this->load->view('frontend/add_franchise');
	}























































































































	public function dashboard()
	{

		$this->load->library('pagination');
		$config= [
					'base_url'			=> base_url('frontend/dashboard'),
					'per_page'			=> 5,
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

		$student = $this->students->students_list( $config['per_page'], $this->uri->segment(3) );
		$this->load->view('frontend/dashboard', ['student'=>$student]);
	}

	public function index()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/index');
		$this->load->view('frontend/footer');
	}

	public function about()
	{  
		$this->load->view('frontend/header');
	    $this->load->view('frontend/about');
	    $this->load->view('frontend/footer');
	}

	public function franchise()
	{  
		$this->load->view('frontend/franchise');
		$this->load->view('frontend/footer');
	}

	public function gallery()
	{
		$this->load->view('frontend/gallery');
		$this->load->view('frontend/footer');
	}

	public function midbrain()
	{
		$this->load->view('frontend/midbrain');
		$this->load->view('frontend/footer');
	}

	public function news()
	{ 
		$this->load->view('frontend/news');
		$this->load->view('frontend/footer');
	}

	public function contact()
	{
		$this->load->view('frontend/contact');
		$this->load->view('frontend/footer');
	}

	public function privacy()
	{
		/*$this->load->view('frontend/header');*/  
		$this->load->view('frontend/privacy');
	}

	public function faq()
	{
		/*$this->load->view('frontend/header');*/  
		$this->load->view('frontend/faq');
	}

	public function __construct()
		{
			parent::__construct();
			
			$this->load->helper('form');
			$this->load->library('session');
			/*$this->load->model('file');*/
			$this->load->model('studentmodel', 'students');
						
 		}
}