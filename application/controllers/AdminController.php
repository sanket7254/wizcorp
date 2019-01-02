<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    public function franchiese_view($value)
    {
        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
        $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
        $this->load->model('franchiese_model');
        $fran_row=$this->franchiese_model->get_franchiese($value);
        $code=$fran_row->franchiese_code;
        $student=$this->franchiese_model->get_fran_student($code);
        $this->load->view('frontend/franchiese_view',['student'=>$student,'fran_row'=>$fran_row]);
        $this->load->view('frontend/backend_footer');
    }

    public function myprofile()
    {
        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
        if(!$user_row->fran_id == NULL)
        {
            $this->load->model('franchiese_model');
            $f_id=$user_row->fran_id;
            $fran_id=$this->franchiese_model->get_code($f_id);
            $code=$fran_id->id;
            $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
            $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
            $fran_row=$this->franchiese_model->get_franchiese($code);
            $this->load->view('frontend/Myprofile',['fran_row'=>$fran_row]);
            $this->load->view('frontend/backend_footer');
        }
        else
        {
            $this->load->model('Admin_model');
            $a_id=$user_row->Admin_id;
            $admin_id=$this->Admin_model->get_admin($a_id);
            $code=$admin_id->Admin_id;
            $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
            $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
            $addd_row=$this->Admin_model->get_admin($code);
            $this->load->view('frontend/Myprofile',['addd_row'=>$addd_row]);
            $this->load->view('frontend/backend_footer');
        }
        
    }

    public function update_profile()
    {
        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
        if($user_row->divide == "admin")
        {
            $config=[
                    'upload_path'=>'uploads/admin/',
                    'allowed_types'=>'jpg|gif|png|jpeg',
                ];
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->load->library('form_validation');

            $this->form_validation->set_rules('Admin_fname','admin fname','required');
            $this->form_validation->set_rules('Admin_lname','admin lname','required');
            $this->form_validation->set_rules('Admin_email','admin email','required');
            $this->form_validation->set_rules('Admin_cont','admin contact','required');
            $this->form_validation->set_rules('Admin_address','admin address','required');
             $this->form_validation->set_rules('uname','username','required');
             $this->form_validation->set_rules('password','password','required');
            
            $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
            
            if($this->form_validation->run())
            {
                
                $fname=$this->input->post("Admin_fname");
                $lname=$this->input->post("Admin_lname");
                $mail=$this->input->post("Admin_email");
                $acon=$this->input->post("Admin_cont");
                $Admin_address=$this->input->post("Admin_address");
                $divide=$this->input->post("divide");
                $auname=$this->input->post("uname");
                $apass=$this->input->post("password");
                $a_id=$this->input->post('Admin_id');
                if($this->upload->do_upload('userfile'))
                {
                    $old_image_path=$this->input->post("admin_img");
                    
                    unlink("uploads/admin/".$old_image_path);
                    $fdata = $this->upload->data();
                    $image_path=$fdata["raw_name"].$fdata['file_ext'];
                    
                    $adminedit=['Admin_id'=>$a_id,'Admin_fname'=>$fname,'Admin_lname'=>$lname,'Admin_email'=>$mail,'Admin_cont'=>$acon,'Admin_address'=>$Admin_address,'divide'=>$divide,'uname'=>$auname,'password'=>$apass,'admin_img'=>$image_path,'user_id'=>$this->session->userdata('user_id')];  

                    $update=['Admin_id'=>$a_id,'uname'=>$auname,'password'=>$apass,'first_name'=>$fname,'last_name'=>$lname];
     
                    $this->load->model('admin_model');


                    if($this->admin_model->insertadmin($a_id,$adminedit,$update))
                    {
                        $error="Edit Profile Successful.";
                        $this->session->set_flashdata('error',$error);
                        $this->session->set_flashdata('status','btn-success');
                        redirect(base_url('myprofile'));
                    }
                    else
                    {
                        redirect(base_url('myprofile'));                         
                    }
                }
                else
                {
                    $old_image_path=$this->input->post("admin_img");
                    $adminedit=['Admin_id'=>$a_id,'Admin_fname'=>$fname,'Admin_lname'=>$lname,'Admin_email'=>$mail,'Admin_cont'=>$acon,'Admin_address'=>$Admin_address,'divide'=>$divide,'uname'=>$auname,'password'=>$apass,'admin_img'=>$old_image_path,'user_id'=>$this->session->userdata('user_id')]; 

                    $update=['Admin_id'=>$a_id,'uname'=>$auname,'password'=>$apass,'first_name'=>$fname,'last_name'=>$lname];
     
                    $this->load->model('admin_model');

                    if($this->admin_model->insertadmin($a_id,$adminedit,$update))
                    {
                        $error="Edit Profile Successful.";
                        $this->session->set_flashdata('error',$error);
                        $this->session->set_flashdata('status','btn-success');
                        redirect(base_url('myprofile'));
                    }
                    else
                    {
                        redirect(base_url('myprofile'));
                    }
                }
            }
        }
        else
        {
            $config=[
                    'upload_path'=>'uploads/franchise/',
                    'allowed_types'=>'jpg|gif|png|jpeg',
                ];
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->load->library('form_validation');

            $this->form_validation->set_rules('fname','first name','required');
            $this->form_validation->set_rules('fcontact','franchise contact number','required');
            $this->form_validation->set_rules('femail','franchise email address','required');
            $this->form_validation->set_rules('contact_per','contact person name','required');
            $this->form_validation->set_rules('per_con','person contact','required');
            $this->form_validation->set_rules('per_email','contact person email address','required');
            $this->form_validation->set_rules('address','franchise address','required');
            $this->form_validation->set_rules('locality','franchise locality','required');
            $this->form_validation->set_rules('uname','franchise username','required');
            $this->form_validation->set_rules('password','franchise password','required');
            
            $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");            
            if($this->form_validation->run())
            {
                $fname=$this->input->post('fname');
                $fcon=$this->input->post('fcontact');
                $femail=$this->input->post('femail');
                $con_per=$this->input->post('contact_per');
                $per_con=$this->input->post('per_con');
                $per_email=$this->input->post('per_email');
                $fadd=$this->input->post('address');
                $uid=$this->input->post('uname');
                $pass=$this->input->post('password');
                $id=$this->input->post('id');
                $locality=$this->input->post('locality');
                
                if($this->upload->do_upload('userfile'))
                {
                    $old_image_path=$this->input->post("fran_img");
                    unlink("uploads/franchise/".$old_image_path);
                    $fdata = $this->upload->data();
                    $image_path=$fdata["raw_name"].$fdata['file_ext'];
                    
                    $editfrandata=['id'=>$id,'fname'=>$fname,'fcontact'=>$fcon,'femail'=>$femail,'contact_per'=>$con_per,'per_con'=>$per_con,'per_email'=>$per_email,'address'=>$fadd,'uname'=>$uid,'password'=>$pass,'user_id'=>$this->session->userdata('user_id'),'fran_img'=>$image_path,'locality'=>$locality,'fran_img'=>$image_path];

                   
                    $fran=['fran_id'=>$id,'uname'=>$uid,'password'=>$pass,'img'=>$image_path,'first_name'=>$fname];
              
                    $this->load->model('franchiese_model');

                     if($this->franchiese_model->insertfranchiese($id,$editfrandata,$fran))
                    {
                        $error="Edit Profile Successful.";
                        $this->session->set_flashdata('error',$error);
                        $this->session->set_flashdata('status','btn-success');
                        redirect(base_url('myprofile'));
                    }
                    else
                    {
                        redirect(base_url('myprofile'));
                    }
                }
                else
                {
                    $old_image_path="".$this->input->post("fran_img");
                    $editfrandata=['id'=>$id,'fname'=>$fname,'fcontact'=>$fcon,'femail'=>$femail,'contact_per'=>$con_per,'per_con'=>$per_con,'per_email'=>$per_email,'address'=>$fadd,'uname'=>$uid,'password'=>$pass,'user_id'=>$this->session->userdata('user_id'),'fran_img'=>$old_image_path,'locality'=>$locality];

                    $fran=['fran_id'=>$id,'uname'=>$uid,'password'=>$pass,'img'=>$old_image_path,'first_name'=>$fname];
                     $this->load->model('franchiese_model');

                     if($this->franchiese_model->insertfranchiese($id,$editfrandata,$fran))
                    {
                        $error="Edit Profile Successful.";
                        $this->session->set_flashdata('error',$error);
                        $this->session->set_flashdata('status','btn-success');
                        redirect(base_url('myprofile'));
                    }
                    else
                    {
                        redirect(base_url('myprofile'));                     
                    }
                }
            }
        }
    }

	public function printpage($id)
	{
		$this->load->model("studentmodel");
		$d=$this->studentmodel->update_retrive($id);
		$data['posts'] = $d;
		$this->load->view('frontend/printpage',$data);

	}
     public function enquiries()
    {
        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
        $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
        $this->load->model('enquiry_model');
        $enquiry = $this->enquiry_model->enquiry_list();
        $this->load->view('frontend/enquiries', ['enquiry'=>$enquiry]);
        $this->load->view('frontend/backend_footer');
    }
	public function certificate()
	{
         $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
            if (!$user_row->fran_id == NULL) 
            {

                $this->load->model('franchiese_model');
                 $f_id=$user_row->fran_id;
                 $fran_id=$this->franchiese_model->get_code($f_id);
                 

                
               
            }
		$this->load->view('frontend/certificate',['fran_id'=>$fran_id]);
	}
	public function welcomepage()
	{
        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
            if (!$user_row->fran_id == NULL) {

                $this->load->model('franchiese_model');
                 $f_id=$user_row->fran_id;
                 $fran_id=$this->franchiese_model->get_code($f_id);
                 $code=$fran_id->contact_per;

                
               
            }
		$this->load->view('frontend/welcomepage',['code'=>$code]);
	}
	public function idcard($id)
    {
        $this->load->model('franchiese_model');
        $franchiese = $this->franchiese_model->update_retrive($id);
        $data['post']=$franchiese;
        $this->load->view('frontend/idcard',$data);
    }
	public function viewprofile($value)
	{
		$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
		$this->load->view('frontend/backend_header',['user_row'=>$user_row]);
		$this->load->model("studentmodel");
		$stud_row=$this->studentmodel->get_student($value);
		$this->load->view('frontend/view2',['stud_row'=>$stud_row]);
		$this->load->view('frontend/backend_footer');
	}

	//--------------------------------Add Student-----------------------------------------//

	public function add_student()
	{
		$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
		$this->load->view('frontend/backend_header',['user_row'=>$user_row]);
		//$this->load->view('frontend/add_student');
		$this->load->model('add_coursemodel');
	    $data['courses'] = $this->add_coursemodel->course_list();
	    $this->load->view('frontend/add_student',$data);
	    $this->load->view('frontend/backend_footer');
	}

	public function addstudent()
	{

		$config=[
               		'upload_path'=>'./uploads/',
                	'allowed_types'=>'jpg|gif|png|jpeg',
                ];
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            $this->load->helper('form');
			$this->load->library('form_validation');

            $this->load->helper('date');

            $this->form_validation->set_rules('firstname','student first name','required');
            $this->form_validation->set_rules('middlename','student middle name','required');
            $this->form_validation->set_rules('lastname','student last name','required');
            $this->form_validation->set_rules('date_of_birth','student date of birth','required');
            $this->form_validation->set_rules('gender','gender','required');
            $this->form_validation->set_rules('registration_date','student registration date','required');
            $this->form_validation->set_rules('ccactivity','student ccactivity','required');
            $this->form_validation->set_rules('grade','student grade','required');
            $this->form_validation->set_rules('school','student school','required');
            $this->form_validation->set_rules('location','location','required');
            $this->form_validation->set_rules('ffirstname','ffirstname','required');
            $this->form_validation->set_rules('fmiddlename','father middle name','required');
            $this->form_validation->set_rules('flastname','father last name','required');
            $this->form_validation->set_rules('profession','father profession','required');
            $this->form_validation->set_rules('address','address','required');
            $this->form_validation->set_rules('fmobileno','father mobile number','required');
            $this->form_validation->set_rules('femail','father email','required');
            $this->form_validation->set_rules('address','address','required');
            $this->form_validation->set_rules('course','course','required');
            $this->form_validation->set_rules('feedetails','feedetails','required');
            $this->form_validation->set_rules('batch_no','batch no','required');
            //$this->form_validation->set_rules('paidfee','amount to pay','required');
            //$this->form_validation->set_rules('paymenttype','paymenttype','required');
            /*if($this->input->post("paymenttype") == "netbanking")
            {
                $this->form_validation->set_rules('netbanking','netbanking transaction id','required');
            }
            else
            {
                $this->form_validation->set_rules('cheque','cheaque number','required');
            }*/            
            $this->form_validation->set_rules('ageproof','ageproof','required');
            $this->form_validation->set_rules('ageproofno','ageproofno','required');
            $this->form_validation->set_rules('idproof','idproof','required');
            $this->form_validation->set_rules('idproofno','idproofno','required');


            $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
			if($this->form_validation->run() && $this->upload->do_upload('userfile'))
			{
                $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
                if(!$user_row->fran_id == NULL)
                {
                    $this->load->model('franchiese_model');
                    $f_id=$user_row->fran_id;
                    $fran_id=$this->franchiese_model->get_code($f_id);
                    $code=$fran_id->franchiese_code;
                }
				//Student details
				$fname=$this->input->post("firstname");
				$mname=$this->input->post("middlename");
                $lname=$this->input->post("lastname");
                $old_date= $this->input->post("date_of_birth");
                $gender=$this->input->post("gender");
                $old_date_timestamp = strtotime($old_date);
                $dob = date('Y-m-d', $old_date_timestamp);

                $new_date= $this->input->post("registration_date");
                $new_date_timestamp = strtotime($new_date);
                $date = date('Y-m-d', $new_date_timestamp);

                $ccactivity=$this->input->post("ccactivity");

                //Franchise Code
                $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
                if($user_row->divide == "admin")
                {
                    $francode=$this->input->post("franchise_code");
                        if($francode)
                        {
                            $this->load->model('franchiese_model');
                            $f_code = $this->franchiese_model->franchise_code_valid($francode);
                            if($f_code)
                            {
                                $member_code = $francode;
                                                //Educational details
                        $grade=$this->input->post("grade");
                        $school=$this->input->post("school");
                        $location=$this->input->post("location");

                        //Father details               
                        $ffname=$this->input->post("ffirstname");
                        $fmname=$this->input->post("fmiddlename");
                        $flname=$this->input->post("flastname");
                        $profession=$this->input->post("profession");
                        $fnumber=$this->input->post("fmobileno");
                        $femail=$this->input->post("femail");
                        $address=$this->input->post("address");

                        //Course details
                        $course_id=$this->input->post("course");
                        $batch_no=$this->input->post("batch_no");


                        //Commission details
                        $course_commission=$this->input->post("course_commission");

                        //Payment details
                        $feedetails=$this->input->post("feedetails");
                        $paymenttype=$this->input->post("paymenttype");
                        $transaction_id=$this->input->post("netbanking");
                        $cheaque_no=$this->input->post("cheque");

                        //Documents
                        $ageproof=$this->input->post("ageproof");
                        $idproof=$this->input->post("idproof");
                        $ageproofno=$this->input->post("ageproofno");
                        $idproofno=$this->input->post("idproofno");

                        //Get checkbox value
                        if(!empty($this->input->post("fit")))
                        {
                            $cheeck_box=$this->input->post("fit");
                        }
                        else
                        {
                            $cheeck_box=$this->input->post("not_fit");  
                        }

                        //Medical details
                        $medical_issue=$this->input->post("medicaldetails");

                        //Fee calculation
                        $coursefee=$this->input->post("coursefee");
                        $paidfee=$this->input->post("paidfee");
                        $remain = ($coursefee-$paidfee);

                        //user_id
                        $uid=$this->session->userdata('user_id');
                        
                        //Image upload
                        $data=$this->upload->data();
                        $image_path=$data["raw_name"].$data['file_ext'];

                        $studdata = ['firstname'=>$fname,'middlename'=>$mname,'lastname'=>$lname,'user_id'=> $uid,'registration_date'=>$date,'gender'=>$gender,'ffname'=>$ffname,'fmname'=>$fmname,'flname'=>$flname,'profession'=>$profession,'fmnumber'=>$fnumber,'femail'=>$femail,'ccactivity'=>$ccactivity,'address'=>$address,'ageproof'=>$ageproof,'idproof'=>$idproof,'idproofno'=>$idproofno,'ageproofno'=>$ageproofno,'ppimage'=>$image_path,'medical_issue'=>$medical_issue,'grade'=>$grade,'school'=>$school,'school'=>$school,'location'=>$location,'dob'=>$dob,'check_box'=>$cheeck_box,'paymenttype'=>$paymenttype,'feedetails'=>$feedetails,'course_fee'=>$coursefee,'paid_fee'=>$paidfee,'remaining_fee'=>$remain,'transaction_id'=>$transaction_id,'cheaque_no'=>$cheaque_no,'course_id'=>$course_id,'batch_no'=>$batch_no,'franchise_code'=>$code,'franchise_code'=>$member_code];

                        $payment = ['payment_type'=>$paymenttype,'fee_detail'=>$feedetails,'course_fee'=>$coursefee,'paid_fee'=>$paidfee,'remaining_fee'=>$remain,'transaction_id'=>$transaction_id,'cheaque_no'=>$cheaque_no,'course_id'=>$course_id];

                        $this->load->model('studentmodel');

                        if($this->studentmodel->insertstudent($studdata,$uid,$course_commission,$payment))
                            {
                                $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
                                if ($user_row->divide == "admin") 
                                {
                                    $error="New Student Added.";
                                    $this->session->set_flashdata('error',$error);
                                    $this->session->set_flashdata('status','btn-success');
                                    redirect(base_url('AllStudent'));
                                }
                                else
                                {
                                    $error="New Student Added.";
                                    $this->session->set_flashdata('error',$error);
                                    $this->session->set_flashdata('status','btn-success');
                                    redirect(base_url('franchiseallstudent'));
                                }
                                
                            }
                            else
                            {
                                redirect(base_url('AddStudent'));
                            }
                            }
                            else
                            {
                                $error="Please enter valid Franchise Code.";
                                $this->session->set_flashdata('error',$error);
                                $this->session->set_flashdata('status','btn-success');
                                return redirect(base_url()."AddStudent/$error");
                            }

                        }
                }
                
                //Educational details
                $grade=$this->input->post("grade");
                $school=$this->input->post("school");
                $location=$this->input->post("location");

                //Father details               
                $ffname=$this->input->post("ffirstname");
                $fmname=$this->input->post("fmiddlename");
                $flname=$this->input->post("flastname");
                $profession=$this->input->post("profession");
                $fnumber=$this->input->post("fmobileno");
                $femail=$this->input->post("femail");
                $address=$this->input->post("address");

                //Course details
                $course_id=$this->input->post("course");
                $batch_no=$this->input->post("batch_no");


                //Commission details
                $course_commission=$this->input->post("course_commission");

                //Payment details
                $feedetails=$this->input->post("feedetails");
                $paymenttype=$this->input->post("paymenttype");
                $transaction_id=$this->input->post("netbanking");
                $cheaque_no=$this->input->post("cheque");

                //Documents
                $ageproof=$this->input->post("ageproof");
                $idproof=$this->input->post("idproof");
                $ageproofno=$this->input->post("ageproofno");
                $idproofno=$this->input->post("idproofno");

                //Get checkbox value
                if(!empty($this->input->post("fit")))
                {
                	$cheeck_box=$this->input->post("fit");
                }
                else
                {
                	$cheeck_box=$this->input->post("not_fit");	
                }

                //Medical details
                $medical_issue=$this->input->post("medicaldetails");

                //Fee calculation
                $coursefee=$this->input->post("coursefee");
                $paidfee=$this->input->post("paidfee");
                $remain = ($coursefee-$paidfee);

                //user_id
                $uid=$this->session->userdata('user_id');
                
                //Image upload
                $data=$this->upload->data();
                $image_path=$data["raw_name"].$data['file_ext'];

                $studdata = ['firstname'=>$fname,'middlename'=>$mname,'lastname'=>$lname,'user_id'=> $uid,'registration_date'=>$date,'gender'=>$gender,'ffname'=>$ffname,'fmname'=>$fmname,'flname'=>$flname,'profession'=>$profession,'fmnumber'=>$fnumber,'femail'=>$femail,'ccactivity'=>$ccactivity,'address'=>$address,'ageproof'=>$ageproof,'idproof'=>$idproof,'idproofno'=>$idproofno,'ageproofno'=>$ageproofno,'ppimage'=>$image_path,'medical_issue'=>$medical_issue,'grade'=>$grade,'school'=>$school,'school'=>$school,'location'=>$location,'dob'=>$dob,'check_box'=>$cheeck_box,'paymenttype'=>$paymenttype,'feedetails'=>$feedetails,'course_fee'=>$coursefee,'paid_fee'=>$paidfee,'remaining_fee'=>$remain,'transaction_id'=>$transaction_id,'cheaque_no'=>$cheaque_no,'course_id'=>$course_id,'batch_no'=>$batch_no,'franchise_code'=>$code];

                $payment = ['payment_type'=>$paymenttype,'fee_detail'=>$feedetails,'course_fee'=>$coursefee,'paid_fee'=>$paidfee,'remaining_fee'=>$remain,'transaction_id'=>$transaction_id,'cheaque_no'=>$cheaque_no,'course_id'=>$course_id];

                $this->load->model('studentmodel');

                if($this->studentmodel->insertstudent($studdata,$uid,$course_commission,$payment))
                    {
                        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
                    	if ($user_row->divide == "admin") 
                    	{
                            $error="New Student Added.";
                            $this->session->set_flashdata('error',$error);
                            $this->session->set_flashdata('status','btn-success');
                    		redirect(base_url('AllStudent'));
                    	}
                    	else
                    	{
                            $error="New Student Added.";
                            $this->session->set_flashdata('error',$error);
                            $this->session->set_flashdata('status','btn-success');
                    		redirect(base_url('franchiseallstudent'));
                    	}
                        
                    }
                    else
                    {
                        redirect(base_url('AddStudent'));
                    }
			}
			else
			{
                $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
                $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
                //
                $this->load->model('add_coursemodel');
                $data['courses'] = $this->add_coursemodel->course_list();
                $this->load->view('frontend/add_student',$data);
                $this->load->view('frontend/backend_footer');
			}
	}

	//--------------------------------Add Student End-----------------------------------------//



	//--------------------------------View All Student-----------------------------------------//
	public function all_student()
	{
		$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
		$this->load->view('frontend/backend_header',['user_row'=>$user_row]);
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
		$this->pagination->initialize($config);/*
        $this->load->model('payment_model');
        $pay_row=$this->payment_model->get_pay_details_abc();
        $remain=$pay_row->$*/
		$student = $this->students->all_students_list( $config['per_page'], $this->uri->segment(3) );
		$this->load->view('frontend/student_list', ['student'=>$student]);
		$this->load->view('frontend/backend_footer');
	}

	//--------------------------------View All Student End-----------------------------------------//



	
	//--------------------------------Edit Student-----------------------------------------//
	public function edit_student($value)
	{
		$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
		$this->load->view('frontend/backend_header',['user_row'=>$user_row]);
		$this->load->model("studentmodel");
		$this->load->model('add_coursemodel');
		$data['courses'] = $this->add_coursemodel->course_list();
		$stud_row=$this->studentmodel->get_student($value);
		$data['d_arr'] = ['stud_row'=>$stud_row];
        $this->load->view('frontend/edit_student',$data);
        $this->load->view('frontend/backend_footer');
	}

	public function editstudent()
	{	
        $config=[
                    'upload_path'=>'uploads/',
                    'allowed_types'=>'jpg|gif|png|jpeg',
                ];
        $this->load->library('upload');
        $this->upload->initialize($config);
		$this->load->library('form_validation');

		$this->form_validation->set_rules('firstname','student first name','required');
        $this->form_validation->set_rules('middlename','student middle name','required');
        $this->form_validation->set_rules('lastname','student last name','required');
        $this->form_validation->set_rules('date_of_birth','student date of birth','required');
        $this->form_validation->set_rules('gender','gender','required');
        $this->form_validation->set_rules('registration_date','student registration date','required');
        $this->form_validation->set_rules('ccactivity','student ccactivity','required');
        $this->form_validation->set_rules('grade','student grade','required');
        $this->form_validation->set_rules('school','student school','required');
        $this->form_validation->set_rules('location','location','required');
        $this->form_validation->set_rules('ffirstname','ffirstname','required');
        $this->form_validation->set_rules('fmiddlename','father middle name','required');
        $this->form_validation->set_rules('flastname','father last name','required');
        $this->form_validation->set_rules('profession','father profession','required');
        $this->form_validation->set_rules('address','address','required');
        $this->form_validation->set_rules('fmobileno','father mobile number','required');
        $this->form_validation->set_rules('femail','father email','required');
        $this->form_validation->set_rules('address','address','required');
        $this->form_validation->set_rules('course','course','required');
        $this->form_validation->set_rules('feedetails','feedetails','required');
         $this->form_validation->set_rules('batch_no','batch no','required');
        //$this->form_validation->set_rules('paidfee','amount to pay','required');
        //$this->form_validation->set_rules('paymenttype','paymenttype','required');
        /*if($this->input->post("paymenttype") == "netbanking")
        {
            $this->form_validation->set_rules('netbanking','netbanking transaction id','required');
        }
        else
        {
            $this->form_validation->set_rules('cheque','cheaque number','required');
        }*/            
        $this->form_validation->set_rules('ageproof','ageproof','required');
        $this->form_validation->set_rules('ageproofno','ageproofno','required');
        $this->form_validation->set_rules('idproof','idproof','required');
        $this->form_validation->set_rules('idproofno','idproofno','required');

        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

		$this->load->helper('date');
            

		if($this->form_validation->run())
		{
				//Student details
				$fname=$this->input->post("firstname");
				$mname=$this->input->post("middlename");
                $lname=$this->input->post("lastname");
                $old_date= $this->input->post("date_of_birth");
                $gender=$this->input->post("gender");
                $old_date_timestamp = strtotime($old_date);
                $dob = date('Y-m-d', $old_date_timestamp);

                $new_date= $this->input->post("registration_date");
                $new_date_timestamp = strtotime($new_date);
                $date = date('Y-m-d', $new_date_timestamp);        
                $gender=$this->input->post("gender");
                                             
                $ccactivity=$this->input->post("ccactivity");
                 $batch_no=$this->input->post("batch_no");

                //Educational details
                $grade=$this->input->post("grade");
                $school=$this->input->post("school");
                $location=$this->input->post("location");

                //Father details               
                $ffname=$this->input->post("ffirstname");
                $fmname=$this->input->post("fmiddlename");
                $flname=$this->input->post("flastname");
                $profession=$this->input->post("profession");
                $fnumber=$this->input->post("fmobileno");
                $femail=$this->input->post("femail");
                $address=$this->input->post("address");

                //Course details
                $course_id=$this->input->post("course");
           		$id=$this->input->post("id");


                //Payment details
                $feedetails=$this->input->post("feedetails");
                $paymenttype=$this->input->post("paymenttype");
                $transaction_id=$this->input->post("netbanking");
                $cheaque_no=$this->input->post("cheque");

                //Documents
                $ageproof=$this->input->post("ageproof");
                $idproof=$this->input->post("idproof");
                $ageproofno=$this->input->post("ageproofno");
                $idproofno=$this->input->post("idproofno");

                //Get checkbox value
                $cheeck_box=$this->input->post("fit");

                //Medical details
                $medical_issue=$this->input->post("medicaldetails");

                //Fee calculation
                $coursefee=$this->input->post("coursefee");
                $paidfee=$this->input->post("paidfee");
                $remaining=$this->input->post("remaining_fee");
                

                $remain = ($remaining-$paidfee);

                $id=$this->input->post("id");
                $uid=$this->input->post("user_id");

                if($this->upload->do_upload('userfile'))
                {
                    //Reterieve old image path
                    $old_image_path="".$this->input->post('ppimage');
                    unlink("uploads/".$old_image_path);
                
                    $fdata=$this->upload->data();
                    $image_path=$fdata["raw_name"].$fdata['file_ext'];                

                    $editstuddata = ['firstname'=>$fname,'middlename'=>$mname,'lastname'=>$lname,'user_id'=> $this->session->userdata('user_id'),'registration_date'=>$date,'gender'=>$gender,'ffname'=>$ffname,'fmname'=>$fmname,'flname'=>$flname,'profession'=>$profession,'fmnumber'=>$fnumber,'femail'=>$femail,'ccactivity'=>$ccactivity,'address'=>$address,'paymenttype'=>$paymenttype,'feedetails'=>$feedetails,'ageproof'=>$ageproof,'idproof'=>$idproof,'idproofno'=>$idproofno,'ageproofno'=>$ageproofno,'course_fee'=>$coursefee,'paid_fee'=>$paidfee,'remaining_fee'=>$remain,'medical_issue'=>$medical_issue,'grade'=>$grade,'school'=>$school,'school'=>$school,'location'=>$location,'dob'=>$dob,'transaction_id'=>$transaction_id,'cheaque_no'=>$cheaque_no,'check_box'=>$cheeck_box,'course_id'=>$course_id,'ppimage'=>$image_path,'batch_no'=>$batch_no];
 
                    $this->load->model('studentmodel');

                    if($this->studentmodel->editstudent($id,$editstuddata))
                    {
                        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
                        if($user_row->divide == "admin")
                        {
                            $error="Edit Student Successful.";
                            $this->session->set_flashdata('error',$error);
                            $this->session->set_flashdata('status','btn-success');
                            redirect(base_url('AllStudent'));
                        }
                        else
                        {
                            $error="Edit Student Successful.";
                            $this->session->set_flashdata('error',$error);
                            $this->session->set_flashdata('status','btn-success');
                            redirect(base_url('franchiseallstudent'));
                        }                
           	        }
                    else
                    {
                        redirect(base_url('editstudent'));
                    }
                }
                else
                {
                    $old_image_path="".$this->input->post('ppimage');
                    $editstuddata = ['firstname'=>$fname,'middlename'=>$mname,'lastname'=>$lname,'user_id'=> $this->session->userdata('user_id'),'registration_date'=>$date,'gender'=>$gender,'ffname'=>$ffname,'fmname'=>$fmname,'flname'=>$flname,'profession'=>$profession,'password'=>$password,'reg_pass'=>$regpassword,'fmnumber'=>$fnumber,'femail'=>$femail,'ccactivity'=>$ccactivity,'address'=>$address,'paymenttype'=>$paymenttype,'feedetails'=>$feedetails,'ageproof'=>$ageproof,'idproof'=>$idproof,'idproofno'=>$idproofno,'ageproofno'=>$ageproofno,'course_fee'=>$coursefee,'paid_fee'=>$paidfee,'remaining_fee'=>$remain,'medical_issue'=>$medical_issue,'grade'=>$grade,'school'=>$school,'school'=>$school,'location'=>$location,'dob'=>$dob,'transaction_id'=>$transaction_id,'cheaque_no'=>$cheaque_no,'check_box'=>$cheeck_box,'course_id'=>$course_id,'ppimage'=>$old_image_path];
 
                    $this->load->model('studentmodel');

                    if($this->studentmodel->editstudent($id,$editstuddata))
                    {
                        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
                        if($user_row->divide == "admin")
                        {
                            $error="Edit Student Successful.";
                            $this->session->set_flashdata('error',$error);
                            $this->session->set_flashdata('status','btn-success');
                            redirect(base_url('AllStudent'));
                        }
                        else
                        {
                            redirect(base_url('franchiseallstudent'));
                        }                
                    }
                    else
                    {
                        redirect(base_url('editstudent'));
                    }
                }
		}
		else
		{
            $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
            $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
            $this->load->model("studentmodel");
            $this->load->model('add_coursemodel');
            $data['courses'] = $this->add_coursemodel->course_list();
            $stud_row=$this->studentmodel->get_student_edit();
            $data['d_arr'] = ['stud_row'=>$stud_row];
            $this->load->view('frontend/edit_student',$data);
            $this->load->view('frontend/backend_footer');
		}
	}
	//--------------------------------Edit Student End-----------------------------------------//

    //--------------------------------Payment-----------------------------------------//

    /*public function payment($value)
    {

        $this->load->model("studentmodel");
        $this->load->model("payment_model");
        $this->load->model('add_coursemodel');        
        $data['courses'] = $this->add_coursemodel->course_list();
        $pay_row=$this->payment_model->get_pay_details($value);
        $data['d_ar'] = ['pay_row'=>$pay_row];

        $stud_row=$this->studentmodel->get_student($value);
        $data['d_arr'] = ['stud_row'=>$stud_row];
        
        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
        $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
        $this->load->view('frontend/payment',$data);
        $this->load->view('frontend/backend_footer');
    }

    public function paymentdone()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('paidfee','paidfee','required');

        if($this->form_validation->run())
        {
            $course_id=$this->input->post("course");
            $coursefee=$this->input->post("coursefee");
            $paidfee=$this->input->post("paidfee");
            $remaining_fee=$this->input->post("remaining_fee");
            $paymenttype=$this->input->post("paymenttype");
            $transaction_id=$this->input->post("netbanking");
            $cheaque_no=$this->input->post("cheque");
            $feedetails=$this->input->post("feedetails");

            $remain = ($remaining_fee-$paidfee);

            $uid=$this->session->userdata("user_id");
            $id=$this->input->post("id");

            $payment=['student_id'=>$id,'payment_type'=>$paymenttype,'fee_detail'=>$feedetails,'course_fee'=>$coursefee,'paid_fee'=>$paidfee,'remaining_fee'=>$remain,'transaction_id'=>$transaction_id,'cheaque_no'=>$cheaque_no,'course_id'=>$course_id];

            $this->load->model('payment_model');
            if($this->payment_model->insertpayment($payment))
            {
                $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
                if($user_row->divide == "admin")
                {
                    redirect(base_url('AllStudent'));
                }
                else
                {
                    redirect(base_url('franchiseallstudent'));
                }
                
            }
            else
            {
                redirect(base_url('AllStudent'));
            }
        }
        else
        {
            echo "failed to add payment";
        }
        
    }*/

    //--------------------------------Payment End-----------------------------------------//


	//--------------------------------Delete Student-----------------------------------------//
	public function delete_student($id,$ppimage)
    {
        $this->load->model('studentmodel');                    
        $this->load->helper("file");


        if($this->studentmodel->delete_stud($id))
        {
        	$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
        	if ($user_row->divide == "admin")
        	{
        		unlink("uploads/".$ppimage);
            	redirect(base_url('AllStudent'));
        	}
        	else
        	{
        		unlink("uploads/".$ppimage);
            	redirect(base_url('franchiseallstudent'));
        	}
        	
        }
        else
        {
            echo "Delete Failed";   	
            redirect(base_url('AllStudent'));
        }
    }
    //--------------------------------Delete Student End-----------------------------------------//



    //--------------------------------View All Course-----------------------------------------//
    public function all_course()
    {
	 	$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
		$this->load->view('frontend/backend_header',['user_row'=>$user_row]);
    	 $this->load->model('add_coursemodel');

			$courseall = $this->add_coursemodel->course_list();
			$this->load->view('frontend/all_course', ['courseall'=>$courseall]);
			$this->load->view('frontend/backend_footer');
    }
    //--------------------------------View All Course End-----------------------------------------//




	//--------------------------------Add Course-----------------------------------------//
    public function add_course()
	{
	 	$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
		$this->load->view('frontend/backend_header',['user_row'=>$user_row]);
		 $this->load->view('frontend/add_course');
		 $this->load->view('frontend/backend_footer');
	}

	public function addcourse()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('course_name','course_name','required');
		$this->form_validation->set_rules('course_fees','course_fees','required');
        $this->form_validation->set_rules('course_details','course_details','required');
        $this->form_validation->set_rules('commission','course commission','required');

        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if ( $this->form_validation->run() )
		{
				
			$cname=$this->input->post('course_name');
            $cfees=$this->input->post('course_fees');
            $cdetails=$this->input->post('course_details');
            $commission=$this->input->post('commission');

            $coursedetails=['course_name'=>$cname,'course_fees'=>$cfees,'commission'=>$commission,'course_details'=>$cdetails,'user_id'=>$this->session->userdata('user_id')];
              
            $this->load->model('add_coursemodel');
            if ( $this->add_coursemodel->add_course($coursedetails))
			{
                $error="New Course Added Successfully.";
                $this->session->set_flashdata('error',$error);
                $this->session->set_flashdata('status','btn-success');
				redirect(base_url('all_course'));					
			}
			else
			{
				$this->load->view('frontend/add_course');
			}
		}
		else
		{
			$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
        $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
         $this->load->view('frontend/add_course');
         $this->load->view('frontend/backend_footer');
		}
	}
	//--------------------------------Add Course End-----------------------------------------//



	public function get_course()
	{
		$course_id=$_POST['course_id'];
        $this->load->model('add_coursemodel');
        $find_course=$this->add_coursemodel->get_course($course_id);
        $data['json']=$find_course;
        echo json_encode($data);
	}



	//--------------------------------Edit Course-----------------------------------------//

	public function edit_course($value)
	{
		$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
		$this->load->view('frontend/backend_header',['user_row'=>$user_row]);
	 	$this->load->helper('form');
		$this->load->model("add_coursemodel");
        $cour_row=$this->add_coursemodel->get_course($value);
        $this->load->view('frontend/edit_course',['cour_row'=>$cour_row]);
        $this->load->view('frontend/backend_footer');
	 }

	 public function editcourse()
	{
		$this->load->library('form_validation');
        $this->form_validation->set_rules('course_name','course name','required');
        $this->form_validation->set_rules('course_details','course details','required');
        $this->form_validation->set_rules('course_fees','course fees','required');
        $this->form_validation->set_rules('commission','commission','required');

        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");			
			if($this->form_validation->run())
			{
				$cname=$this->input->post('course_name');
                $cdetails=$this->input->post('course_details');
                $cfees=$this->input->post('course_fees');
                $commission=$this->input->post('commission');
                $course_id=$this->input->post('course_id');

				$editcourses=['course_id'=>$course_id,'course_name'=>$cname,'course_details'=>$cdetails,'course_fees'=>$cfees,'commission'=>$commission,'user_id'=>$this->session->userdata('user_id')];
                $this->load->model('add_coursemodel');

                if($this->add_coursemodel->insertcourse($course_id,$editcourses))
                {
                    $error="Course Edit Successful.";
                    $this->session->set_flashdata('error',$error);
                    $this->session->set_flashdata('status','btn-success');
                    redirect(base_url('all_course'));
                }
                else
                {
                   	redirect(base_url('add_course'));
                     
               }
			}
			else
			{
                redirect(base_url('all_course'));	
      		}
	}

	//--------------------------------Edit Course End-----------------------------------------//




	//--------------------------------Delet Course-----------------------------------------//

	public function delete_course($course_id)
    {
        $this->load->model('add_coursemodel');                    
                         

        if($this->add_coursemodel->delete_courses($course_id))
        {
            redirect(base_url('all_course'));
        }
        else
        {
            echo "Delete Failed";   	
            redirect(base_url('all_course'));
        }
    }

    //--------------------------------Delet Course End-----------------------------------------//




	public function addfranchise()
	{
	 	$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
		$this->load->view('frontend/backend_header',['user_row'=>$user_row]);

		redirect(base_url('Dashboard'));
		$this->load->view('frontend/backend_footer');
	}

	public function all_admin()
	{
		$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
		$this->load->view('frontend/backend_header',['user_row'=>$user_row]);
		$this->load->model('admin_model');
		$admins = $this->admin_model->admin_list();
		$this->load->view('frontend/all_admin', ['admins'=>$admins]);
		$this->load->view('frontend/backend_footer');
	}

	public function add_admin()
	{
		$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
		$this->load->view('frontend/backend_header',['user_row'=>$user_row]);
		$this->load->view('frontend/add_admin');
		$this->load->view('frontend/backend_footer');

	}

	public function addadmin()
	{
		$config=[
               		'upload_path'=>'./uploads/admin/',
                	'allowed_types'=>'jpg|gif|png|jpeg',
                ];
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
		  $this->load->library('form_validation');

		$this->form_validation->set_rules('Admin_fname','admin fname','required');
		$this->form_validation->set_rules('Admin_lname','admin lname','required');
		$this->form_validation->set_rules('Admin_email','admin email','required');
        $this->form_validation->set_rules('Admin_cont','admin contact','required');
        $this->form_validation->set_rules('Admin_address','admin address','required');
        $this->form_validation->set_rules('divide','role','required');
        $this->form_validation->set_rules('uname','username','required');
        $this->form_validation->set_rules('password','password','required');
            
            $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
			if($this->form_validation->run())
			{
                $config=[
                    'upload_path'=>'./uploads/admin/',
                    'allowed_types'=>'jpg|gif|png|jpeg',
                ];
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userfile'))
                {
				    $fname=$this->input->post("Admin_fname");
                    $lname=$this->input->post("Admin_lname");
                    $mail=$this->input->post("Admin_email");
               	    $acon=$this->input->post("Admin_cont");
               	    $Admin_address=$this->input->post("Admin_address");
               	    $divide=$this->input->post("divide");
             
               	    $auname=$this->input->post("uname");
               	    $apass=$this->input->post("password");

                    $uid=$this->session->userdata('user_id');

                    $data=$this->upload->data();

                    $image_path=$data["raw_name"].$data['file_ext'];
                
                    $admindata = ['Admin_fname'=>$fname,'Admin_lname'=>$lname,'Admin_email'=>$mail,'Admin_cont'=>$acon,'Admin_address'=>$Admin_address,'divide'=>$divide,'uname'=>$auname,'password'=>$apass,'user_id'=>$uid,'admin_img'=>$image_path];

                    $frand=['uname'=>$auname,'password'=>$apass,'first_name'=>$fname,'last_name'=>$lname,'divide'=>$divide,'img'=>$image_path];
 
                    $this->load->model('admin_model');

                    if($this->admin_model->add_admin($admindata,$frand))
                    {
                        $error="New Admin Added Successfully.";
                        $this->session->set_flashdata('error',$error);
                        $this->session->set_flashdata('status','btn-success');
                        redirect(base_url('all_admin'));
                    }
                    else
                    {
                        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
                        $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
                        $this->load->view('frontend/add_admin');
                        $this->load->view('frontend/backend_footer');
                    }
                }
                else
                {
                    $fname=$this->input->post("Admin_fname");
                    $lname=$this->input->post("Admin_lname");
                    $mail=$this->input->post("Admin_email");
                    $acon=$this->input->post("Admin_cont");
                    $Admin_address=$this->input->post("Admin_address");
                    $divide=$this->input->post("divide");
             
                    $auname=$this->input->post("uname");
                    $apass=$this->input->post("password");

                    $uid=$this->session->userdata('user_id');

                    $image_path="dummy.png";
                
                    $admindata = ['Admin_fname'=>$fname,'Admin_lname'=>$lname,'Admin_email'=>$mail,'Admin_cont'=>$acon,'Admin_address'=>$Admin_address,'divide'=>$divide,'uname'=>$auname,'password'=>$apass,'user_id'=>$uid,'admin_img'=>$image_path];

                    $frand=['uname'=>$auname,'password'=>$apass,'first_name'=>$fname,'last_name'=>$lname,'divide'=>$divide,'img'=>$image_path];
 
                    $this->load->model('admin_model');

                    if($this->admin_model->add_admin($admindata,$frand))
                    {
                        $error="New Admin Added Successfully.";
                        $this->session->set_flashdata('error',$error);
                        $this->session->set_flashdata('status','btn-success');
                        redirect(base_url('all_admin'));
                    }
                    else
                    {
                        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
                        $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
                        $this->load->view('frontend/add_admin');
                        $this->load->view('frontend/backend_footer');
                    }
                }
			}
			else
			{
                $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
                $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
                $this->load->view('frontend/add_admin');
                $this->load->view('frontend/backend_footer');
			}

	}
	 public function edit_admin($value)
	 {
	 	$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
		$this->load->view('frontend/backend_header',['user_row'=>$user_row]);
	 	$this->load->helper('form');
		 $this->load->model("admin_model");
        $addd_row=$this->admin_model->get_admin($value);
        $this->load->view('frontend/edit_admin',['addd_row'=>$addd_row]);
        $this->load->view('frontend/backend_footer');
	 }



public function editadmin()
     {

        $config=[
                    'upload_path'=>'uploads/admin/',
                    'allowed_types'=>'jpg|gif|png|jpeg',
                ];
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->load->library('form_validation');

            $this->form_validation->set_rules('Admin_fname','admin fname','required');
            $this->form_validation->set_rules('Admin_lname','admin lname','required');
            $this->form_validation->set_rules('Admin_email','admin email','required');
            $this->form_validation->set_rules('Admin_cont','admin contact','required');
            $this->form_validation->set_rules('Admin_address','admin address','required');
             $this->form_validation->set_rules('uname','username','required');
             $this->form_validation->set_rules('password','password','required');
            
            $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
            
            if($this->form_validation->run())
            {
                
                $fname=$this->input->post("Admin_fname");
                $lname=$this->input->post("Admin_lname");
                $mail=$this->input->post("Admin_email");
                $acon=$this->input->post("Admin_cont");
                $Admin_address=$this->input->post("Admin_address");
                $divide=$this->input->post("divide");
                $auname=$this->input->post("uname");
                $apass=$this->input->post("password");
                $a_id=$this->input->post('Admin_id');
                if($this->upload->do_upload('userfile'))
                {
                    $old_image_path=$this->input->post("admin_img");
                    
                    unlink("uploads/admin/".$old_image_path);
                    $fdata = $this->upload->data();
                    $image_path=$fdata["raw_name"].$fdata['file_ext'];
                    
                    $adminedit=['Admin_id'=>$a_id,'Admin_fname'=>$fname,'Admin_lname'=>$lname,'Admin_email'=>$mail,'Admin_cont'=>$acon,'Admin_address'=>$Admin_address,'divide'=>$divide,'uname'=>$auname,'password'=>$apass,'admin_img'=>$image_path,'user_id'=>$this->session->userdata('user_id')];  

                    $update=['Admin_id'=>$a_id,'uname'=>$auname,'password'=>$apass,'first_name'=>$fname,'last_name'=>$lname];
     
                    $this->load->model('admin_model');


                    if($this->admin_model->insertadmin($a_id,$adminedit,$update))
                        {
                            $error="Edit Admin Successful.";
                            $this->session->set_flashdata('error',$error);
                            $this->session->set_flashdata('status','btn-success');
                            redirect(base_url('all_admin'));
                        }
                        else
                        {
                            redirect(base_url('add_admin'));                         
                        }
                   }
                   else
                    {
                         $old_image_path=$this->input->post("admin_img");
                         $adminedit=['Admin_id'=>$a_id,'Admin_fname'=>$fname,'Admin_lname'=>$lname,'Admin_email'=>$mail,'Admin_cont'=>$acon,'Admin_address'=>$Admin_address,'divide'=>$divide,'uname'=>$auname,'password'=>$apass,'admin_img'=>$old_image_path,'user_id'=>$this->session->userdata('user_id')]; 

                        $update=['Admin_id'=>$a_id,'uname'=>$auname,'password'=>$apass,'first_name'=>$fname,'last_name'=>$lname];
     
                            $this->load->model('admin_model');

                        if($this->admin_model->insertadmin($a_id,$adminedit,$update))
                        {
                            $error="Edit Admin Successful.";
                            $this->session->set_flashdata('error',$error);
                            $this->session->set_flashdata('status','btn-success');
                            redirect(base_url('all_admin'));
                        }
                        else
                         {
                            redirect(base_url('all_admin'));                                
                        }
                    }
                }
            else
            {
               $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
                $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
               $this->load->model("admin_model");
                $addd_row=$this->admin_model->get_admin_edit();
                $this->load->view('frontend/edit_admin',['addd_row'=>$addd_row]);
                $this->load->view('frontend/backend_footer');
            }
     }

	public function delete_admin($Admin_id,$image)
    {
        $this->load->model('admin_model');

        if($this->admin_model->delete_admin($Admin_id))
        {
            unlink("uploads/admin/".$image);
            redirect(base_url('all_admin'));
        }
        else
        {
            echo "Delete Failed";   	
            redirect(base_url('all_admin'));
        }
    }


/*Franchiese add/update/delete*/

	public function add_franchise()
	{
	 	$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
		$this->load->view('frontend/backend_header',['user_row'=>$user_row]);
		$this->load->view('frontend/add_franchiese');
		$this->load->view('frontend/backend_footer');
	}
	public function franchiseadd()
	{

		$config=[
               		'upload_path'=>'./uploads/franchise/',
                	'allowed_types'=>'jpg|gif|png|jpeg',
                ];
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
		      $this->load->library('form_validation');

			$this->form_validation->set_rules('fname','first name','required');
			$this->form_validation->set_rules('fcontact','franchise contact number','required');
            $this->form_validation->set_rules('femail','franchise email address','required');
            $this->form_validation->set_rules('contact_per','contact person name','required');
            $this->form_validation->set_rules('per_con','person contact','required');
            $this->form_validation->set_rules('per_email','contact person email address','required');
            $this->form_validation->set_rules('address','franchise address','required');
            $this->form_validation->set_rules('locality','franchise locality','required');
            $this->form_validation->set_rules('uname','franchise username','required');
            $this->form_validation->set_rules('password','franchise password','required');

            $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
			if ( $this->form_validation->run() && $this->upload->do_upload('userfile'))
			{
				
				$fname=$this->input->post('fname');
                $fcon=$this->input->post('fcontact');
                $femail=$this->input->post('femail');
                $con_per=$this->input->post('contact_per');
                $per_con=$this->input->post('per_con');
                $per_email=$this->input->post('per_email');
                $fadd=$this->input->post('address');
                $locality=$this->input->post('locality');
                $uid=$this->input->post('uname');
                $pass=$this->input->post('password');
            	$id=$this->input->post('id');
               
                $data=$this->upload->data();

                $image_path=$data["raw_name"].$data['file_ext'];

                $frandata=['id'=>$id,'fname'=>$fname,'fcontact'=>$fcon,'femail'=>$femail,'contact_per'=>$con_per,'per_con'=>$per_con,'per_email'=>$per_email,'address'=>$fadd,'locality'=>$locality,'uname'=>$uid,'password'=>$pass,'user_id'=>$this->session->userdata('user_id'),'fran_img'=>$image_path];

                $fran=['uname'=>$uid,'password'=>$pass,'img'=>$image_path,'first_name'=>$fname];


              
                $this->load->model('franchiese_model');
                if ( $this->franchiese_model->add_franchiese($frandata,$fran))
				{
                    $error="New Franchise Added Successfully.";
                    $this->session->set_flashdata('error',$error);
                    $this->session->set_flashdata('status','btn-success');
					redirect(base_url('all_franchiese'));					
				}
				else
				{
					$this->load->view('frontend/add_franchiese');
				}


			}
			else
			{
				$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
                $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
                $this->load->view('frontend/add_franchiese');
                $this->load->view('frontend/backend_footer');
			}
	}
	public function all_franchiese()
	{

	 	$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
		$this->load->view('frontend/backend_header',['user_row'=>$user_row]);
		 $this->load->model('franchiese_model');
		$franchiese = $this->franchiese_model->franchiese_list();
		$this->load->view('frontend/all_franchiese', ['franchiese'=>$franchiese]);
		$this->load->view('frontend/backend_footer');


	}
	public function edit_franchiese($value)
	{

	 	$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
		$this->load->view('frontend/backend_header',['user_row'=>$user_row]);
		$this->load->helper('form');
		$this->load->model("franchiese_model");
        $fran_row=$this->franchiese_model->get_franchiese($value);
        $this->load->view('frontend/edit_franchiese',['fran_row'=>$fran_row]);
        $this->load->view('frontend/backend_footer');
        

	}

	public function editfranchiese()
    {
        $config=[
                    'upload_path'=>'uploads/franchise/',
                    'allowed_types'=>'jpg|gif|png|jpeg',
                ];
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->load->library('form_validation');

            $this->form_validation->set_rules('fname','first name','required');
            $this->form_validation->set_rules('fcontact','franchise contact number','required');
            $this->form_validation->set_rules('femail','franchise email address','required');
            $this->form_validation->set_rules('contact_per','contact person name','required');
            $this->form_validation->set_rules('per_con','person contact','required');
            $this->form_validation->set_rules('per_email','contact person email address','required');
            $this->form_validation->set_rules('address','franchise address','required');
            $this->form_validation->set_rules('locality','franchise locality','required');
            $this->form_validation->set_rules('uname','franchise username','required');
            $this->form_validation->set_rules('password','franchise password','required');
            
            $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");            
            if($this->form_validation->run())
            {
                $fname=$this->input->post('fname');
                $fcon=$this->input->post('fcontact');
                $femail=$this->input->post('femail');
                $con_per=$this->input->post('contact_per');
                $per_con=$this->input->post('per_con');
                $per_email=$this->input->post('per_email');
                $fadd=$this->input->post('address');
                $uid=$this->input->post('uname');
                $pass=$this->input->post('password');
                $id=$this->input->post('id');
                $locality=$this->input->post('locality');
                
                if($this->upload->do_upload('userfile'))
               {
                    $old_image_path=$this->input->post("fran_img");
                    unlink("uploads/franchise/".$old_image_path);
                    $fdata = $this->upload->data();
                    $image_path=$fdata["raw_name"].$fdata['file_ext'];
                    
                    $editfrandata=['id'=>$id,'fname'=>$fname,'fcontact'=>$fcon,'femail'=>$femail,'contact_per'=>$con_per,'per_con'=>$per_con,'per_email'=>$per_email,'address'=>$fadd,'uname'=>$uid,'password'=>$pass,'user_id'=>$this->session->userdata('user_id'),'fran_img'=>$image_path,'locality'=>$locality,'fran_img'=>$image_path];

                   
                    $fran=['fran_id'=>$id,'uname'=>$uid,'password'=>$pass,'img'=>$image_path,'first_name'=>$fname];
              
                    $this->load->model('franchiese_model');

                     if($this->franchiese_model->insertfranchiese($id,$editfrandata,$fran))
                    {
                        $error="Edit Franchise Successful.";
                            $this->session->set_flashdata('error',$error);
                            $this->session->set_flashdata('status','btn-success');
                        redirect(base_url('all_franchiese'));
                    }
                    else
                    {
                            redirect(base_url('add_franchiese'));
                    }
                }
                else
                {
                    $old_image_path="".$this->input->post("fran_img");
                    $editfrandata=['id'=>$id,'fname'=>$fname,'fcontact'=>$fcon,'femail'=>$femail,'contact_per'=>$con_per,'per_con'=>$per_con,'per_email'=>$per_email,'address'=>$fadd,'uname'=>$uid,'password'=>$pass,'user_id'=>$this->session->userdata('user_id'),'fran_img'=>$old_image_path,'locality'=>$locality];

                    $fran=['fran_id'=>$id,'uname'=>$uid,'password'=>$pass,'img'=>$old_image_path,'first_name'=>$fname];
                     $this->load->model('franchiese_model');

                     if($this->franchiese_model->insertfranchiese($id,$editfrandata,$fran))
                    {
                        $error="Edit Franchise Successful.";
                        $this->session->set_flashdata('error',$error);
                        $this->session->set_flashdata('status','btn-success');
                        redirect(base_url('all_franchiese'));
                    }
                    else
                    {
                        redirect(base_url('add_franchiese'));
                     
                    }
                }
            }
            else
            {
                $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
                $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
                $this->load->model("franchiese_model");
                $fran_row=$this->franchiese_model->get_franchiese_edit();
                $this->load->view('frontend/edit_franchiese',['fran_row'=>$fran_row]);
                $this->load->view('frontend/backend_footer'); 
            }
    }

	public function delete_franchiese($id,$image)
    {
        $this->load->model('franchiese_model');                    
                         

        if($this->franchiese_model->delete_franch($id))
        {
            unlink("uploads/franchise/".$image);
            redirect(base_url('all_franchiese'));
        }
        else
        {
            echo "Delete Failed";   	
            redirect(base_url('all_franchiese'));
        }
    }


	public function dashboard()
	{
		$user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
		$this->load->view('frontend/backend_header',['user_row'=>$user_row]);
		$this->load->library('pagination');
		$config= [
					'base_url'			=> base_url('frontend/dashboard'),
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

		$comm = $this->students->admin_calculate_commission();
		$student = $this->students->students_list( $config['per_page'], $this->uri->segment(3) );
		$this->load->view('frontend/dashboard', ['student'=>$student,'comm'=>$comm]);
		$this->load->view('frontend/backend_footer');
	}

    //----------------------------------News----------------------------------------//

    public function all_newsevents()
    {
        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
        $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
        $this->load->model('news_model');
        $newsdatas = $this->news_model->news_list();
        $this->load->view('frontend/all_newsevents', ['newsdatas'=>$newsdatas]);
        $this->load->view('frontend/backend_footer');
    }
    public function addnewsevents()
    {
        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
        $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
        $this->load->view('frontend/add_newsevents');
        $this->load->view('frontend/backend_footer');
    }
    public function add_newsevents()
    {
        $config=[
                    'upload_path'=>'./uploads/news/',
                    'allowed_types'=>'jpg|gif|png|jpeg',
                ];
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        $this->load->library('form_validation');

        $this->form_validation->set_rules('news_title','news title','required');
        $this->form_validation->set_rules('news_desc','news description','required');            
            
        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
        if($this->form_validation->run() && $this->upload->do_upload('userfile'))
        {
            $news_title=$this->input->post("news_title");
            $news_desc=$this->input->post("news_desc");
            $uid=$this->session->userdata('user_id');

            $data=$this->upload->data();
            $image_path=$data["raw_name"].$data['file_ext'];
                
            $newsdata = ['news_title'=>$news_title,'news_desc'=>$news_desc,'user_id'=>$uid,'news_img'=>$image_path];

            $this->load->model('news_model');

            if($this->news_model->add_news($newsdata))
            {
                $error="New Event Created Successfully.";
                $this->session->set_flashdata('error',$error);
                $this->session->set_flashdata('status','btn-success');
                redirect(base_url('all_newsevents'));
            }
            else
            {
                redirect(base_url('add_newsevents'));                              
            }
        }
        else
        {
            $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
        $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
        $this->load->view('frontend/add_newsevents');
        $this->load->view('frontend/backend_footer');                                
        }

           
     }

      public function edit_newsevents($value)
     {
        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
        $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
        $this->load->helper('form');
         $this->load->model("news_model");
        $news_row=$this->news_model->get_news($value);
        $this->load->view('frontend/edit_newsevents',['news_row'=>$news_row]);
        $this->load->view('frontend/backend_footer');
        

     }
     public function editnewsevents()
     {

        $config=[
                    'upload_path'=>'uploads/news/',
                    'allowed_types'=>'jpg|gif|png|jpeg',
                ];
            $this->load->library('upload');
            $this->upload->initialize($config);

            $this->load->library('form_validation');

            $this->form_validation->set_rules('news_title','news title','required');
            $this->form_validation->set_rules('news_desc','news_desc','required');
            
            $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
            if($this->form_validation->run())
            {

                $news_id=$this->input->post("news_id");
               $news_title=$this->input->post("news_title");
               $news_desc=$this->input->post("news_desc");
               $uid=$this->session->userdata('user_id');
               if($this->upload->do_upload('userfile'))
               {
               $old_image_path="".$this->input->post("news_img");
               unlink("uploads/news/".$old_image_path);

               $fdata = $this->upload->data();
               $image_path=$fdata["raw_name"].$fdata['file_ext'];
    
                $editdata = ['news_id'=>$news_id,'news_title'=>$news_title,'news_desc'=>$news_desc,'user_id'=>$uid,'news_img'=>$image_path];
               
                $this->load->model('news_model');

                if($this->news_model->update_news($news_id,$editdata))
                    {
                        $error="Edit Event Successful.";
                        $this->session->set_flashdata('error',$error);
                        $this->session->set_flashdata('status','btn-success');
                        redirect(base_url('all_newsevents'));
                    }
                    else
                    {
                         redirect(base_url('edit_newsevents'));                              
                    }
                
                }
                else
                {
                    $old_image_path="".$this->input->post("news_img");
                    $editdata = ['news_id'=>$news_id,'news_title'=>$news_title,'news_desc'=>$news_desc,'user_id'=>$uid,'news_img'=>$old_image_path];
               
                     $this->load->model('news_model');

                    if($this->news_model->update_news($news_id,$editdata))
                    {
                        $error="Edit Event Successful.";
                        $this->session->set_flashdata('error',$error);
                        $this->session->set_flashdata('status','btn-success');
                        redirect(base_url('all_newsevents'));
                    }
                    else
                    {
                        redirect(base_url('edit_newsevents'));                              
                    }
                }
            }
            else
            {
                $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
                $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
                $this->load->model('news_model');
                $news_row=$this->news_model->get_news_edit();
                $this->load->view('frontend/edit_newsevents',['news_row'=>$news_row]);
                $this->load->view('frontend/backend_footer');
            }
     }
    
    public function delete_news($news_id,$news_img)
    {
        $this->load->model('news_model');                    
                         

        if($this->news_model->delete_news($news_id))
        {
            unlink("uploads/news/".$news_img);
            redirect(base_url('all_newsevents'));
        }
        else
        {
            echo "Delete Failed";       
            redirect(base_url('all_newsevents'));
        }
    }




    //----------------------------------News End----------------------------------------//


    //----------------------------------Gallery--------------------------------------------//

    public function storegallery()
    {
        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
        $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
        $this->load->view('frontend/store_gallery');
        $this->load->view('frontend/backend_footer');
    }

     public function store_gallery()
    {
        $uploadPath = 'uploads/gallery/';
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';                

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->load->library('form_validation');

        $this->form_validation->set_rules('img_title','image title','required');
        $this->form_validation->set_rules('img_desc','image description','required');

        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

        if($this->form_validation->run() && !empty($_FILES['files']['name']))
        {
            $img_title=$this->input->post("img_title");
            $img_desc=$this->input->post("img_desc");
            $uid=$this->session->userdata("user_id");
            $this->load->helper('date');
            $Date= date('Y-m-d H:i:s');

              
            $gallerydata=['user_id'=>$uid,'img_title'=>$img_title,'img_desc'=>$img_desc,'created_at'=>$Date];
            
            $this->load->model('multiplemodel');
                $filesCount = count($_FILES['files']['name']);
                if($filesCount <= 4)
                {
                if($this->multiplemodel->insertgallery($gallerydata))
                {

                    $this->load->model("gallerymodel");
                    $rest=$this->gallerymodel->get_recent_sr($uid);
                    $title_id=$rest->title_id;

                        $data = array();
                        $filesCount = count($_FILES['files']['name']);
                        for($i = 0; $i < $filesCount; $i++)
                        {
                            $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                            $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                            $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                            $_FILES['file']['size']     = $_FILES['files']['size'][$i];

                            if($this->upload->do_upload('file'))
                            {
                                $fileData = $this->upload->data();
                                   
                                $uploadData[$i]['image_name'] = $fileData['orig_name'];
                                $uploadData[$i]['image_path'] = "uploads/gallery/".$fileData['orig_name'];
                                $uploadData[$i]['title_id'] = $title_id;   
                            }
                        }
            
                        if(!empty($uploadData))
                        {
                            $this->load->model('multiplemodel','file');
                            $this->multiplemodel->insert($uploadData);                             
                        }
                         $error="New Gallery Added Successfully.";
                        $this->session->set_flashdata('error',$error);
                        $this->session->set_flashdata('status','btn-success');
                        redirect(base_url('all_gallery'));
                }
                else
                {
                    $this->session->set_flashdata('Feedback',"Record not inserted successfully.");
                    $this->session->set_flashdata('Feedback_class','alert-danger');
                }
            }
            else
            {
                $message="Do not upload more than 4 images.";
                $this->session->set_flashdata('message',$message);

                redirect(base_url('store_gallery'));
            }

                redirect(base_url('all_gallery'));
            
        }
        else
        {
            $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
        $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
        $this->load->view('frontend/store_gallery');
        $this->load->view('frontend/backend_footer');
        }              
    }
      public function all_gallery()
      {
        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
        $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
        $this->load->model('gallerymodel');
        $imgss = $this->gallerymodel->all_gall_list();
        $this->load->view('frontend/all_gallery', ['imgss'=>$imgss]);
        $this->load->view('frontend/backend_footer');

    }
    public function edit_gallery($value)
        {
            $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
             $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
            $this->load->helper('form');
            $this->load->model("gallerymodel");

             $img_row=$this->gallerymodel->get_img_des($value);
             $gall_img=$this->gallerymodel->get_multi_images($value);
             $this->load->view('frontend/edit_gallery',['img_row'=>$img_row,'gall_img'=>$gall_img]);

             $this->load->view('frontend/backend_footer');

    

        }

        public function update_gallery()
        {
            $uploadPath = 'uploads/gallery/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
                

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->load->library('form_validation');

             $this->form_validation->set_rules('img_title','image title','required');
            $this->form_validation->set_rules('img_desc','image description','required');

        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>"); 
            if ( $this->form_validation->run() && !empty($_FILES['files']['name']))
            {
                
                $img_title=$this->input->post("img_title");
                $img_desc=$this->input->post("img_desc");
                $uid=$this->session->userdata("user_id");
                $title_id=$this->input->post("title_id");
                $this->load->helper('date');
                $Date= date('Y-m-d H:i:s');

              
                $gallerydata=['user_id'=>$uid,'img_title'=>$img_title,'img_desc'=>$img_desc,'created_at'=>$Date,'title_id'=>$title_id];
                // print_r($articledata);exit();
                $this->load->model('gallerymodel');

                    if($this->gallerymodel->update_gallery($title_id,$gallerydata))
                    {
                         $data = array();
                         $filesCount = count($_FILES['files']['name']);
                          for($i = 0; $i < $filesCount; $i++)
                          {
                                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                                $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                                $_FILES['file']['size']     = $_FILES['files']['size'][$i];

                                 if($this->upload->do_upload('file'))
                                {
                                   
                                   $fileData = $this->upload->data();
                                   
                                   $uploadData[$i]['image_name'] = $fileData['orig_name'];
                                   $uploadData[$i]['image_path'] = "uploads/gallery/".$fileData['orig_name'];
                                   $uploadData[$i]['title_id'] = $title_id;
                                 
                                 
                                }
                         }
            
                            if(!empty($uploadData))
                            {
                               
                                $this->load->model('gallerymodel','file');
                                $this->gallerymodel->insert($uploadData);
                             
                            }
                              $error="Gallery Edit Successful.";
                                $this->session->set_flashdata('error',$error);
                                $this->session->set_flashdata('status','btn-success');
                              redirect(base_url('all_gallery'));
                            }
                            else
                            {
                                $this->session->set_flashdata('Feedback',"Record not inserted successfully.");
                                $this->session->set_flashdata('Feedback_class','alert-danger');
                                 
                          } 
                           redirect(base_url('all_gallery'));
                                
                        
                   }

         else{

                    $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
                     $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
                    $this->load->helper('form');
                    $this->load->model("gallerymodel");

                     $img_row=$this->gallerymodel->get_img_des_edit();
                     $gall_img=$this->gallerymodel->get_multi_images_edit();
                     $this->load->view('frontend/edit_gallery',['img_row'=>$img_row,'gall_img'=>$gall_img]);

                     $this->load->view('frontend/backend_footer');

                }
              
              
      }

        
        public function delete_images($id,$img_id)
        {
            // print_r($img_id);
            $this->load->model("gallerymodel");
            $image=$this->gallerymodel->get_image($img_id);
            $image_path = $image->image_name; 
            
            $this->load->helper("file");
            
            $a=$this->gallerymodel->del_image($img_id);
           
            if ($a)
            {
                unlink("uploads/gallery/".$image_path);
                redirect(base_url()."edit_gallery/".$id);
            }
            
            
         }
         public function delete_gallery($id)
        {              
            $this->load->model("gallerymodel");

            //$title_id = $this->input->post('title_id');
            $this->load->helper('form');
            $this->load->model('gallerymodel');
            $imgss = $this->gallerymodel->all_img_list($id);
            foreach ($imgss as $abc)
            {
                unlink("./".$abc->image_path);
            }
             

                if($this->gallerymodel->delete_gallery_all($id,$post))
                {
                    
                       
                        redirect(base_url('all_gallery'));
                }
                else{
          
                }
                       redirect(base_url('all_gallery'));
            }


    //------------------------------------Gallery End------------------------------------------//

    public function records()
    {
        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));        
        $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
        $this->load->view('frontend/records');
        $this->load->view('frontend/backend_footer');
    }


    public function record_get()
    {
        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
        if($user_row->divide == "admin")
        {
            $fdate=$this->input->post("from_date");        
            $old_date_timestamp = strtotime($fdate);
            $first_date = date('Y-m-d', $old_date_timestamp);
            $sdate=$this->input->post("to_date");
            $old_date_timestamp = strtotime($sdate);
            $second_date = date('Y-m-d', $old_date_timestamp);
            $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
            $sum=0;
            $student = $this->records->students_list($first_date,$second_date);
            foreach ($student as $students)
            {
                $sum=$sum+$students->commission;
            }
            $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
            $this->load->view('frontend/result_records',['student'=>$student,'sum'=>$sum]);
            $this->load->view('frontend/backend_footer');
        }
        else
        {
            $c_id = $this->session->userdata('user_id');
            $fdate=$this->input->post("from_date");        
            $old_date_timestamp = strtotime($fdate);
            $first_date = date('Y-m-d', $old_date_timestamp);
            $sdate=$this->input->post("to_date");
            $old_date_timestamp = strtotime($sdate);
            $second_date = date('Y-m-d', $old_date_timestamp);
            $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));
            $sum=0;
            $student = $this->records->students_list_franchise($first_date,$second_date,$c_id);
            foreach ($student as $students)
            {
                $sum=$sum+$students->commission;
            }
            $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
            $this->load->view('frontend/result_records',['student'=>$student,'sum'=>$sum]);
            $this->load->view('frontend/backend_footer');
        }
    }

    public function global_settings()
    {
        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));        
        $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
        $this->load->view('frontend/global_settings');
        $this->load->view('frontend/backend_footer');
    }

    public function all_global_settings()
    {
        $this->load->model('global_setting');
        $setting = $this->global_setting->global_list();
        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));        
        $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
        $this->load->view('frontend/all_global_settings',['setting'=>$setting]);
        $this->load->view('frontend/backend_footer');
    }

    public function global_set()
    {
        $site_name=$this->input->post("site_name");
        $contact=$this->input->post("contact");
        $email=$this->input->post("email");
        $address=$this->input->post("address");
        $facebook_link=$this->input->post("facebook_link");
        $twitter_link=$this->input->post("twitter_link");
        $linked_link=$this->input->post("linked_link");

        $company = ['site_name'=>$site_name,'contact'=>$contact,'address'=>$address,'email'=>$email,'facebook_link'=>$facebook_link,'twitter_link'=>$twitter_link,'linked_link'=>$linked_link];

        $this->load->model('global_setting');

        if($this->global_setting->insertsetting($company))
        {
            return redirect(base_url('all_global_settings'));
        }
    }

    public function edit_global_settings($value)
    {
        $user_row=$this->mlogin->get_user($this->session->userdata('user_id'));        
        $this->load->view('frontend/backend_header',['user_row'=>$user_row]);
        $this->load->helper('form');
        $this->load->model("global_setting");
        $setting_row=$this->global_setting->get_setting($value);
        $this->load->view('frontend/edit_global_settings',['setting_row'=>$setting_row]);
        $this->load->view('frontend/backend_footer');
    }

    public function edit_global_set()
    {
        $site_name=$this->input->post("site_name");
        $contact=$this->input->post("contact");
        $email=$this->input->post("email");
        $address=$this->input->post("address");
        $facebook_link=$this->input->post("facebook_link");
        $twitter_link=$this->input->post("twitter_link");
        $linked_link=$this->input->post("linked_link");

        $company = ['site_name'=>$site_name,'contact'=>$contact,'address'=>$address,'email'=>$email,'facebook_link'=>$facebook_link,'twitter_link'=>$twitter_link,'linked_link'=>$linked_link];

        $this->load->model('global_setting');

        if($this->global_setting->updatesetting($company))
        {
            return redirect(base_url('all_global_settings'));
        }
    }


	public function __construct()
		{
			parent::__construct();


			
			$this->load->helper('form');
			$this->load->library('session');
			/*$this->load->model('file');*/
			$this->load->model('loginmodel', 'mlogin');
            $this->load->model('record_model','records');
			$this->load->model('studentmodel', 'students');
            $this->load->model('payment_model', 'payment');
            if($this->session->userdata('user_id') == NULL || $this->session->userdata('user_id') == 0)
            {
                return redirect(base_url('Login'));
            }
			

 		}
}

?>