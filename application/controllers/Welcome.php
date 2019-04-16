<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message'); //login page
	}
	public function dashboard()
	{
		$this->load->view('common/adminheader'); 
		$this->load->view('admin/dashboard'); 
	}
		public function addBook()
	{
		if(!$this->input->post()){
		$data['title'] = 'Book';
		$this->load->view('common/adminheader',$data); 
		$this->load->view('admin/addBook'); 
		}else{

		}
	
	}
}
