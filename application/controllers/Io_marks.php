<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Io_marks extends CI_Controller {

	public function index()
	{
		if(isset($this->session->userdata['sessiondata']['user_id']) && intval($this->session->userdata['sessiondata']['user_type']) == 2)
        {
        	$user = $this->session->userdata['sessiondata'];

        	$fldata = $this->session->flashdata('data');

        	if ($fldata['userid'] != '') {

        		//$fldata['userid'] = 'USR0002';

        		$this->load->model('io_model');
	    		$user_data = $this->io_model->get_user_data($fldata['userid']);

	    		$from = new DateTime($user_data['dob']);
				$to   = new DateTime('today');
				$user_data['age'] = $from->diff($to)->y;

	            $user_details = $this->io_model->get_details($fldata['userid']);

                //echo "<pre>"; print_r($user_details); exit;

			  	$data = array('user'=> $user,
			  				  'module'=>'io-marks-view',
			  				  'user_data'=> $user_data,
	                          'user_details' => $user_details
			  				);
			  	
				$this->load->view('page-view', $data);

        	} else {
        		redirect(base_url().'io_dashboard');
        	}
        }
		else{
			redirect(base_url().'auth/logout');
		}
	}

	function add_marks(){

		$input = urldecode(file_get_contents('php://input'));

        $received = json_decode($input, true);

        $user = $this->session->userdata['sessiondata'];
        
        $data = array();

        foreach($received as $value)
        {
        	$data[$value['name']] = $value['value'];  
        }

        $this->load->model('io_model');

        $result = $this->io_model->add_marks($user['user_id'],$data);
            
        $resp = $result;
            $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
            ->_display();
            exit;
	}

    function update_details(){

        $input = urldecode(file_get_contents('php://input'));

        $received = json_decode($input, true);

        $user = $this->session->userdata['sessiondata'];
        
        $data = array();

        foreach($received as $value)
        {
            $data[$value['name']] = $value['value'];  
        }

        $this->load->model('io_model');

        $result = $this->io_model->update_details($user['user_id'],$data);

        $data = array('userid' => $data['user_id']);
        $this->session->set_flashdata('data', $data);
            
        $resp = $result;
            $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
            ->_display();
            exit;

    }
}
