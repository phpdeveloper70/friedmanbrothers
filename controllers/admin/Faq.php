<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Faq  extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		//$admin_id = $this->session->userdata('ADMIN_ID');
		//if(empty($admin_id))
		//{
			//redirect('admin');
		//}
		$this->load->model('Faq_model');

	}
	
	public function add()
	{
		if(isset($_POST['submit']))
		{	
			
			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');
			$this->form_validation->set_rules('status', 'Status', 'trim|required');
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			if ($this->form_validation->run() == TRUE)
			{
				$title  	    = $_POST['title'];
				$description   	= $_POST['description'];
				$status 		= $_POST['status'];
                $data = array (
		                        'title'            => $title,
				                'description'      => $description,
				                'status'           => $status,
				                'c_date'           => date('Y-m-d h:i:s')
		          );
                $this->Faq_model->add_faq($data);
				$this->session->set_flashdata('msg','<div class="alert alert-success">record has been successfully saved.</div>');
				redirect('admin/faq/listing');
			}				
		}		
		$this->load->view('admin/faq/add');
	}
	
	public function listing()
	{
		$data['result'] = $this->Faq_model->get_all_faq(); 
		$this->load->view('admin/faq/listing',$data);
	}
		
public function edit()
	{
		$args = func_get_args();
		$data['result'] = $this->Faq_model->get_faq_by_id($args[0]); 
		
		if(isset($_POST['submit']))
		{
			$title  	    = $_POST['title'];
			$description   	= $_POST['description'];
			$status 		= $_POST['status'];
            $data = array (
		                     
				                'title'            => $title,
				                'description'      => $description,
				                'status'           => $status,
				                'c_date'     => date('Y-m-d h:i:s')
		          );	
				
				$this->Faq_model->update_faq_by_id($args[0],$data);
				$this->session->set_flashdata('msg','<div class="alert alert-success">record has been successfully updated.</div>');
				redirect('admin/faq/listing');		
						
				
		}		
		$this->load->view('admin/faq/edit',$data);
	}	
	
	public function delete()
	{
		$args = func_get_args();
		$this->Faq_model->get_faq_by_id($args[0]);
	    $this->Faq_model->delete_faq_by_id($args[0]);
       $this->session->set_flashdata('msg','<div class="alert alert-success">record has been successfully deleted.</div>');
		redirect('admin/faq/listing');
	}
	
}