<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admission extends CI_Controller 
{
	 
	function __construct()
	{
		parent ::__construct();
		$this->load->library('upload');
		$this->load->model("Dbcommon","cm");
	}

	public function admission_process()
	{
		$display['msg'] = "";
		if(!empty($this->input->get('action')) && !empty($this->input->get('id')))
		{
			$id=$this->input->get('id');
			if($this->input->get('action')=="delete")
			{
			    $re=$this->cm->delete_data("admission","admission_id",$id);
				if($re)
				{
					redirect('admission/admission_process');	
				}
			}
			else if($this->input->get('action')=="edit")
			{
				$display['select_admission']=$this->cm->select_data("admission","admission_id",$id);
			}
		}

		if(!empty($this->input->post('submit')))
		{
			$data = $this->input->post();
			date_default_timezone_set("Asia/Calcutta");
			unset($data['update_id']);
			unset($data['submit']);
			$data['admission_date'] = date('d/m/Y');
			$data['admission_time'] = date('h:i A');
			if(!empty($this->input->post('update_id')))
			{
				$id = $this->input->post('update_id');
				$re = $this->cm->update_data("admission",$data,"admission_id",$id);

			}
			else
			{
				//  echo "<pre>";
				//  print_r($data);
				// exit();
				$re = $this->cm->insert_data("admission",$data);
			}
			if($re)
			{
				
				$display['msg'] = "Data Updated successfully";
				$display['msg'] = "Data Inserted successfully";
				redirect('admission/admission_process'); 		
			}
		}
		if(!empty($this->input->post('filter_admission')))
	    {
	        $filter = $this->input->post();
	        $display["admission_all"] = $this->cm->admission_view_all("admission",$filter);
	        $display['filter_id'] = @$filter['filter_id'];
	        $display['filter_fname'] = @$filter['filter_fname'];
	        $display['filter_email'] = @$filter['filter_email'];
	        $display['filter_mobile'] = @$filter['filter_mobile'];
	        $display['filter_branch'] = @$filter['filter_branch'];
	        $display['filter_on'] = "dfgf";
	    }
	    else
	    {

	    	
		    $display['admission_all'] = $this->cm->admission_view_all("admission");
	    }

			$display['branch_all'] = $this->cm->view_all("branch");
		    $display['department_all'] = $this->cm->view_all("department");
		    $display['country_all'] = $this->cm->view_all("country");
		    $display['state_all'] = $this->cm->view_all("state");
		    $display['city_all'] = $this->cm->view_all("cities");
		    $display['area_all'] = $this->cm->view_all("city_area");
		    $display['course_all'] = $this->cm->view_all("course");
			

			$this->load->view('admission_process',$display);
	}

}