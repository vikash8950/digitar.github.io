<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_marks extends CI_Controller {

	public function index()
	{
		if(isset($this->session->userdata['sessiondata']['user_id']) && intval($this->session->userdata['sessiondata']['user_type']) == 3)
        {
        	$user = $this->session->userdata['sessiondata'];

        	$this->load->model('user_model');
    		$user_data = $this->user_model->get_data($user['user_id']);

    		$from = new DateTime($user_data['dob']);
			$to   = new DateTime('today');
			$user_data['age'] = $from->diff($to)->y;

            $user_details = $this->user_model->get_details($user['user_id']);

            //echo "<pre>"; print_r($user_details); exit;

		  	$data = array('user'=> $user,
		  				  'module'=>'user-marks-view',
		  				  'user_data'=> $user_data,
                          'user_details' => $user_details
		  				);
		  	
			$this->load->view('page-view', $data);
        }
		else{
			redirect(base_url().'auth/logout');
		}
	}

	function update_details(){

		$input = urldecode(file_get_contents('php://input'));

        $received = json_decode($input, true);

        $user = $this->session->userdata['sessiondata'];
        
        $s_data = array();
        $w_data = array();
        $data = array();

        foreach($received as $value)
        {
            if ($value['name'] == 'strength' && !empty($value['value'])) {
        		$s_data[] = $value['value'];  
        	} else if ($value['name'] == 'weakness' && !empty($value['value'])) {
                $w_data[] = $value['value'];  
            } else {
        		$data[$value['name']] = $value['value'];  
        	}
        }

        $this->load->model('user_model');

        $result = $this->user_model->update_details($user['user_id'],$w_data,$s_data);
            
        $resp = $result;
            $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
            ->_display();
            exit;
	}
}
