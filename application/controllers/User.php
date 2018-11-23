<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
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

			$user_data_one = $this->session->userdata('step_one');
			$user_data_two = $this->session->userdata('step_two');

			if(isset($_POST['register-step-1']))
			{
					$this->form_validation->set_rules('username', 'username', 'trim|required|is_unique[users.name]');
					$this->form_validation->set_rules('fname', 'first name', 'trim|required');
					$this->form_validation->set_rules('lname', 'last name', 'trim|required');
					$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
					$this->form_validation->set_rules('pwd', 'password', 'trim|required|min_length[6]');
					$this->form_validation->set_rules('cpwd', 'confirm password', 'trim|required|matches[pwd]');
					$this->form_validation->set_error_delimiters('<div class="has-error"><i class="fa fa-warning"></i>&nbsp', '</div>');
					if ($this->form_validation->run() == TRUE)
					{
							$step_one = array('step_one'=>$_POST);
							$this->session->set_userdata($step_one);
							redirect('user/register?step=two');
					}
			}


			if(isset($_POST['register-step-2']))
			{
					if(empty($user_data_one)){ redirect(''); }

					$this->form_validation->set_rules('address1', 'address one', 'trim|required');
					$this->form_validation->set_rules('address2', 'address two', 'trim|required');
					$this->form_validation->set_rules('address3', 'address three', 'trim|required');
					$this->form_validation->set_rules('country', 'country', 'trim|required');
					$this->form_validation->set_rules('state', 'state', 'trim|required');
					$this->form_validation->set_rules('city', 'city', 'trim|required');
					$this->form_validation->set_rules('zip', 'zip', 'trim|required');
					$this->form_validation->set_rules('phone', 'phone no.', 'trim|required');
					$this->form_validation->set_rules('fax', 'fax', 'trim|required');
					$this->form_validation->set_error_delimiters('<div class="has-error"><i class="fa fa-warning"></i>&nbsp', '</div>');
					if ($this->form_validation->run() == TRUE)
					{
							$step_two = array('step_two'=>$_POST);
							$this->session->set_userdata($step_two);
							redirect('user/register?step=three');
					}
			}



			if(isset($_POST['register-step-3']))
			{
					if(empty($user_data_one) || empty($user_data_two)){ redirect(''); }
					$this->form_validation->set_rules('company', 'company name', 'trim|required');
					$this->form_validation->set_rules('taxid', 'tex id', 'trim|required');
					$this->form_validation->set_rules('other', 'other information', 'trim|required');
					$this->form_validation->set_rules('business_types[]', 'business types', 'trim|required');
					$this->form_validation->set_rules('job_descriptions[]', 'job descriptions', 'trim|required');

					$this->form_validation->set_error_delimiters('<div class="has-error"><i class="fa fa-warning"></i>&nbsp', '</div>');
					if ($this->form_validation->run() == TRUE)
					{
							/* insert in users table  */
							$ins_user['name'] = $user_data_one['username'];
							$ins_user['password'] = md5($user_data_one['pwd']);
							$ins_user['usertype'] = 'Registered';
							$ins_user['xml'] = '<xml></xml>';
							$ins_user['user_status'] = 'unverified';
							$user_id = $this->user_model->insert_user($ins_user);  // insert in users table
							/* insert in users table  */

							/* insert in users_info table  */
							$ins_user_info['name'] = $user_data_one['username'];
							$ins_user_info['row_type'] = 'user_joined';
							$ins_user_info['user_joined'] = date('Y-m-d-h-i-s'); //after
							$this->user_model->insert_user_info($ins_user_info);	 // insert in users_info table
							/* insert in users_info table  */

							/* insert in contacts table  */
							$business_types = implode(";",$_POST["business_types"]);
							if($business_types == null) {		$business_types = "";   }
							$company_data['row_type'] = 'department';
							$company_data['name'] = $_POST['company'];
							$company_data['business_type'] = $business_types;
							$company_data['crm_dept'] = 'Customer (Trade) 40%';
							$company_data['notes'] = $_POST['taxid'];
							$dept_id = $this->user_model->insert_user_contact($company_data); // insert company

							$location_data['row_type'] = 'category';
							$location_data['DeptID'] = $dept_id;
							$location_data['name'] = $user_data_two['city'];
							$location_data['address_one'] = $user_data_two['address1'];
							$location_data['address_two'] = $user_data_two['address2'];
							$location_data['address_three'] = $user_data_two['address3'];
							$location_data['city'] = $user_data_two['city'];
							$location_data['state'] = $user_data_two['state'];
							$location_data['zip'] = $user_data_two['zip'];
							$location_data['country'] = $user_data_two['country'];
							$this->user_model->insert_user_contact($location_data); // insert location

							$job_descriptions = implode(";",$_POST["job_descriptions"]);
							$contact_data['row_type'] = 'contact';
							$contact_data['UserID'] = $user_id;
							$contact_data['DeptID'] = $dept_id;
							$contact_data['CatID'] = 'NULL';
							$contact_data['firstname'] = $user_data_one['fname'];
							$contact_data['lastname'] = $user_data_one['lname'];
							$contact_data['phone'] = $user_data_two['phone'];
							$contact_data['phone_ext'] = '';
							$contact_data['email'] = $user_data_one['email'];
							$contact_data['fax'] = $user_data_two['fax'];
							$contact_data['title'] = $_POST['other'];
							$contact_data['job_description'] = $job_descriptions;
							$this->user_model->insert_user_contact($contact_data); //  insert contact
							/* insert in contacts table  */
							$this->session->unset_userdata('step_one');
							$this->session->unset_userdata('step_two');

							$user_data = 	$this->user_model->get_user_by_id($user_id);
							$user_login_data = array('USER_ID'=>$user_data[0]->id,'USER_NAME'=>$user_data[0]->name,'USER_TYPE'=>$user_data[0]->usertype);
							$this->session->set_userdata($user_login_data);
							redirect('user/dashboard');
					}
			}


			if(isset($_GET['step']) && $_GET['step']=='two')
			{
					$this->load->view('front/user/register-two');
			}
			elseif(isset($_GET['step']) && $_GET['step']=='three')
			{
					$this->load->view('front/user/register-three');
			}
			else
			{
					$this->load->view('front/user/register-one');
			}


	}

	function dashboard()
	{
			$user_id = $this->session->userdata('USER_ID');
			if(empty($user_id)){ redirect('user/register'); }
			$this->load->view('front/user/dashboard');
	}

	function change_password()
	{
			$user_id = $this->session->userdata('USER_ID');
			if(empty($user_id)){ redirect('user/register'); }
			$this->load->view('front/user/change-password');
	}

	function edit_details()
	{
			$user_id = $this->session->userdata('USER_ID');
			if(empty($user_id)){ redirect('user/register'); }
			$this->load->view('front/user/edit-details');
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
