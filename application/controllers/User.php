<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	    $this->load->model('Front_model');
		
		
	}

	public function login()
	{
			$user_id = $this->session->userdata('USER_ID');
			if(!empty($user_id)){ redirect('user/myaccount'); }

			if(isset($_POST['login']))
			{
					$this->form_validation->set_rules('email', 'Email Address', 'trim|required');
					$this->form_validation->set_rules('password', 'Password', 'trim|required');
					$this->form_validation->set_error_delimiters('<div class="has-error"><i class="fa fa-warning"></i>&nbsp', '</div>');
					if ($this->form_validation->run() == TRUE)
					{
							$username = $this->input->post('email');
							$password = $this->input->post('password');
							if(!empty($username) || !empty($password))
							{
											$user_data = $this->user_model->user_login($username,$password);
											//print_r($user_data); die;
											if(count($user_data)>0)
											{
													$user_login_data = array('USER_ID'=>$user_data[0]->id,'USER_NAME'=>$user_data[0]->name,'USER_TYPE'=>$user_data[0]->usertype);
				  								$this->session->set_userdata($user_login_data);
													redirect('user/dashboard');
											}else
											{
												$this->session->set_flashdata('message','Error! Invalid login credentials.');
												redirect('user/login');
											}
							}
							else
							{
									$this->session->set_flashdata('message','Error! Invalid login credentials.');
									redirect('user/login');
							}
					}
			}
			$this->load->view('front/user/login');
	}

	public function register()
	{
		$user_id = $this->session->userdata('USER_ID');
		if(!empty($user_id)){ redirect('user/myaccount'); }
			$this->load->view('front/user/register');
	}

	function dashboard()
	{
			$user_id = $this->session->userdata('USER_ID');
			if(empty($user_id)){ redirect('user/register'); }
			$this->load->view('front/user/dashboard');
	}



	function address()
	{
			$user_id = $this->session->userdata('USER_ID');
			if(empty($user_id)){ redirect('user/register'); }
			$data['result']  = $this->Front_model->get_address_by_user($user_id);
			$this->load->view('front/user/address',$data);
	}

	function change_password()
	{
			 $user_id = $this->session->userdata('USER_ID');
			if(empty($user_id)){ redirect('user/register'); }

		if(isset($_POST['changepass']))
		{
			$post_data = $this->input->post();
			if(empty($post_data['oldpassword']) || empty($post_data['newpassword']) || empty($post_data['confirmpassword']))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Please fill all field</div>');
				redirect('user/change_password');
			}
			else
			{
				 $oldpass_data = md5($post_data['oldpassword']);
				 $form_key_pass= $post_data['form_key'];


				if($oldpass_data==$form_key_pass)
				{

					if($post_data['newpassword']==$post_data['confirmpassword'])
					{
						unset($post_data['oldpassword']);
						unset($post_data['confirmpassword']);
						unset($post_data['form_key']);
						$post_data['password']= md5($post_data['newpassword']);
						unset($post_data['changepass']);
						unset($post_data['newpassword']);						
						$this->Front_model->update_user($user_id,$post_data);
						$this->session->set_flashdata('msg','<div class="alert alert-success">Your password has been changed successfully</div>');
						redirect('user/change_password');
		            }
		             else
					{
						$this->session->set_flashdata('msg','<div class="alert alert-danger">New password and Confirm password not matched.</div>');
						redirect('user/change_password');
					}
					}
				else
				{
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Old password not matched.</div>');
					redirect('user/change_password');
				}
					}			
		}
		$data['RESULT']  = $this->Front_model->get_user_by_id($user_id);
		//print_r($data['RESULT']);
			$this->load->view('front/user/change-password',$data);
	}

	function edit_details()
	{
		  $user_id = $this->session->userdata('USER_ID');
			if(empty($user_id)){ redirect('user/register'); }
			if (isset($_POST['submit'])){

				$this->load->helper(array('form', 'url'));
				$this->load->library('session'); 
				$this->load->library('form_validation');
				$this->form_validation->set_rules('firstname', 'First Name', 'required');
				$this->form_validation->set_rules('lastname', 'Last Name', 'required');
				//$this->form_validation->set_rules('name', 'Name', 'required');
				$this->form_validation->set_rules('address_one', 'Address One', 'required');
				$this->form_validation->set_rules('address_two', 'Address Two', 'required');
				$this->form_validation->set_rules('country', 'Country', 'required');
				$this->form_validation->set_rules('state', 'State', 'required');
				$this->form_validation->set_rules('city', 'City', 'required');
				$this->form_validation->set_rules('zip', 'Zip', 'required');
				$this->form_validation->set_rules('taxid', 'Tax Id', 'required');
				$this->form_validation->set_rules('business_type', 'Business Type', 'required');
				$this->form_validation->set_rules('job_description', 'Job Description', 'required');
                  
				    $firstname = $this->input->post('firstname');
				    $lastname =$this->input->post('lastname');
				    $cmpy   = $this->input->post('company');
				    $business_type   = $this->input->post('business_type');
				    $job_description = $this->input->post('job_description');
					$business = implode(';',(array)$business_type);
					$job = implode(';',(array)$job_description);
				   
					if($cmpy=="")
					{
                     $company = $firstname ."".$lastname ; 
					}
					else
					{
					 $company = $this->input->post('company'); 	
					}


            if ($this->form_validation->run() == FALSE) {
            	$id= $this->input->post('country');
            	$country = $this ->Front_model->fetch_country_name($id);
            	$country_code = $this ->Front_model->fetch_country_code($id);
            	//print_R($country_code);die;
               $data_array = array(
		            	'firstname' =>$firstname,
		            	'lastname' => $lastname,
		            	'name' =>$this->input->post('name'),
		            	'address_one' =>$this->input->post('address_one'),
		            	'address_two' =>$this->input->post('address_two'),
		            	'country' =>$country,
		            	'state' =>$country_code,
		            	'city' =>$this->input->post('city'),
		            	'zip' =>$this->input->post('zip'),
		            	'notes' =>$this->input->post('taxid'),
		            	'business_type' => $business,
		            	'job_description' => $job,
		            	'crm_dept' => $company
		            	
		            	
		             );
                    
		            $this->user_model->add_details($data_array); 
		          
		            $this->session->set_flashdata('message','Account Details Added Successfully!');
		            redirect('user/edit_details');	
		        } 
		    }
              $data['country'] = $this ->Front_model->fetch_country();
		      $this->load->view('front/user/edit-details',$data);
	}

		function fetch_state()
	   {
	   if($this->input->post('id'))
	  {
	   echo $this->Front_model->fetch_state($this->input->post('id'));
	  }
	 }



	function orders()
	{
			$user_id = $this->session->userdata('USER_ID');
			if(empty($user_id)){ redirect('user/register'); }
			$this->load->view('front/user/orders');
	}

	function logout()
  {
      $this->session->unset_userdata('USER_ID');
		  $this->session->unset_userdata('USER_NAME');
			$this->session->unset_userdata('USER_TYPE');
      redirect('user/login');
  }

}
