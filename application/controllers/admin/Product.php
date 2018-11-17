<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$admin_id = $this->session->userdata('ADMIN_ID');
		$this->load->model('Product_model');
		$this->load->model('Category_model');
		if(empty($admin_id))
		{
			redirect('admin');
		}
		$this->load->library('form_validation');
	}
	public function listing()
    	{
    	$data['result'] = $this->Product_model->get_all_product();
        $this->load->view('admin/product/listing', $data);
        }
	public function add()
	{
		if (isset($_POST['submitform']))
			{

				$postdata = $this->input->post();

				unset($postdata['submitform']);
				$this->Product_model->save_product($postdata);
				
			}
			$this->load->view('admin/product/add');
	}


	
		
}