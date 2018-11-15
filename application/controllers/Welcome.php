<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Welcome_model');
	}

	public function index()
	{
		$data['data']=$this->Welcome_model->get_all_menu();
	
		$this->load->view('front/home',$data);
	}
	public function viewproducts()
	{   $id = $this->uri->segment('2');
		$data['result']=$this->Welcome_model->get_dept_categories($id);
		$data['heading']=$this->Welcome_model->get_license($id);
		$data['data']=$this->Welcome_model->get_all_menu();
		$data['get_side_mega_menu']=$this->Welcome_model->get_side_mega_menu($id);
		
		//echo"<pre>";print_r($data['get_side_mega_menu']);
	    $this->load->view('product-listing',$data);
		
	}


}
