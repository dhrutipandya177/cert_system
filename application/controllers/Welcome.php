<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	function __construct()
	{
		@parent ::__construct();
		$this->load->model("Dbcommon","cm");
		$this->load->library('upload');
		$this->load->helper('url','file');
 
	}

	public function index()
	{
		$this->load->view('login');
	}

		public function login()
	{

		// if(@$_SESSION['domain']=="admin")
		// {
			
		// 	redirect('welcome');	
		// }

		$msgs['msg'] = "";
		if(!empty($this->input->post('email')) && !empty($this->input->post('password')))
		{
			
			$check_admin = $this->cm->check_user("admin",$this->input->post('email'),$this->input->post('password'));
			
			if(!empty($check_admin->email) && !empty($check_admin->password))
			{
				
				$this->session->set_userdata("domain","admin");
				$this->session->set_userdata("user_id",$check_admin->id);
				$this->session->set_userdata("user_name",$check_admin->name);
				$this->session->set_userdata("user_email",$check_admin->email);
				$this->session->set_userdata("user_image",$check_admin->image);
				$this->session->set_userdata("user_last_seen",$check_admin->timestamp);
				$this->session->set_userdata("logtype",$check_admin->logtype);
				
				$userdata = [

							'id'  => $check_admin->id,

							'username'  => $check_admin->name,

							'email'     => $check_admin->email,

							'name'     => $check_admin->name,

							'role' => $check_admin->logtype,

							'last_logged' =>  $check_admin->lastlogged,

							'created' =>  $check_admin->created, 

							'logged_in' => 'TRUE'

					];
					// print_r($userdata);
					// exit;
                $this->session->set_userdata('Admin',$userdata);
				redirect('welcome/dashboard');
				
			}
			else
			{
				$msgs['msg'] = "Invalid Email or Password"; 
			}
			
			}
			
			
				$this->load->view('login',$msgs);
		}
		
	
	public function logout()
	{
		
		date_default_timezone_set("Asia/Kolkata");
		$id = $_SESSION['user_id'];
		$data['timestamp']  =  date('Y-m-d H:i:s');
		if($_SESSION['logtype']=="Super Admin")
		{
			$this->cm->update_data("admin",$data,"id",$id);	
		}
		else
		{
			$this->cm->update_data("user",$data,"user_id",$id);	
		}
		session_destroy();
		redirect('welcome/login');	
	}

	public function dashboard()
	{
		$display['admission_all'] = $this->cm->admission_view_all("admission");

		$this->load->view('dashboard',$display);
	}
	
}
