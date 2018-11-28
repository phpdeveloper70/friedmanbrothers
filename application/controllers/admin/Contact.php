<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$admin_id = $this->session->userdata('ADMIN_ID');
		$this->load->model('Contact_model');
		if(empty($admin_id))
		{
			redirect('admin');
		}
		$this->load->library('form_validation');
	}
	
	public function listing()
	{

		$data['result'] = $this->Contact_model->get_all_contact(); 
		$this->load->view('admin/contact/listing',$data);
	}

	public function view()
	{
		$args = func_get_args();
		$data['result'] = $this->Contact_model->get_user_profile($args[0]); 
		//print_R($data['result']);
		$this->load->view('admin/contact/view',$data);
	}


	
	public function edit()
	{
		 $args = func_get_args();
		// print_r($args);
		$data['result'] = $this->Contact_model->get_contact_by_id($args[0]);

		if(isset($_POST['submit']))
      	{ 
      		//print_R($_POST);
				$row_type         = $_POST['row_type'];
				$name   	= $_POST['name'];
				$firstname	= $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$address_one     = $_POST['address_one'];
				$address_two= $_POST['address_two'];
				$address_three  = $_POST['address_three'];
				$country  = $_POST['country'];
				$state  = $_POST['state'];
				$city  = $_POST['city'];
				$zip  = $_POST['zip'];
				$title  = $_POST['title'];
				$phone  = $_POST['phone'];
				$fax  = $_POST['fax'];
				$country  = $_POST['country'];
$postdata = array (
                     	'row_type'               => $row_type,
		                'name'             => $name,
		                'firstname'           => $firstname,
		                'lastname'      => $lastname,
		                'address_three'        => $address_three,
		                'address_two'         => $address_two,
		                'address_one'       => $address_one,
		                'country'         => $country,
		                 'state'      => $state,
		                'city'        => $city,
		                'zip'         => $zip,
		                'title'       => $title,
		                'phone'         => $phone,
		                'fax'         => $fax
		                //'crm_dept'    => $crm_dept
		                
		          );

                // ECHO "<PRE>";PRINT_r($postdata);DIE;
				$this->Contact_model->update_contact_by_id($args[0],$postdata);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully updated.</div>');
				redirect('admin/contact/listing');
			
		}
	
	
	$this->load->view('admin/contact/edit',$data);
	}

	
		
}
