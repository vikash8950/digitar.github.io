<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{	
		$this->load->model('auth_model');

		if(isset($this->session->userdata['sessiondata']['user_id']) && isset($this->session->userdata['sessiondata']['user_type']))
        {
        	$user_type = intval($this->session->userdata['sessiondata']['user_type']);

        	switch ($user_type) {
        		case 1:
        			redirect(base_url().'sro_dashboard');
        			break;

        		case 2:
        			redirect(base_url().'io_dashboard');
        			break;

        		case 3:
        			redirect(base_url().'user_dashboard');
        			break;
        		
        		default:
        			redirect(base_url().'user_dashboard');
        			break;
        	}
			
        } else {
			$fldata = $this->session->flashdata('data');

			$data = array('msg' => $fldata['msg']);

			$this->load->view('auth-view', $data);
		}
	}

	function login(){

		$username = $this->input->post('email');
		$password = $this->input->post('pwd');

		$this->load->model('auth_model');

		$user = $this->auth_model->verify($username, $password);
			
		if($user){
			$user_data =  array(
					'user_id' => $user['user_id'],
					'email' => $user['email'],
					'first_name' => $user['first_name'],
					'last_name' => $user['last_name'],
					'user_type' => $user['user_type'],
					'mobile' => $user['mobile'],
					'member_since' => $user['member_since']
			);

			$this->session->set_userdata('sessiondata',$user);
			
			$user_type = intval($this->session->userdata['sessiondata']['user_type']);

        	switch ($user_type) {
        		case 1:
        			redirect(base_url().'sro_dashboard');
        			break;

        		case 2:
        			redirect(base_url().'io_dashboard');
        			break;

        		case 3:
        			redirect(base_url().'user_dashboard');
        			break;
        		
        		default:
        			redirect(base_url().'user_dashboard');
        			break;
        	}
		}
		else{
			$data = array('msg' => 'Username or Password is wrong!');
			$this->session->set_flashdata('data', $data);
			redirect(base_url().'auth');
		}
	}// end of login function

	function logout(){
		$this->session->sess_destroy();
		redirect('auth');
	}// end of logout function 

}// end of function 