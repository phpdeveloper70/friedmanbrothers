<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Welcome_model');
		 $this->load->model('Front_model');
	}

		


	public function index()
	{
			// index function
	}
	public function listing()
	{
		$dept_id = $_GET['deptid'];

		if(!isset($_GET['cat_id']) && empty($_GET['cat_id']))
		{
			$cat_id = $this->front_model->get_department_category_single_id($dept_id);
		}else
		{
			$cat_id =  $_GET['cat_id'];
		}
		$data['productdata'] = $this->front_model->get_product_list($dept_id,$cat_id);
		$data['department'] = $this->front_model->get_department_by_id($dept_id);
		$data['category_id'] = $cat_id;

		if($dept_id=='3')				//Sconces layout
		{
				$this->load->view('front/products/sconces',$data);
		}
		elseif($dept_id=='4')				//tables layout
		{
				$this->load->view('front/products/tables',$data);
		}
		elseif($dept_id=='5') 	//cornices layout
		{
				$this->load->view('front/products/cornices',$data);
		}
		else
		{
				$this->load->view('front/products/listing',$data);
		}
	}

      public function search(){
		if(isset($_POST['search']))
		{
			 $keyword = $_POST['search_data'];
		}else{
			$keyword ='';
		}	
		$data['productdata'] = $this->Front_model->search_products($keyword);

       // echo "<pre>";print_R($data['RESULT']);die;
		$this->load->view('front/search/listing',$data);
	}

	function test()
	{
			$category_data = $this->front_model->get_department_category(2);
			$array_data = array();
			$header = 'Mirror' ;
			foreach($category_data as $cat)
			{
					if($cat->isHeader=='x')
					{
							$header = $cat->CatTitle;
					}
					$array_data[$header][] = array($cat->id,$cat->CatTitle);
			}

			echo '<pre>';
			print_r($array_data);
			echo '</pre>';

			foreach($array_data as $d_key => $d_val)
			{
				print_r($d_key);
			}

	}
	
}
