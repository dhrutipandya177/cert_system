 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StockConroller extends CI_Controller {
	 
	function __construct()
	{
		parent ::__construct();
		$this->load->library('upload');
		$this->load->model("Dbcommon","cm");
	}

	public function stockhelper()
	{
		
		$display['all_clientstock'] = $this->cm->view_all("clientstock");

		$this->load->view('stockhelper',$display);
	}

	public function import_stock()
	{
		if($this->input->post('submit'))
		{
			$data = $this->input->post();
			date_default_timezone_set('Asia/Kolkata');
			$date = date('d-m-y h:i:s');
			$data['created_at'] = $date;
			unset($data['submit']);

			if($this->input->post('clientstock_id'))
			{
				$id = $this->input->post('clientstock_id');

				unset($data['clientstock_id']);
				$query = $this->cm->upgrade_stock('clientstock',$data,'clientstock_id',$id);
				if($query)
				{
				  $recp["all_record"] = array('status'=>2,"msg"=>"Successfully Updated Record");
				  echo json_encode($recp);// echo "1";
				}
				else
				{
				  $recp["all_record"] = array('status'=>3,"msg"=>"Something Wrong");
				  echo json_encode($recp);// echo "2";
				}
			} 
			else
			{
				unset($data['clientstock_id']);
				$data['created_by'] =  $_SESSION['user_name'];
				$query = $this->cm->import_stock('clientstock',$data);
				if($query)
				{
				  $recp["all_record"] = array('status'=>1,"msg"=>"Successfully Inserted Record");
				  echo json_encode($recp);// echo "1";
				}
				else
				{
				  $recp["all_record"] = array('status'=>3,"msg"=>"Something Wrong");
				  echo json_encode($recp);// echo "2";
				}
			}
		}
	}

	public function Getdata()
	{
		$id = $this->input->post('clientstock_id');

		$record['single_record'] = $this->cm->get_client_data('clientstock','clientstock_id',$id);

		echo json_encode($record);

	}

	public function clietstock_trash()
	{
		$id = $this->input->post('clientstock_id');
		$query = $this->cm->trash_record('clientstock','clientstock_id',$id);
		if($query)
		{
			echo "1";
		}
		else
		{
			echo "2";
		}
	}

	public function customer_sale()
	{
		$display['all_clientstock'] = $this->cm->view_all("clientstock");
		$display['all_customer_stock'] = $this->cm->view_all("customer_stock");

		$this->load->view('sale_to_customer',$display);
	}


	public function import_customer_stock()
	{
		if($this->input->post('submit'))
		{
			$data = $this->input->post();
			date_default_timezone_set('Asia/Kolkata');
			$date = date('d-m-y h:i:s');
			$data['created_at'] = $date;
			unset($data['submit']);

			if($this->input->post('customer_stock_id'))
			{
				$id = $this->input->post('customer_stock_id');

				unset($data['customer_stock_id']);
				$query = $this->cm->upgrade_stock('customer_stock',$data,'customer_stock_id',$id);
				if($query)
				{
				  $recp["all_record"] = array('status'=>2,"msg"=>"Successfully Updated Record");
				  echo json_encode($recp);// echo "1";
				}
				else
				{
				  $recp["all_record"] = array('status'=>3,"msg"=>"Something Wrong");
				  echo json_encode($recp);// echo "2";
				}
			}
			else
			{
				unset($data['customer_stock_id']);
				$data['created_by'] =  $_SESSION['user_name'];
				$query = $this->cm->import_stock('customer_stock',$data);
				if($query)
				{
				  $recp["all_record"] = array('status'=>1,"msg"=>"Successfully Inserted Record");
				  echo json_encode($recp);// echo "1";
				}
				else
				{
				  $recp["all_record"] = array('status'=>3,"msg"=>"Something Wrong");
				  echo json_encode($recp);// echo "2";
				}
			}
		}
	}


	public function Getdata_customer()
	{
		$id = $this->input->post('customer_stock_id');

		$record['single_record'] = $this->cm->get_client_data('customer_stock','customer_stock_id',$id);

		echo json_encode($record);

	}

	public function customerstock_trash()
	{
		$id = $this->input->post('customer_stock_id');
		$query = $this->cm->trash_record('customer_stock','customer_stock_id',$id);
		if($query)
		{
			echo "1";
		}
		else
		{
			echo "2";
		}
	}


}
