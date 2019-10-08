<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('users_model');
		$this->load->model('add_model');
	}

	public function index()
	{
		// $this->load->view('welcome_message'); //login page
		if($this->session->userdata('welcome'))
		{
		redirect('Dashboard');
	}
	else
	{
		$this->load->view('welcome_message');
	}
	}

	public function login()
	{
		$output = array('error'=>false);
		$data = array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
		);
			$data=$this->users_model->login($data);
			if($data)
			{
				$this->session->set_userdata('welcome',$data);

				$output['message'] = 'Login Plese wait.....';
			}
			else
			{
				$output['error'] = true;
				$output['message'] = 'Login failed user not found';
			}
			echo json_encode($output); 
	}



	public function dashboard()
	{
		$data['fetch_data'] = $this->add_model->fetch();
		// redirect('Dashboard');

		$this->load->view('common/adminheader'); 
		$this->load->view('admin/dashboard', $data); 

	}


	public function logout(){
		//load session library
		
		$this->session->unset_userdata('welcome');
		redirect('/');
	}


		public function addBook()
	{
		if(!$this->input->post()){
		$data['title'] = 'Product';
		$this->load->view('common/adminheader',$data); 
		$this->load->view('admin/addBook'); 
		}else{

				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'jpg|gif|jpg|png';
                $config['max_size']             = 1000;
               

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                      $store="default.png";
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $store = $data['upload_data']['file_name'];

}
				$alldata = array(
					'image'=>$store,
					'author_name'=>$this->input->post('author_name'),
					'description'=>$this->input->post('description'),
				);
			//	print_r($data);
				$this->add_model->addbook($alldata);
				redirect('Dashboard');
		
	}
	
	}

		public function addSub()
	{
		if(!$this->input->post()){
		$data['title'] = 'Sub Product';
		$data['mainProduct']=$this->add_model->getMains();
		//print_r($data);
		$this->load->view('common/adminheader',$data); 
		$this->load->view('admin/addSub',$data); 
		}else{
			
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'jpg|gif|jpg|png';
                $config['max_size']             = 1000;
               

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                      // print_r($error);
                        $store="default.png";
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $store = $data['upload_data']['file_name'];

}
				$alldata = array(
					'image'=>$store,
					'author_name'=>$this->input->post('author_name'),
					'main_cat'=>$this->input->post('main_cat'),
					'description'=>$this->input->post('description'),
				);
			//	print_r($data);
				$this->add_model->addbook($alldata);
				redirect('Dashboard');
		
	}
	
	}

}
