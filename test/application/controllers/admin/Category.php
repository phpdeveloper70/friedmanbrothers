<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$admin_id = $this->session->userdata('ADMIN_ID');
		$this->load->model('Category_model');
		if(empty($admin_id))
		{
			redirect('admin');
		}
		$this->load->library('form_validation');
	}
	
	public function listing()
	{
		$data['result'] = $this->Category_model->get_all_category(); 
		$this->load->view('admin/category/listing',$data);
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
                 $this->Category_model->save_category($postdata);


		$this->session->set_flashdata('msg', '<div class="alert alert-success">Record has been successfully saved.</div>');
		redirect('admin/category/listing');
		}
			
	}
		$this->load->view('admin/category/add');
	}
	public function edit()
	{
		$args = func_get_args();
		//$data['cat'] = $this->category_model->get_all_category();
		$data['result'] = $this->Category_model->get_category_by_id($args[0]);
		$this->form_validation->set_rules('CatTitle', 'Category', 'trim|required');
		if(isset($_POST['submit']))
		{
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
		                 'root_display'         => $root_display,
		                'status'               => $status,
		                'created_date'         => date('Y-m-d h:i:s')
		          );

                // ECHO "<PRE>";PRINT_r($postdata);DIE;
				$this->Category_model->update_category_by_id($args[0],$postdata);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully updated.</div>');
				redirect('admin/category/listing');
			}
		
		}
	$data['category'] = $this->Category_model->get_all_category(); 
	$this->load->view('admin/category/edit',$data);
	}

	public function delete()
	{
		$args = func_get_args();
		$team_data =  $this->Category_model->get_category_by_id($args[0]);
		$this->Category_model->delete_category_by_id($args[0]);
	    $this->session->set_flashdata('msg','<div class="alert alert-success">record has been successfully deleted.</div>');
		redirect('admin/category/listing');
	}
	
	
		
}