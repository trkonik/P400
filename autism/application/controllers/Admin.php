<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	
	{
		
		/*if($this->session->userdata('admin_uid'))
		{*/
		$this->load->view('admin/inc/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/inc/footer');
	}
	
	/*else{
		if($this->input->post('submit')){
			$result=$this->db->where("Email",$this->input->post('Email'))->where("Password",$this->input->post('Password'))->where("Type",'Admin')->get("tbl_user")->result_array();
		
		if($result){

			$sdata['admin_uid']=$result[0]['id'];
			$sdata['Email']=$result[0]['Email'];
			$sdata['Password']=$result[0]['Password'];
				$sdata['Type']=$result[0]['Type'];
				$this->session->set_userdata($sdata);
	
				if($this->session->userdata('Type')=='Admin'){
	
					redirect('Admin');
				}else if($this->session->userdata('Type')=='User'){
					redirect('User');
				}
			

		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger">Invalid Login</div>');
			redirect('Admin');
		}
		}

		$data['title']='Log In';
		

		{

			//$this->load->view('admin/inc/header');//
			$this->load->view('admin/login',$data);
			//$this->load->view('admin/inc/footer');//
		}
			
}
}

	
 public function logout() {
		$this->session->sess_destroy();
		redirect('Admin');
	}*/

	public function login()
	{
		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->form_validation->set_rules('Password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) 
			{

			$this->load->view('pages/login');
			
			}
			else{
			
			
			$result=$this->db->where('Email',$this->input->post('Email'))->where('Password',$this->input->post('Password'))->get('tbl_user')->result_array();

			if($result){


				$sdata['Email']=$result[0]['Email'];
				$sdata['Name']=$result[0]['Name'];
				$sdata['id']=$result[0]['id'];
				$sdata['Type']=$result[0]['Type'];
				
				$this->session->set_userdata($sdata);
				
				if($result[0]['Type']=='admin'){
				
				redirect('Admin');
				
				}
				else{


					$message='<div class="alert alert-danger">Wrong Username or Password</div>';
					
					$this->session->set_flashdata('message',$message);
					
					
					redirect('Login');
					}
					
					
		}else{

			
					$message='<div class="alert alert-danger">Wrong Username or Password</div>';
					
					$this->session->set_flashdata('message',$message);
					
					
					redirect('Login');
		}
			
			}	
			
	}

	public function signup()
	{	

		$data['title']='Sign Up';

		$this->form_validation->set_rules('Name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email|is_unique[tbl_user.email]');
		$this->form_validation->set_rules('Password', 'Password', 'required|min_length[8]|max_length[25]');
		$this->form_validation->set_rules('C_password', 'C_password', 'required|matches[Password]');
		$this->form_validation->set_rules('Address', 'Address', 'required|regex_match[/^[a-zA-Z]/]');
		$this->form_validation->set_rules('Gender', 'Gender', 'required');
		$this->form_validation->set_rules('Status', 'Status', 'required');
		$this->form_validation->set_rules('Fathers_name', 'Fathers_name', 'required|regex_match[/^[a-zA-Z ]/]');
		$this->form_validation->set_rules('Mothers_name', 'Mothers_name', 'required|regex_match[/^[a-zA-Z ]/]');
		$this->form_validation->set_rules('Mobile', 'Mobile', 'required|regex_match[/^[0-9 ]+/]');
		// $this->form_validation->set_rules('Blood_group', 'Blood_group', 'required|validate_blood');//
		$this->form_validation->set_rules('Capability', 'Capability', 'required');
		$this->form_validation->set_rules('Family_oriented', 'Family_oriented', 'required');
		$this->form_validation->set_rules('Type', 'Type', 'required');
		/* $this->form_validation->set_message('validate_blood', 'The %s is Invalid');
	
		function validate_blood($var){

			if($var=='O+'||$var=='A+'||$var=='B+'||$var=='AB+'||$var=='O-'||$var=='B-'||$var=='AB-'||$var=='A-'){
					return true;
			    }else{

			    	return false;
			    }


		}*/
		
		
		
 
		if ($this->form_validation->run() == FALSE)
		{

		$this->load->view('pages/signup',$data);

		}
		else
		{

			$idata['Name']=$this->input->post('Name');
			$idata['Email']=$this->input->post('Email');
			$idata['Password']=$this->input->post('Password');
			$idata['C_password']=$this->input->post('C_password');
			$idata['Address']=$this->input->post('Address');
			$idata['Gender']=$this->input->post('Gender');
			$idata['Status']=$this->input->post('Status');
			$idata['Fathers_name']=$this->input->post('Fathers_name');
			$idata['Mothers_name']=$this->input->post('Mothers_name');
			$idata['Mobile']=$this->input->post('Mobile');
			//$idata['Blood_group']=$this->input->post('Blood_group');
			$idata['Fathers_name']=$this->input->post('Fathers_name');
			$idata['Capability']=$this->input->post('Capability');
			$idata['Family_oriented']=$this->input->post('Family_oriented');
			$idata['Type']=$this->input->post('Type');

			$this->db->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


}
	


	