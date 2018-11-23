<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Welcome_model');
	}

	public function index()
	{
		if (isset($_POST['submit'])){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == TRUE) {
			 $data = array(
            	'email' =>$this->input->post('email'),
            	'created_date' => date('Y-m-d h:i:s')
            );
            $data = $this->Welcome_model->add_newletter($data);
               $this->session->set_flashdata('msg','<div class="alert alert-success">Newsletter successfully saved.</div>');
            redirect();
        }
    }
  
     $this->load->view('front/home');
 }

	public function about_us()
	{
		$data['result'] = $this->Welcome_model->get_about();
		$this->load->view('front/about_us',$data);
	}

	public function support()
	{
		if (isset($_POST['submit'])){
            $this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('subject', 'Subject', 'required');
			$this->form_validation->set_rules('message', 'Message', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == TRUE) {
			$from_email = "info@graphicsmrlin.com";
			$to_email = $this->input->post('email');
			$messages = $this->input->post('message');
			$this->load->library('email');
			$this->email->from($from_email);
			$this->email->to($to_email);
			$this->email->set_mailtype("html");
			$this->email->subject('Contact Us');
			$message = '<html><body>';
			$message.= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message.= "<tr style='background: #eee;'><td colspan='2'>Contact Us</td></tr>";
			$message.= "<tr><td><strong>Email:</strong> </td><td>" . $to_email . "</td></tr>";
			$message.= "<tr><td><strong>Message:</strong> </td><td>" . $messages . "</td></tr>";
			$message.= "</table>";
			$message.= "</body></html>";
			//print_R($message);die;
			$this->email->message($message);
            if($this->email->send()){
			$this->session->set_flashdata('msg', '<div class="alert alert-success">Email sent successfully.</div>');
		}else{
		 $this->session->set_flashdata("email_sent","Error in sending Email.");
		  }
		  redirect('support');
		}
	}
		$this->load->view('front/support');
	}

	public function contact_us()
	{
		if (isset($_POST['submit'])){
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('subject', 'Subject', 'required');
			$this->form_validation->set_rules('message', 'Message', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('mobile', 'Phone', 'required|regex_match[/^[0-9]{10}$/]');
			if ($this->form_validation->run() == TRUE) {
				$from_email = "info@graphicsmrlin.com";
				$name = $this->input->post('name');
				$to_email = $this->input->post('email');
				$mobile = $this->input->post('mobile');
				$subject = $this->input->post('subject');
				$messages = $this->input->post('message');
				$this->load->library('email');
				$this->email->from($from_email, $name);
				$this->email->to($to_email);
				$this->email->set_mailtype("html");
				$this->email->subject('Contact Us');
				$message = '<html><body>';
				$message.= '<table rules="all" style="border-color: #666;" cellpadding="10">';
				$message.= "<tr style='background: #eee;'><td colspan='2'>Contact Us</td></tr>";
				$message.= "<tr><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
				$message.= "<tr><td><strong>Email:</strong> </td><td>" . $to_email . "</td></tr>";
				$message.= "<tr><td><strong>Mobile:</strong> </td><td>" . $mobile . "</td></tr>";
				$message.= "<tr><td><strong>Subject:</strong> </td><td>" . $subject . "</td></tr>";
				$message.= "<tr><td><strong>Message:</strong> </td><td>" . $messages . "</td></tr>";
				$message.= "</table>";
				$message.= "</body></html>";
				$this->email->message($message);
				 if($this->email->send()){
				 	$this->session->set_flashdata('msg', '<div class="alert alert-success">Email sent successfully.</div>');
				 }else{
				 	$this->session->set_flashdata("email_sent","Error in sending Email.");
				 }
				  redirect('contact-us');
				   }
				}
				   $this->load->view('front/contact_us');
	}

	public function faq()
	{   $data['result'] = $this->Welcome_model->get_faq();
		$this->load->view('front/faq',$data);
	}

   public function catalogs()
	{
		$this->load->view('front/catalogs');
	}

}
