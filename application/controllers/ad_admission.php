 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ad_admission  extends CI_Controller {
	 
	function __construct()
	{
		parent ::__construct();
		$this->load->library('upload');
		$this->load->model("Dbcommon","admin");
	}	

	public function ad_form()
	{
        $display['all_courses'] = $this->admin->view_all("cer_course_list");
		$display['all_branches'] = $this->admin->view_all("branch");
		$this->load->view('ad_admission_view',$display);
	}
    
    public function ad_admission_ad()
    {
        if($this->input->post('submit'))
		{
		    $data['depart']=$this->input->post('depart');
			$data['regno']=$this->input->post('regno');
			$data['sname']=$this->input->post('sname');
			$data['gr_id']=$this->input->post('gr_id');
			$data['con_no']=$this->input->post('con_no');
			$data['course']=$this->input->post('course');
			$data['branch']=$this->input->post('branch');
			$data['strat_date']=$this->input->post('strat_date');
			$data['duration']=$this->input->post('duration');
			$data['end_date']=$this->input->post('end_date');
			$data['issue_date']=$this->input->post('issue_date');
			$data['grade']=$this->input->post('grade');
			$response=$this->db->insert('cer_admission_list',$data);
			if($response==true){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
    }

    public function ad_view()
	{
		$display['all_adms'] = $this->admin->view_all("cer_admission_list");
		$display['count_all_data'] = $this->admin->count_all("cer_admission_list");
		$display['count_pan_data'] = $this->admin->count_Panding("cer_admission_list");
		$display['count_con_data'] = $this->admin->count_confirmed("cer_admission_list");
		$this->load->view('ad_view',$display);
	}

    public function ask_confirmation()
	{
		$display['all_adms'] = $this->admin->view_all_by_status("cer_admission_list");
		$display['count_all_data'] = $this->admin->count_all("cer_admission_list");
		$display['count_pan_data'] = $this->admin->count_Panding("cer_admission_list");
		$display['count_con_data'] = $this->admin->count_confirmed("cer_admission_list");
		$this->load->view('ask_confirmation',$display);
	}

	public function updateStatus($id='')
	{
		$query  = $this->admin->update_status($id);
		$display['all_adms'] = $this->admin->view_all("cer_admission_list");
		$this->load->view('ad_view',$display);
	}

	public function Print_Cert()
	{
		$display['all_adms'] = $this->admin->view_all_by_status_Aprroved("cer_admission_list");
		$this->load->view('Print_Cert',$display);
	}

	public function filter_by_status()
	{
		$display['count_all_data'] = $this->admin->count_all("cer_admission_list");
		$display['count_pan_data'] = $this->admin->count_Panding("cer_admission_list");
		$display['count_con_data'] = $this->admin->count_confirmed("cer_admission_list");
		$display['all_adms'] = $this->admin->view_all_by_status_Aprroved("cer_admission_list");
		$this->load->view('ad_view',$display);
	}

	public function filter_by_status_panding()
	{
		$display['count_all_data'] = $this->admin->count_all("cer_admission_list");
		$display['count_pan_data'] = $this->admin->count_Panding("cer_admission_list");
		$display['count_con_data'] = $this->admin->count_confirmed("cer_admission_list");
		$display['all_adms'] = $this->admin->view_all_by_status_panding("cer_admission_list");
		$this->load->view('ad_view',$display);
	}	

	public function count_aprooved()
	{
		$display['count_all_data'] = $this->admin->count_all("cer_admission_list");
		$display['count_pan_data'] = $this->admin->count_Panding("cer_admission_list");
		$display['count_con_data'] = $this->admin->count_confirmed("cer_admission_list");
		// $display['count_all_data'] = $this->admin->count_all("cer_admission_list");
		$this->load->view('ad_view',$display);
	}

}
