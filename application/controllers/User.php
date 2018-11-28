<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	    $this->load->model('Front_model');
	    $this->load->model('Product_model');
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
							$company_data['UserID'] = $user_id;
							$company_data['name'] = $_POST['company'];
							$company_data['business_type'] = $business_types;
							$company_data['crm_dept'] = 'Customer (Trade) 40%';
							$company_data['notes'] = $_POST['taxid'];
							$dept_id = $this->user_model->insert_user_contact($company_data); // insert company

							$location_data['row_type'] = 'category';
							$location_data['UserID'] = $user_id;
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
                            $user =$ins_user['name'];
                            $use_email = $user_data_one['email'];
                            $use_fax = $user_data_two['fax'];
                            $use_phone = $user_data_two['phone'];

                            $url =  base_url('user/verify/'.create_slug_reset('id='.$user_id.'&afteraction=&prodid='));
                             $from_email = "contactus@friedmanmirrors.com";
						 $to_email = $this->input->post('email');
						$subject = "Friedman Mirrors - Registration Verification";
						$message = "Dear $user ,<br><br>\n\n";
						$message .= "Please click the following link to complete your registration with Friedman Mirrors.<br><br>\n\n";
						$link = $url;
						
						$this->load->library('email');
						$this->email->from($from_email);
						$this->email->to($user_data_one['email']);
						$this->email->set_mailtype("html");
						$this->email->subject('Contact Us');
						$message .= "<a href='$link'>Verify Email</a><br><br>\n\n";
						$message .= "Or this link if the above doesn't work:<br>\n";
						$message .= "<a href='$link'>$link</a><br><br>\n\n";
						$message .= "If you have problems with the above link please try to copy and paste it into your browser.<br><br>\n\n";
						$message .= "Thank you,<br>\n";
						$message .= "Friedman Mirrors<br><br>\n\n";
					
						$message .= "For assistance please contact<br><br>\n\n";
						$message .= "$user<br><br>\n\n";
						$message .= "Friedman Brothers<br><br>\n\n";
						$message .= "$use_email<br><br>\n\n";
						$message .= "Phone: $use_phone<br><br>\n\n";
						$message .= "Fax: $use_fax<br><br>\n\n";
						//print_R($message); 
						//$this->email->message($message);
			           // if($this->email->send()){
						$this->session->set_flashdata('msg_register', 
							'<div class="alert alert-success">An email has been sent to the email address you registered with.  Please check your email inbox and click the link in that email to complete your registration.<br><br>
		                       <span style="color:red;">Please be sure to check your Junk Mail or Spam Mail box for our system mail, and mark it as Not Spam in case it is there.</span>
                                <br><br>
								Thank you!
								<br><br>
								<br><br>
                           </div>');
					  // }else{
					    $this->session->set_flashdata("email_sent","There was an error with our mailing system and your registration can not be verified.  Please <a href='<?php echo base_url()/contact-us?>'>Contact Us</a> to complete your registration.");
					 // }
                            $this->user_model->insert_user_contact($contact_data); //  insert contact
							/* insert in contacts table  */
                            
							$this->session->unset_userdata('step_one');
							$this->session->unset_userdata('step_two');
                            $user_data = 	$this->user_model->get_user_by_id($user_id);
							//$user_login_data = array('USER_ID'=>$user_data[0]->id,'USER_NAME'=>$user_data[0]->name,'USER_TYPE'=>$user_data[0]->usertype);
							//$this->session->set_userdata($user_login_data);
                      //redirect('user/login');
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



	
	function address()
	{
			$user_id = $this->session->userdata('USER_ID');
			if(empty($user_id)){ redirect('user/register'); }
			$data['result']  = $this->Front_model->get_address_by_user($user_id);
			$this->load->view('front/user/address',$data);
	}

	function orders()
	{
			$user_id = $this->session->userdata('USER_ID');
			if(empty($user_id)){ redirect('user/register'); }
			$this->load->view('front/user/orders');
	}
	
		function fetch_state()
	   {
	   if($this->input->post('id'))
	  {
	   echo $this->Front_model->fetch_state($this->input->post('id'));
	  }
	 }


	function logout()
  {
      $this->session->unset_userdata('USER_ID');
		  $this->session->unset_userdata('USER_NAME');
			$this->session->unset_userdata('USER_TYPE');
      redirect('user/login');
  }


  /*--------------------updated on 26-11-2018 by priyanka ------------*/
  public function verify(){
	   $id=$this->uri->segment('4');;
	  if ($id != "") {
	 	
	 	 $user_id = $this->user_model->db_update($id);
	 	$this->session->set_flashdata('msge','<div class="alert alert-danger">Thank you for verifying your account!
			<br><br>
			Trade accounts will be reviewed before being upgraded to view online
			pricing and access to download price lists.  This may take up to 24hrs.
			Please call if you need pricing immediately.</div>,<div><center>Login to Proceed.</center></div>	<br><br>');
                    }else{
                    	$this->session->set_flashdata('msge','<div class="alert alert-danger">Sorry, we can not process your request!</div>');
                    		 }
	 redirect('user/login');
}

   public function forgot_password()
	{
	  
        if(isset($_POST['forgot_password']))
			{
			 $this->form_validation->set_rules('firstname', 'firstname', 'trim|required');
			 $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
			 $this->form_validation->set_error_delimiters('<div class="has-error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			 if ($this->form_validation->run() == TRUE){
                $firstname = $this->input->post('firstname');
                $lastname = $this->input->post('lastname');
                $email = $this->input->post('email'); 

                if(!empty($email) || !empty($firstname) || !empty($lastname)){
                  $user_data = $this->user_model->user_log($firstname,$lastname,$email);
                    $id= @$user_data[0]->UserID;
                    if($id !=""){
		            	$url =  base_url('user/resetpassword/'.create_slug_reset('id='.$user_data[0]->UserID));
		            	$this->load->library('email');
						$this->email->from("contact@friedmanmirrors.com");
						$this->email->to($email);
						$this->email->set_mailtype("html");
						$this->email->subject('Friedman Mirrors - Contact Details');
		            	$uid = $user_data[0]->UserID;
					    $username = $user_data[0]->firstname;
					    $link =     "$url";
						$message = "Hello $firstname $lastname,<br><br>\n\n";
						$message .= "Your login name is: $username <br><br>\n\n";
						$message .= "Please use the link below to reset your password:<br><br>\n\n";
						$message .= "<a href='$link'>$link</a><br><br>\n\n";
						$message .= "Thank you,<br><br>\n\n";
						$message .= "Friedman Mirrors<br><br>\n\n";
						//print_R($message);
                       // $this->email->message($message);
			           // if($this->email->send()){
						$this->session->set_flashdata('msg', '<div class="alert alert-success">Thank you, a message has been sent to the email address you provided.  Please check your email for further instructions to update your password.</div>');
					  // }else{
					    $this->session->set_flashdata("email_sent","Sorry, there was an error with our mailing system.");
					 // }

					}

					else{
						$this->session->set_flashdata('msg', '<div class="alert alert-danger">Sorry, we did not find any records that match these details, please try again and be careful to spell correctly.</div>');
					}
                  
		         }

		         else
		         {
                   $this->session->set_flashdata('msg', '<div class="alert alert-success">Sorry, we did not find any records that match these details, please try again and be careful to spell correctly.</div>');
		         }
		     }
		 }
		
			$this->load->view('front/user/forgot-password');
	}

  public function resetpassword(){
	 $user_id = $this->uri->segment('4');
  
	if($user_id == ""){
		$this->session->set_flashdata('msge','<div class="alert alert-success">Error:  We can not process this request, please contact our staff for assistance.</div>');
	}

if(isset($_POST['changepass']))
		{
			$post_data = $this->input->post();
			if($post_data['newpassword']==$post_data['confirmpassword'])
					{
						unset($post_data['oldpassword']);
						unset($post_data['confirmpassword']);
						$post_data['password']= md5($post_data['newpassword']);
						unset($post_data['changepass']);
						unset($post_data['newpassword']);						
						$this->user_model->update_user($user_id,$post_data);
						$this->session->set_flashdata('msge','<div class="alert alert-success">Thank you, your password has been updated .</div>');
						//redirect('user/login');
		            }
		             else
					{
						$this->session->set_flashdata('msge','<div class="alert alert-danger">New password and Confirm password not matched.Please try again.</div>');
						//redirect('user/login');
					}
					
						
		}
		$data['RESULT']  = $this->Front_model->get_user_by_id($user_id);
	    $this->load->view('front/user/resetpassword',$data);
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
		            	'name' => $company
		            	
		            	
		             );
                    
		            $this->Front_model->update_details($data_array,$user_id); 
		          
		            $this->session->set_flashdata('message','Account Details Added Successfully!');
		            redirect('user/edit_details');	
		        } 
		    }
		      $data['user_data'] = $this ->Front_model->fetch_user_account_data($user_id);
		    //  $business_type = $data['user_data'][0]->business_type;
		      // $data['checkbox_array'] = explode(",",$business_type);
		       //print_R($checkbox_array);
		  // echo "<pre>";print_r($data['user_data'] );
              $data['country'] = $this ->Front_model->fetch_country();

		      $this->load->view('front/user/edit-details',$data);
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
				$this->session->set_flashdata('msge','<div class="alert alert-danger">Please fill all field</div>');
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
						$this->session->set_flashdata('msge','<div class="alert alert-success">Your password has been changed successfully</div>');
						redirect('user/change_password');
		            }
		             else
					{
						$this->session->set_flashdata('msge','<div class="alert alert-danger">New password and Confirm password not matched.</div>');
						redirect('user/change_password');
					}
					}
				else
				{
					$this->session->set_flashdata('msge','<div class="alert alert-danger">Old password not matched.</div>');
					redirect('user/change_password');
				}
					}			
		}
		$data['RESULT']  = $this->Front_model->get_user_by_id($user_id);
		//print_r($data['RESULT']);
			$this->load->view('front/user/change-password',$data);
	}
	
	/*=====Added By priiyanka on 28 nov 18 for add whishlist============*/
		function my_wishlist()
	{
		$userid = $this->session->userdata('USER_ID');
		if(empty($userid)){ redirect('user/login'); }
		
		$data['RESULT']  = $this->user_model->get_user_by_id($userid);

		$data['WISHLIST']  = $this->Product_model->get_wishlist_data($userid);	
		//print_R($data['WISHLIST'] ); 	
		$this->load->view('front/user/wishlist',$data);
	}

}
