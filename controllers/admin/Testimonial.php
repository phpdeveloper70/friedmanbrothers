<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Testimonial  extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$admin_id = $this->session->userdata('ADMIN_ID');
		if(empty($admin_id))
		{
			redirect('admin');
		}
		$this->load->model('Testimonial_model');
	}
	
	public function add()
	{
		if(isset($_POST['submit']))
		{	
			
			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('status', 'Status', 'trim|required');
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			if ($this->form_validation->run() == TRUE)
			{

				 
				if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name']))
				{

						
						$file_name = $_FILES['image']['name'];
						$tmp_name = $_FILES['image']['tmp_name'];
						$path = 'images/testimonials/'.$file_name;
						move_uploaded_file($tmp_name,$path);
						$image          = $file_name;
                        $title  	    = $_POST['title'];
					    $description   	= $_POST['description'];
						$customer_name 		= $_POST['customer_name'];
						$customer_desc 		= $_POST['customer_desc'];
						$status 		= $_POST['status'];
                        $data = array (
		                     	'image'            => $image,
				                'title'            => $title,
				                'description'      => $description,
				                'customer_name'    => $customer_name,
				                'customer_desc'    => $customer_desc,
				                'status'           => $status,
				                'created_date'     => date('Y-m-d h:i:s')
		          );

					
				}
			   	
				$this->Testimonial_model->add_testimonial($data);
				$this->session->set_flashdata('msg','<div class="alert alert-success">record has been successfully saved.</div>');
				redirect('admin/testimonial/listing');
			}				
		}		
		$this->load->view('admin/testimonial/add');
	}
	
	public function listing()
	{
		$data['result'] = $this->Testimonial_model->get_all_testimonial(); 
		$this->load->view('admin/testimonial/listing',$data);
	}
		
	public function edit()
	{
		$args = func_get_args();
		$data['result'] = $this->Testimonial_model->get_testimonial_by_id($args[0]); 
		
		if(isset($_POST['submit']))
		{
				
				
					
						$file_name = $_FILES['image']['name'];
						$tmp_name = $_FILES['image']['tmp_name'];
						$path = 'images/testimonials/'.$file_name;
						move_uploaded_file($tmp_name,$path);
						$image          = $file_name;
                        $title  	    = $_POST['title'];
					    $description   	= $_POST['description'];
						$customer_name 		= $_POST['customer_name'];
						$customer_desc 		= $_POST['customer_desc'];
						$status 		= $_POST['status'];
                        $data = array (
		                     	'image'            => $image,
				                'title'            => $title,
				                'description'      => $description,
				                'customer_name'    => $customer_name,
				                'customer_desc'    => $customer_desc,
				                'status'           => $status,
				                'created_date'     => date('Y-m-d h:i:s')
		          );	
				
				$this->Testimonial_model->update_testimonial_by_id($args[0],$data);
				$this->session->set_flashdata('msg','<div class="alert alert-success">record has been successfully updated.</div>');
				redirect('admin/testimonial/listing');		
						
				
		}		
		$this->load->view('admin/testimonial/edit',$data);
	}	
	
	public function delete_testimonial()
	{
		$args = func_get_args();
		$testimonial_data = $this->Testimonial_model->get_testimonial_by_id($args[0]);
		$this->Testimonial_model->delete_testimonial_by_id($args[0]);
		//delete_file('images/testimonials/',$testimonial_data[0]->image);
		$this->session->set_flashdata('msg','<div class="alert alert-success">record has been successfully deleted.</div>');
		redirect('admin/testimonial/listing');
	}
	
}