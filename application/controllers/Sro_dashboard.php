<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sro_dashboard extends CI_Controller {

	public function index()
	{
		if(isset($this->session->userdata['sessiondata']['user_id']) && intval($this->session->userdata['sessiondata']['user_type']) == 1)
        {
        	$user = $this->session->userdata['sessiondata'];

        	$this->load->model('sro_model');
    		$users = $this->sro_model->get_data($user['user_id']);

		  	$data = array('users'=> $users,
		  				  'module'=>'sro-dashboard-view'
		  				);

            //echo "<pre>"; print_r($data); exit;
		  	
			$this->load->view('page-view', $data);
        }
		else{
			redirect(base_url().'auth/logout');
		}
	}

	function assign_marks(){

		$input = urldecode(file_get_contents('php://input'));

        $userid = json_decode($input, true);

        $user = $this->session->userdata['sessiondata'];
        
        $data = array('userid' => $userid);
        $this->session->set_flashdata('data', $data);
            
        $resp = true;
            $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
            ->_display();
            exit;
	}
}
