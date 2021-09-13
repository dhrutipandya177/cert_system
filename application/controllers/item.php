 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class item extends CI_Controller {
	 
	function __construct()
	{
		parent ::__construct();
		$this->load->library('upload');
		$this->load->model("Dbcommon","cm");
	}

	public function item()
	{
		$display['product']=$this->cm->view_all("product"); 
		$display['item'] = $this->cm->view_all("item");

		$this->load->view('item',$display);
	}

	public function product()
	{
		$display['product']=$this->cm->view_all("product"); 
		$display['item'] = $this->cm->view_all("item");
		$this->load->view('product',$display);
	}


	public function item_add()
	{
        $data = $this->input->post();
           
		    if ($this->input->post('submit')) {
				$i = 0;   
				foreach($data['item_name'] as $key => $value) {
					$itemdata['item_name'] = $value;
					$itemdata['item_code'] =$data['item_code'][$i];
					$itemdata['item_description'] = $data['item_description'][$i];
				    $itemdata['item_price'] = $data['item_price'][$i];
                    $itemdata['product_id'] = $data['product_id'];
                    $i++;
				    $this->db->insert('item',$itemdata);
					redirect('item/item');
				}                
            }

    }

	public function product_edit($ids='')
	{
		$display['single_reco'] = $this->cm->select_data('item','product_id', $ids);
		$display['product_all'] = $this->cm->view_all("product");
		$display['match_data'] = $this->cm->get_reco_multiple('item','product_id', $ids);
		echo "<pre>";
		print_r($display['match_data']);
		die();
		$update['item_data'] = $this->cm->view_all("item");	
		$update['product_data'] = $this->cm->view_all("product");
		$update['product_all'] = $this->cm->view_all_by_order("product", "product_name", "asc");
		$this->load->view('product_edit', $display);
		
	}


	public function update_product()
	{
		if ($this->input->post('submit')) {
			$data = $this->input->post();	
			 $i = 0;
			 foreach ($data['item_name'] as $key => $value) {
					$itemdata['item_name'] = $value;
					$itemdata['item_code'] =$data['item_code'][$i];
					$itemdata['item_description'] = $data['item_description'][$i];
				    $itemdata['item_price'] = $data['item_price'][$i];
                    $itemdata['product_id'] = $data['product_id'];
				$id = $item_id[$i];
				$i++;
				$result = $this->admin->update('item', $itemdata, 'item_id',$id);
			 }

			
		}
	}

}
