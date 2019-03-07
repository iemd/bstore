<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPanel extends CI_Controller {



	 public function index()
		{
			//$this->load->view('common/header');
			$this->load->view('login');
		}


	public function Dasboard()
	{
		/*$this->load->model('UserModel');
		$this->load->model('MeetingModel');
		$role = $this->session->userdata('role');
		$asm_id = $this->session->userdata['ID'];
		$data['allmeetings'] = $this->MeetingModel->getMeetings();
		$data['todaymeetings'] = $this->MeetingModel->getTodayMeetings();
    */
		$this->load->view('common/header');
		$this->load->view('index');
	}

	public function CustomerList()
	{
		$this->load->model('DataModel');
		$data['Totalinvoice'] = $this->DataModel->totalinvoicecount();
		//print_r($data['Totalinvoice']);die;
		$this->load->view('common/header');
		$this->load->view('customer_list',$data);
	}

	public function adminloginAction()
	{
		//$name = $this->input->post('name');
		$username = $this->input->post('username');
		$password =  $this->input->post('password');
		//$email = $this->input->post('email');
		$remember = $this->session->set_userdata('remember_me', TRUE);
		$this->load->model('UserModel');
		$result = $this->UserModel->authenticate($username, $password, $remember);
		if($result >0){
			redirect(base_url('AdminPanel/Dasboard'));
		}else{
			$message="<span style='color:red'><b>Access Denied Please Login First...</b></span>";
		}
		$this->session->set_flashdata('message', $message);
		redirect(base_url('AdminPanel'));
	}

	public function logOut()
	{
		$this->session->sess_destroy();
		redirect(base_url('AdminPanel'));
	}
}
