<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{ 
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('templates/auth_header');
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');
	}
	public function registration()
	{
		$this->form_validation->set_rules('name', 'Name','required|trim');
		$this->form_validation->set_rules('email','Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password1', 'password','required|trim|min_length[3]|matches[password2]',
		[
			'matches' => 'password dont match!', 
			'min_length' => 'password too short!'
		]);
		$this->form_validation->set_rules('password2', 'password','required|trim|matches[password1]');

		if($this->form_validation->run() == FALSE) {
		$data['title'] = 'Travosea Registration';
		$this->load->view('templates/auth_header' , $data);
		$this->load->view('auth/registration');
		$this->load->view('templates/auth_footer');
		} 
		else {
			$data = [
			'name' => $this->input->post('name'),
			'email' =>$this->input->post('email'),
			'image' => 'default.jpg',
			'password' => password_hash($this->input->post('password1'), 
			PASSWORD_DEFAULT),
			'role_id' => 2,
			'is_active' => 1,
			'date_created' => time()
			];

			$this->db->insert('user',$data);
			redirect('auth');
		}
	}
}

