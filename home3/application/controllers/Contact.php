<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
		public function __construct() 
		{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('cookie');
		$this->load->helper('security');
		$this->load->model('Home_model');
	
		}
	
	
	public function index(){
		if(!$this->session->userdata('saket_details'))
		{
				
				$this->load->view('admin/header');
				$this->load->view('admin/contact');
				$this->load->view('admin/footer');
		        
	     }else{
		redirect('home');
		
	}
}	
	
	public function contactpost(){
		if(!$this->session->userdata('saket_details'))
		{
				$post=$this->input->post();
				//echo'<pre>';print_r($post);exit;
				$addcontact=array(
				'name'=>isset($post['name'])?$post['name']:'',
				'email'=>isset($post['email'])?$post['email']:'',
				'subject'=>isset($post['subject'])?$post['subject']:'',
				'phone'=>isset($post['phone'])?$post['phone']:'',
				'messege'=>isset($post['messege'])?$post['messege']:'',
				'create_at'=>date('Y-m-d H:i:s'),
				);
				//echo'<pre>';print_r($addcontact);exit;
				$save=$this->Home_model->save_contact($addcontact);
				//echo'<pre>';print_r($save);exit;
				if($save){
						$this->load->library('email');
						$this->load->library('email');
						$this->email->set_newline("\r\n");
						$this->email->set_mailtype("html");
						$this->email->from($post['email']);
						$this->email->to('info@psaaket.com');
						$this->email->subject('Contact us - Request');
						//$body = $this->load->view('email/contactus.php',$data,true);
						//$html = $this->load->view('email/orderconfirmation.php', $data, true); 

						$msg='Name:'.$post['name'].'<br> Email :'.$post['email'].'<br> Subject :'.$post['subject'].'<br>   Phone  number :'.$post['phone'].'<br> Message :'.$post['messege'];
						$body=$this->email->message($msg);
						//echo'<pre>';print_r($body);exit;
						$this->email->send();
						
						
						$this->session->set_flashdata('success',"Your message was successfully sent.");
						redirect($this->agent->referrer());
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect($this->agent->referrer());
			}
				
		        
	     }else{
		redirect('home');
		
	}
}	
	
	
	
	
	}
	
	
	
	/*
	public  function contactpost(){
	$post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$addcontact=array(
				'name'=>isset($post['name'])?$post['name']:'',
				'email'=>isset($post['email'])?$post['email']:'',
				'phone'=>isset($post['phone'])?$post['phone']:'',
				'message'=>isset($post['message'])?$post['message']:'',
				'create_at'=>date('Y-m-d H:i:s'),
				);
				$save=$this->Header_model->save_contactus($addcontact);
				if(count($save)>0){
						$details=$this->Header_model->check_contact_details();
						$this->load->library('email');
						$this->load->library('email');
							$this->email->set_newline("\r\n");
							$this->email->set_mailtype("html");
						$this->email->from($post['email']);
						$this->email->to($details['email']);
						$this->email->subject('Contact us - Request');
						//$body = $this->load->view('email/contactus.php',$data,true);
						//$html = $this->load->view('email/orderconfirmation.php', $data, true); 

						$msg='Name:'.$post['name'].'<br> Email :'.$post['email'].'<br> Phone  number :'.$post['phone'].'<br> Message :'.$post['message'];
						$this->email->message($msg);
						//echo $body;exit;
						$this->email->send();
						
						//echo "test";exit;
						$this->session->set_flashdata('success',"Your message was successfully sent.");
						redirect($this->agent->referrer());
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect($this->agent->referrer());
			}
}
	
	*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

