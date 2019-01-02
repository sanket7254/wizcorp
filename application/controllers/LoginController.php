<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{

public function prelogin()
	{
		$this->load->view('frontend/login');
	}


	public function login()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','username','required');
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
				// print_r($login_id);
				// exit();
				$this->session->set_userdata('fname', $username);
				$this->load->model('loginmodel');
				$user_row=$this->loginmodel->get_user($login_id);
				if ($user_row->divide=="admin")
				{
					$welcome="Welcome to WIZCORP.";
                    $this->session->set_flashdata('welcome',$welcome);
                    $this->session->set_flashdata('status','btn-success');
					redirect(base_url('Dashboard'));
				}
				else
				{
					$welcome="Welcome to WIZCORP.";
                    $this->session->set_flashdata('welcome',$welcome);
                    $this->session->set_flashdata('status','btn-success');
					redirect(base_url('frandashboard'));
				}				
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
		redirect(base_url('Home'));
	}
}
?>