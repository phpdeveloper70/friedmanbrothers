<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		
	}

    public function listing()
	{
		$data['result'] = $this->Admin_model->get_all_users(); 
		$this->load->view('admin/user/listing',$data);
	}
	
    public function index()
	{
		//$this->check_admin_login('IS_LOGIN');
		
			if(isset($_POST['login-btn']))
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
											$user_data = $this->Admin_model->admin_login($username,$password);
											 
											if(count($user_data)>0)
											{
													$user_login_data = array('ADMIN_ID'=>$user_data[0]->id,'USER_NAME'=>$user_data[0]->name,'USER_TYPE'=>$user_data[0]->usertype);
				  								
												 $this->session->set_userdata($user_login_data);
													redirect('admin/dashboard');
											}else
											{
												$this->session->set_flashdata('message','Error! Invalid login credentials.');
												redirect('admin');
											}
							}
							else
							{
									$this->session->set_flashdata('message','Error! Invalid login credentials.');
									redirect('admin');
							}
					}
			}
		$this->load->view('admin/login');
	}


	public function logout()
	{
		$this->session->unset_userdata('ADMIN_ID');
		$this->session->unset_userdata('ADMIN_EMAIL');
		$this->session->unset_userdata('ADMIN_ROLE');
		$this->session->sess_destroy();
		redirect('admin');
	}

	function check_admin_login($check_type)
	{
		if($check_type=='IS_LOGIN')
		{
			$admin_id = $this->session->userdata('ADMIN_ID');
			
			if(!empty($admin_id))
			{
				redirect('admin/dashboard');
			}
		}
		if($check_type=='IS_NOT_LOGIN')
		{
			$admin_id = $this->session->userdata('ADMIN_ID');
			if(empty($admin_id))
			{
				redirect('admin');
			}
		}
	}


	public function dashboard()
	{
		$data['num_results'] = $this->Admin_model->count_all_users();
		$data['cat_results'] = $this->Admin_model->count_all_categories();
		$this->load->view('admin/dashboard',$data);
	}


	 public function listing_admin()
	{
		$data['result'] = $this->Admin_model->get_all_admin(); 
		$this->load->view('admin/admin/listing',$data);
	}

	public function add()
	{
	if(isset($_POST['submit']))
	{ 
	//print_r($_POST);die;
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		if ($this->form_validation->run() == TRUE)
		{
			$name  			= $_POST['name'];
			$usertype   	= $_POST['usertype'];
			$mail_user 		= $_POST['mail_user'];
			$password	    = $_POST['password'];
			$user_status 		= $_POST['user_status'];

               $postdata = array (
                     	'name'           	 => $name,
		                'usertype'           => $usertype,
		                'mail_user'          => $mail_user,
		                'password'           => md5($password),
		                'user_status'             => $user_status,
		               
		          );
                 $this->Admin_model->save_user_data($postdata);


		$this->session->set_flashdata('msg', '<div class="alert alert-success">Record has been successfully saved.</div>');
		redirect('admin/admin/listing_admin');
		}
			
	}
	$data['result'] = $this->Admin_model->get_all_user_type(); 
	$this->load->view('admin/admin/add',$data);
	}

}
