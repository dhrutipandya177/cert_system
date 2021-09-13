<?php

class Dbcommon extends CI_Model
{
	function __construct()
	{
		parent ::__construct();	 
	}

	public function insert_data($tbl,$data)
	{
		// print_r($data);
		// die();
		return $this->db->insert($tbl,$data);
	}
 
	public function insert_item($tbl,$itemdata)
	{
		// print_r($data);
		// die();
		return $this->db->insert($tbl,$itemdata);
	}

	public function update_data($tbl,$data,$wher,$id)
	{
		$this->db->where($wher,$id);
		return $this->db->update($tbl,$data);
	}

	public function delete_data($tbl,$wher,$id)
	{
		$this->db->where($wher,$id);
		return $this->db->delete($tbl);	
	}

	public function check_user($tbl,$email,$password)
	{
		$this->db->where("email",$email);
		$this->db->where("password",$password);
		$this->db->select("*");
		$this->db->from($tbl);
		$data=$this->db->get();
		return $data->row();
	}
 
	public function get_reco_multiple($tbl, $field, $data)
    {
      $this->db->where($field, $data);
      $this->db->from($tbl);
      $data =  $this->db->get();
      return $data->result();
    }

	public function select_data($tbl,$wher,$id)
	{
		$this->db->where($wher,$id);
		$this->db->select("*");
		$this->db->from($tbl);
		$data=$this->db->get();
		return $data->row();	
	}

	public function view_all($tbl)
	{
		$data=$this->db->get($tbl);
		return $data->result();	
	}

	public function view_all_by_status($tbl)
	{
		$this->db->select('*');
		$this->db->from($tbl);
		$data = $this->db->get();
		return $data->result();	
	}

	public function view_all_by_status_Aprroved($tbl)
	{
		$this->db->select('*');
		$this->db->from($tbl);
	    $this->db->where("status","APROOVED");
		$data = $this->db->get();
		return $data->result();	
	}

	public function view_all_by_status_panding($tbl)
	{
		$this->db->select('*');
		$this->db->from($tbl);
	    $this->db->where("status","PANDING");
		$data = $this->db->get();
		return $data->result();	
	}

	public function admission_view_all($tbl,$filter=0)
  {
      if(!empty($filter['filter_admission']))
      {
         
             if(!empty($filter['filter_id']))
          {
              $this->db->like("gr_id",$filter['filter_id']);
          }
         
          
          if(!empty($filter['filter_fname']))
          {
              $this->db->like("first_name",$filter['filter_fname']);
          }
          {
              $this->db->like("father_name",$filter['filter_lname']);
          }
          if(!empty($filter['filter_email']))
          {
              $this->db->like("email",$filter['filter_email']);
          }
          if(!empty($filter['filter_mobile']))
          {
              $this->db->like("mobile_no",$filter['filter_mobile']);
          }
          if(!empty($filter['filter_branch']))
          {
              $this->db->like("branch_id",$filter['filter_branch']);
          }
          }
        $this->db->from($tbl);
        $data = $this->db->get();
        return $data->result(); 
      }


        public function upgrade_stock($tbl,$data,$field,$id)
		{
			$this->db->where($field,$id);
			return $this->db->update($tbl,$data);
		}

	    public function import_stock($tbl,$record)
		{
			return $this->db->insert($tbl,$record);
		}

		public function import_ad($tbl,$data)
		{
			return $this->db->insert($tbl,$data);
		}

		public function get_client_data($tbl,$field,$id)
		{
			$this->db->where($field,$id);
			$this->db->from($tbl);
			$data = $this->db->get();
			return $data->row();
		}

		public function trash_record($tbl,$field,$id)
		{
			$this->db->where($field,$id);
			return $this->db->delete($tbl);
		}

		public function view_all_by_order($tbl, $order_field, $order_type) {
			$this->db->order_by($order_field, $order_type);
				$data = $this->db->get($tbl);
				
			return $data->result();
		  }

	  function update_status($id)
	  {
		$this->db->set('status', 'APROOVED');
		$this->db->where("ad_id",$id);
		$this->db->update('cer_admission_list');
	}

	function count_all()
	{
		// $this->db->where("status","PANDING");
		$query = $this->db->get('cer_admission_list');
		return $query->num_rows();

	}

	function count_Panding()
	{
		$this->db->where("status","PANDING");
		$query = $this->db->get('cer_admission_list');
		return $query->num_rows();

	}

	function count_confirmed()
	{
		$this->db->where("status","APROOVED");
		$query = $this->db->get('cer_admission_list');
		return $query->num_rows();

	}

}

