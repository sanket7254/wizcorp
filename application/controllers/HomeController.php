<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller
{

	public function index()
	{
		$this->load->model('global_setting');
		$data = $this->global_setting->get_setting_view();
		$this->load->view('frontend/header',['data'=>$data]);
		$this->load->view('frontend/index');
		$this->load->model('franchiese_model');
		$this->load->model('add_coursemodel');		
		$data['courses'] = $this->add_coursemodel->course_frontend_list();  
		$data['fran'] = $this->franchiese_model->franchiese_list();
		$data['footer'] = $this->global_setting->get_setting_view();
		$this->load->view('frontend/footer',$data);
	}

	public function about()
	{  
		$this->load->model('global_setting');
		$data = $this->global_setting->get_setting_view();
		$this->load->view('frontend/header',['data'=>$data]);
		$this->load->model('franchiese_model');
		$this->load->model('add_coursemodel');
		$data['courses'] = $this->add_coursemodel->course_frontend_list();  
		$data['fran'] = $this->franchiese_model->franchiese_list();
	    $this->load->view('frontend/about');
	    $data['footer'] = $this->global_setting->get_setting_view();
		$this->load->view('frontend/footer',$data);
	}

	public function franchise()
	{  
		$this->load->model('global_setting');
		$data = $this->global_setting->get_setting_view();
		$this->load->view('frontend/header',['data'=>$data]);
		$this->load->model('franchiese_model');
		$franc = $this->franchiese_model->page_franchiese_list();
		$this->load->model('add_coursemodel');
		$data['courses'] = $this->add_coursemodel->course_frontend_list();  
		$data['fran'] = $this->franchiese_model->franchiese_list();
		$this->load->view('frontend/franchise',['franc'=>$franc]);
		$data['footer'] = $this->global_setting->get_setting_view();
		$this->load->view('frontend/footer',$data);
	}

	public function gallery()
	{
		$this->load->model('global_setting');
		$data = $this->global_setting->get_setting_view();
		$this->load->view('frontend/header',['data'=>$data]);
		$this->load->model('gallerymodel');
		$data['gall'] =$this->gallerymodel->frotend_gall_list();
		$this->load->model('franchiese_model');
		$this->load->model('add_coursemodel');
		$data['courses'] = $this->add_coursemodel->course_frontend_list();  
		$data['fran'] = $this->franchiese_model->franchiese_list();
		$this->load->view('frontend/gallery',$data);
		$data['footer'] = $this->global_setting->get_setting_view();
		$this->load->view('frontend/footer',$data);

	}
	public function popup_imagess($title_id)
	{
		$this->load->model('gallerymodel');
		$imgs = $this->gallerymodel->get_gallery($title_id);
		$this->load->view('frontend/popup_images', ['imgs'=>$imgs]);
	}

	public function midbrain()
	{
		$this->load->model('global_setting');
		$data = $this->global_setting->get_setting_view();
		$this->load->view('frontend/header',['data'=>$data]);
		$this->load->model('franchiese_model');
		$data['fran'] = $this->franchiese_model->franchiese_list();
		$this->load->model('add_coursemodel');
		$data['courses'] = $this->add_coursemodel->course_frontend_list();  
		$this->load->view('frontend/midbrain');
		$data['footer'] = $this->global_setting->get_setting_view();
		$this->load->view('frontend/footer',$data);
	}
	public function our_courses()
	{
		$this->load->model('global_setting');
		$data = $this->global_setting->get_setting_view();
		$this->load->view('frontend/header',['data'=>$data]);
		$this->load->model('add_coursemodel');
		$abc=$this->add_coursemodel->ourcourse_list();
		$this->load->view('frontend/our_courses',['abc'=>$abc]);
		$this->load->model('franchiese_model');
		$this->load->model('add_coursemodel');
		$data['courses'] = $this->add_coursemodel->course_frontend_list();  
		$data['fran'] = $this->franchiese_model->franchiese_list();
		$data['footer'] = $this->global_setting->get_setting_view();
		$this->load->view('frontend/footer',$data);
	}

	public function news()
	{ 
		$this->load->model('global_setting');
		$data = $this->global_setting->get_setting_view();
		$this->load->view('frontend/header',['data'=>$data]);
		$this->load->model('news_model');
		$newsdatas = $this->news_model->fontend_news_list();
		$this->load->model('franchiese_model');
		$data['fran'] = $this->franchiese_model->franchiese_list();
		$this->load->model('add_coursemodel');
		$data['courses'] = $this->add_coursemodel->course_frontend_list();  
		$this->load->view('frontend/news', ['newsdatas'=>$newsdatas]);
		$data['footer'] = $this->global_setting->get_setting_view();
		$this->load->view('frontend/footer',$data);
	}

		public function readmore($news_id)
	{ 
		$this->load->model('global_setting');
		$data = $this->global_setting->get_setting_view();
		$this->load->view('frontend/header',['data'=>$data]);
		$this->load->model("news_model");
		$d=$this->news_model->update_retrive($news_id);
		$this->load->view('frontend/readmore',['d'=>$d]);
		$this->load->model('franchiese_model');
		$this->load->model('add_coursemodel');
		$data['courses'] = $this->add_coursemodel->course_frontend_list();  
		$data['fran'] = $this->franchiese_model->franchiese_list();
		$data['footer'] = $this->global_setting->get_setting_view();
		$this->load->view('frontend/footer',$data);
	}
	public function contact()
	{
		$this->load->model('global_setting');
		$data = $this->global_setting->get_setting_view();
		$this->load->view('frontend/header',['data'=>$data]);
		$this->load->view('frontend/contact');
		$this->load->model('franchiese_model');
		$this->load->model('add_coursemodel');
		$data['courses'] = $this->add_coursemodel->course_frontend_list();  
		$data['fran'] = $this->franchiese_model->franchiese_list();
		$data['footer'] = $this->global_setting->get_setting_view();
		$this->load->view('frontend/footer',$data);
	}
	public function Contacts()
	{

		$this->load->library('form_validation');

			$this->form_validation->set_rules('name','name','required');
			$this->form_validation->set_rules('email','email','required');
			$this->form_validation->set_rules('contact','contact','required');
			$this->form_validation->set_rules('subject','subject','required');
			$this->form_validation->set_rules('message','message','required');
			if ( $this->form_validation->run() )
			{
				$name=$this->input->post("name");
                $contact=$this->input->post("contact");
                $email=$this->input->post("email");
                $subject=$this->input->post("subject");
               	$message=$this->input->post("contact");

				$enqu_data=['name'=>$name,'contact'=>$contact,'email'=>$email,'message'=>$message,'subject'=>$subject];

                $this->load->model('enquiry_model');

                if($this->enquiry_model->add_enquiry($enqu_data))
                    {
                    	$message="Message Sent Successfully.";
                        $this->session->set_flashdata('message',$message);
                        $this->session->set_flashdata('status','btn-success');
                        redirect(base_url('Contact'));
                    }
                    else
                    {
                        $this->load->view('frontend/Contact');
                    }
			}
			else
			{
                $this->load->view('frontend/Contact');
			}
	}

	public function privacy()
	{
		$this->load->model('global_setting');
		$data = $this->global_setting->get_setting_view();
		$this->load->view('frontend/header',['data'=>$data]);
		$this->load->view('frontend/privacy');
		$this->load->model('franchiese_model');
		$this->load->model('add_coursemodel');
		$data['courses'] = $this->add_coursemodel->course_frontend_list();  
		$data['fran'] = $this->franchiese_model->franchiese_list();
		$data['footer'] = $this->global_setting->get_setting_view();
		$this->load->view('frontend/footer',$data);
	}

	public function faq()
	{
		$this->load->model('global_setting');
		$data = $this->global_setting->get_setting_view();
		$this->load->view('frontend/header',['data'=>$data]);  
		$this->load->view('frontend/faq');
		$this->load->model('franchiese_model');
		$this->load->model('add_coursemodel');
		$data['courses'] = $this->add_coursemodel->course_frontend_list();  
		$data['fran'] = $this->franchiese_model->franchiese_list();
		$data['footer'] = $this->global_setting->get_setting_view();
		$this->load->view('frontend/footer',$data);
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
}