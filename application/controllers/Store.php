<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

	 public function index()
		{
			$this->load->view('common/header');
			$this->load->view('index');
		}
		public function currentRating()
		 {
			 $this->load->view('common/header');
			 $this->load->view('currentrating');
		 }
		 public function ratingHistory()
			{
				$this->load->view('common/header');
				$this->load->view('ratinghistory');
			}
			public function complainManagement()
			 {
				 $this->load->view('common/header');
				 $this->load->view('complainmanagement');
			 }
			 public function Profile()
				{
					$this->load->view('common/header');
					$this->load->view('storeprofile');
				}

  }
