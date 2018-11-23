<<<<<<< HEAD
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
		$this->load->view('admin/product/listing',$data);
	}

	public function add()
	{
	if(isset($_POST['submit']))
	{ 
	//print_r($_POST);die;
		$this->form_validation->set_rules('CatTitle', 'Category', 'trim|required');
		if ($this->form_validation->run() == TRUE)
		{

			$DeptID  	= $_POST['DeptID'];
			$CatTitle   	= $_POST['CatTitle'];
			$url_slug 		= $_POST['url_slug'];
			$CatShortDesc	= $_POST['CatShortDesc'];
			$CatDescription = $_POST['CatDescription'];
			$root_display 		= $_POST['root_display'];
			$status 		= $_POST['status'];

               $postdata = array (
                     	'DeptID'            => $DeptID,
		                'CatTitle'             => $CatTitle,
		                'url_slug'             => $url_slug,
		                'CatShortDesc'         => $CatShortDesc,
		                'CatDescription'       => $CatDescription,
		                'status'               => $status,
		                'root_display'         => $root_display,
		                'created_date'         => date('Y-m-d h:i:s')
		          );
                 $this->Product_model->save_product($postdata);


		$this->session->set_flashdata('msg', '<div class="alert alert-success">Record has been successfully saved.</div>');
		redirect('admin/product/listing');
		}
			
	}
		$this->load->view('admin/product/add');
	}
	public function edit()
	{
		$args = func_get_args();
		$data['result'] = $this->Product_model->get_product_by_id($args[0]);
		$this->form_validation->set_rules('ProdTitle', 'Product Title', 'trim|required');
		if(isset($_POST['submit']))
		{
			if ($this->form_validation->run() == TRUE)
			{
				
				$ProdTitle         = $_POST['ProdTitle'];
				$Sku   	= $_POST['Sku'];
				$DeptID	= $_POST['DeptID'];
				$CatID = $_POST['CatID'];
				$ProdDescription     = $_POST['ProdDescription'];
				$published_state= $_POST['published_state'];
				$ProdShortDesc  = $_POST['ProdShortDesc'];
				$DisplayOrder  = $_POST['DisplayOrder'];
				
				
                 $postdata = array (
                     	'ProdTitle'               => $ProdTitle,
		                'Sku'             => $Sku,
		                'DeptID'           => $DeptID,
		                'published_state'      => $published_state,
		                'ProdDescription'        => $ProdDescription,
		                'ProdShortDesc'         => $ProdShortDesc,
		                'CatID'       => $CatID,
		                'DisplayOrder'         => $DisplayOrder
		                
		          );

                // ECHO "<PRE>";PRINT_r($postdata);DIE;
				$this->Product_model->update_product_by_id($args[0],$postdata);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully updated.</div>');
				redirect('admin/product/listing');
			}
		
		}
	$data['category'] = $this->Category_model->get_all_category(); 
	$data['department'] = $this->Product_model->get_all_dept();
	$this->load->view('admin/product/edit',$data);
	}

	public function delete()
	{
		$args = func_get_args();
		$team_data =  $this->Product_model->get_product_by_id($args[0]);
		$this->Product_model->delete_product_by_id($args[0]);
	    $this->session->set_flashdata('msg','<div class="alert alert-success">record has been successfully deleted.</div>');
		redirect('admin/product/listing');
	}
	
	
		
=======
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
		$this->load->view('admin/product/listing',$data);
	}

	public function add()
	{
	if(isset($_POST['submit']))
	{ 
	//print_r($_POST);die;
		$this->form_validation->set_rules('CatTitle', 'Category', 'trim|required');
		if ($this->form_validation->run() == TRUE)
		{

			$DeptID  	= $_POST['DeptID'];
			$CatTitle   	= $_POST['CatTitle'];
			$url_slug 		= $_POST['url_slug'];
			$CatShortDesc	= $_POST['CatShortDesc'];
			$CatDescription = $_POST['CatDescription'];
			$root_display 		= $_POST['root_display'];
			$status 		= $_POST['status'];

               $postdata = array (
                     	'DeptID'            => $DeptID,
		                'CatTitle'             => $CatTitle,
		                'url_slug'             => $url_slug,
		                'CatShortDesc'         => $CatShortDesc,
		                'CatDescription'       => $CatDescription,
		                'status'               => $status,
		                'root_display'         => $root_display,
		                'created_date'         => date('Y-m-d h:i:s')
		          );
                 $this->Product_model->save_product($postdata);


		$this->session->set_flashdata('msg', '<div class="alert alert-success">Record has been successfully saved.</div>');
		redirect('admin/product/listing');
		}
			
	}
		$this->load->view('admin/product/add');
	}
	public function edit()
	{
		$args = func_get_args();
		$data['result'] = $this->Product_model->get_product_by_id($args[0]);
		$this->form_validation->set_rules('ProdTitle', 'Product Title', 'trim|required');
		if(isset($_POST['submit']))
		{
			if ($this->form_validation->run() == TRUE)
			{
				
				$ProdTitle         = $_POST['ProdTitle'];
				$Sku   	= $_POST['Sku'];
				$DeptID	= $_POST['DeptID'];
				$CatID = $_POST['CatID'];
				$ProdDescription     = $_POST['ProdDescription'];
				$published_state= $_POST['published_state'];
				$ProdShortDesc  = $_POST['ProdShortDesc'];
				$DisplayOrder  = $_POST['DisplayOrder'];
				
				
                 $postdata = array (
                     	'ProdTitle'               => $ProdTitle,
		                'Sku'             => $Sku,
		                'DeptID'           => $DeptID,
		                'published_state'      => $published_state,
		                'ProdDescription'        => $ProdDescription,
		                'ProdShortDesc'         => $ProdShortDesc,
		                'CatID'       => $CatID,
		                'DisplayOrder'         => $DisplayOrder
		                
		          );

                // ECHO "<PRE>";PRINT_r($postdata);DIE;
				$this->Product_model->update_product_by_id($args[0],$postdata);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully updated.</div>');
				redirect('admin/product/listing');
			}
		
		}
	$data['category'] = $this->Category_model->get_all_category(); 
	$data['department'] = $this->Product_model->get_all_dept();
	$this->load->view('admin/product/edit',$data);
	}

	public function delete()
	{
		$args = func_get_args();
		$team_data =  $this->Product_model->get_product_by_id($args[0]);
		$this->Product_model->delete_product_by_id($args[0]);
	    $this->session->set_flashdata('msg','<div class="alert alert-success">record has been successfully deleted.</div>');
		redirect('admin/product/listing');
	}
	
	
		
>>>>>>> 7d546049417e40258e16a6cf259912edcbdb0fc8
}