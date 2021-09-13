
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	
	function __construct()
	{
		parent ::__construct();
		$this->load->library('upload');
		$this->load->model("Dbcommon","cm");
	} 
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
// start login system coding.......
	


	public function branch()
	{
		
		if(!empty($this->input->get('action')) && !empty($this->input->get('id')))
		{
			$id=$this->input->get('id');
			if($this->input->get('action')=="destroy")
			{
			    $re=$this->cm->delete_data("branch","branch_id",$id);
				if($re)
				{
					redirect('settings/branch');	
				}
			}
			if($this->input->get('action')=="delete")
			{
			    if($this->input->get('status')==0)
			    {
			        $st['branch_status']=1;
			    }
			    else
			    {
			        $st['branch_status']=0;
			    }
				$re = $this->cm->update_data("branch",$st,"branch_id",$id);	
				if($re)
				{
					redirect('settings/branch');	
				}
			}
			else if($this->input->get('action')=="edit")
			{
				$display['select_branch']=$this->cm->select_data("branch","branch_id",$id);
			}
		}
		
		if(!empty($this->input->post('submit')))
		{
			$data = $this->input->post();
			unset($data['update_id']);
			unset($data['submit']);
			$data['logtype']="Branch";
			// $ins_data['branch_name'] = $data['branch_name'];
			// $ins_data['branch_code'] = $data['branch_code'];
			if(!empty($this->input->post('update_id')))
			{
				$id = $this->input->post('update_id');
				$re = $this->cm->update_data("branch",$data,"branch_id",$id);	
			}
			else
			{
				// echo "<pre>";
				// print_r($data);
				// exit();
				$re = $this->cm->insert_data("branch",$data);
			}
			if($re)
			{
				redirect('settings/branch'); 		
			}
		}
			$display['branch_all'] = $this->cm->view_all("branch");

			$this->load->view('branch',$display);
	}

	public function department()
	{
		
		if(!empty($this->input->get('action')) && !empty($this->input->get('id')))
		{
			$id=$this->input->get('id');
			if($this->input->get('action')=="destroy")
			{
			    $re=$this->cm->delete_data("department","department_id",$id);
				if($re)
				{
					redirect('settings/department');	
				}
			}
			if($this->input->get('action')=="delete")
			{
			    if($this->input->get('status')==0)
			    {
			        $st['depart_status']=1;
			    }
			    else
			    {
			        $st['depart_status']=0;
			    }
				$re = $this->cm->update_data("department",$st,"department_id",$id);	
				if($re)
				{
					redirect('settings/department');	
				}
			}
			else if($this->input->get('action')=="edit")
			{
				$display['select_department']=$this->cm->select_data("department","department_id",$id);
			}
		}
		
		if(!empty($this->input->post('submit')))
		{
			$data = $this->input->post();
			unset($data['update_id']);
			unset($data['submit']);

			// @$ins_data['branch_id'] = $data['branch_id'];
			// @$ins_data['department_name'] = $data['department_name'];
			if(!empty($this->input->post('update_id')))
			{
				$id = $this->input->post('update_id');
				$re = $this->cm->update_data("department",$data,"department_id",$id);	
			}
			else
			{
				// echo "<pre>";
				// print_r($data);
				// exit();
				$re = $this->cm->insert_data("department",$data);
			}
			if($re)
			{
				redirect('settings/department'); 		
			}
		}

		$display['branch_all'] = $this->cm->view_all("branch");
		$display['department_all'] = $this->cm->view_all("department");

		$this->load->view('department',$display);
	}


	public function course()
	{
		
		if(!empty($this->input->get('action')) && !empty($this->input->get('id')))
		{
			$id=$this->input->get('id');
			if($this->input->get('action')=="destroy")
			{
			    $re=$this->cm->delete_data("course","course_id",$id);
				if($re)
				{
					redirect('settings/course');	
				}
			}
			else if($this->input->get('action')=="edit")
			{
				$display['select_course']=$this->cm->select_data("course","course_id",$id);
			}
		}
		
		if(!empty($this->input->post('submit')))
		{
			$data = $this->input->post();
			unset($data['update_id']);
			unset($data['submit']);

			if(!empty($this->input->post('update_id')))
			{
				$id = $this->input->post('update_id');
				$re = $this->cm->update_data("course",$data,"course_id",$id);	
			}
			else
			{
				// echo "<pre>";
				// print_r($data);
				// exit();
				$re = $this->cm->insert_data("course",$data);
			}
			if($re)
			{
				redirect('settings/course'); 		
			}
		}
			$display['course_all'] = $this->cm->view_all("course");

			$this->load->view('course',$display);
	}

	public function user()
	{

		if(!empty($this->input->get('action')) && !empty($this->input->get('id')))
		{
			$id=$this->input->get('id');
			if($this->input->get('action')=="delete")
			{
			    $re=$this->cm->delete_data("user","user_id",$id);
				if($re)
				{
					redirect('settings/user');	
				}
			}
			else if($this->input->get('action')=="edit")
			{
				$display['select_user']=$this->cm->select_data("user","user_id",$id);
			}
		}

		if(!empty($this->input->post('submit')))
		{
			$data = $this->input->post();
			unset($data['update_id']);
			unset($data['submit']);

			// @$ins_data['branch_id'] = $data['branch_id'];
			// @$ins_data['department_name'] = $data['department_name'];
			if(!empty($this->input->post('update_id')))
			{
				$id = $this->input->post('update_id');
				$re = $this->cm->update_data("user",$data,"user_id",$id);	
			}
			else
			{
				// echo "<pre>";
				// print_r($data);
				// exit();
				$re = $this->cm->insert_data("user",$data);
			}
			if($re)
			{
				redirect('settings/user'); 		
			}
		}

			$display['branch_all'] = $this->cm->view_all("branch");
		    $display['department_all'] = $this->cm->view_all("department");
			$display['logtype_all'] = $this->cm->view_all("logtype");
			$display['user_all'] = $this->cm->view_all("user");

			$this->load->view('user',$display);
	}

	public function profile()
	{
		$display['msgp'] = "";
		if(!empty($this->input->post('cimage')))
			{
				
				if($_FILES['image']['name']!="")
				{

						$config['allowed_types'] = "*";
						$config['upload_path'] = FCPATH."dist/img/";
						$new_name = time().$_FILES["image"]['name'];
						$config['file_name'] = $new_name;
						
						$this->load->library('upload');
						$this->upload->initialize($config);
						
						if($this->upload->do_upload('image'))
						{
							 $imagedata = $this->upload->data();
							
							 

							 $image=FCPATH."dist/img/".$_SESSION['user_image'];
							@unlink($image);

							
							
						}
						else
						{
							
							$display['msgp'] = "image not uploaded";	
						}

						$dataimg['image'] = @$imagedata['file_name'];
						
						
						
						
						
						$id = $_SESSION['user_id'];
						if($_SESSION['logtype']=="Super Admin")
						{
							$re = $this->cm->update_data("admin",$dataimg,"id",$id);
							$select_user=$this->cm->select_data("admin","id",$id);
						}
						else
						{
							$re = $this->cm->update_data("user",$dataimg,"user_id",$id);
							$select_user=$this->cm->select_data("user","user_id",$id);	
						}
						
						if($re)
						{
							$this->session->set_userdata("user_image",$select_user->image);
							$display['msgpc'] = "Image change successfully";
						}

						
				}
				else
				{
					$display['msgp'] = "Please select Image";
				}
			}

					$this->load->view('profile',$display);
	}


	public function change_password()
	{
				$display['msgp'] = "";
			if(!empty($this->input->post('cpassword')))
			{
				$data = $this->input->post();
				if(!empty($data['npass']) && !empty($data['cpass']))
				{
					if($data['npass']==$data['cpass'])
					{
						$datac['password'] = $data['npass'];
						$id = $_SESSION['user_id'];
						if($_SESSION['logtype']=="Super Admin")
						{
							$re = $this->cm->update_data("admin",$datac,"id",$id);
							
						}
						else
						{
							$re = $this->cm->update_data("user",$datac,"user_id",$id);	
							
						}
						
						if($re)
						{
							$display['msgpc'] = "Password change successfully";
							
						}
					}
					else
					{
						$display['msgp'] = "New Password And Confirm Password does not Match";
					}
				}
				else
				{
					$display['msgp'] = "Please Enter New Password And Confirm Password";
				}
			}
				$this->load->view('change_password',$display);
	}
}
