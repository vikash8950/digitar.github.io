<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sro_marks extends CI_Controller {

	public function index()
	{
		if(isset($this->session->userdata['sessiondata']['user_id']) && intval($this->session->userdata['sessiondata']['user_type']) == 1)
        {
        	$user = $this->session->userdata['sessiondata'];

        	$fldata = $this->session->flashdata('data');

        	if ($fldata['userid'] != '') {

        		//$fldata['userid'] = 'USR0001';

        		$this->load->model('sro_model');
	    		$user_data = $this->sro_model->get_user_data($fldata['userid']);

	    		$from = new DateTime($user_data['dob']);
				$to   = new DateTime('today');
				$user_data['age'] = $from->diff($to)->y;

	            $user_details = $this->sro_model->get_details($fldata['userid']);

                $officials = $this->sro_model->get_officials($fldata['userid']);

			  	$data = array('user'=> $user,
			  				  'module'=>'sro-marks-view',
			  				  'user_data'=> $user_data,
	                          'user_details' => $user_details,
                              'officials' => $officials
			  				);
			  	
				$this->load->view('page-view', $data);

        	} else {
        		redirect(base_url().'sro_dashboard');
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

        $this->load->model('sro_model');

        $result = $this->sro_model->add_marks($user['user_id'],$data);
            
        $resp = $result;
            $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
            ->_display();
            exit;
	}

    function application(){

        if(isset($this->session->userdata['sessiondata']['user_id']) && intval($this->session->userdata['sessiondata']['user_type']) == 1)
        {
            $user = $this->session->userdata['sessiondata'];

            $fldata = $this->session->flashdata('data');

            if ($fldata['userid'] != '') {

                $this->load->model('sro_model');
                $user_data = $this->sro_model->get_user_data($fldata['userid']);

                $from = new DateTime($user_data['dob']);
                $to   = new DateTime('today');
                $user_data['age'] = $from->diff($to)->y;

                $user_details = $this->sro_model->get_details($fldata['userid']);

                $officials = $this->sro_model->get_officials($fldata['userid']);

                //echo "<pre>"; print_r($officials); exit;

                $data = array('user'=> $user,
                              'module'=>'sro-user-view',
                              'user_data'=> $user_data,
                              'user_details' => $user_details,
                              'officials' => $officials
                            );
                
                $this->load->view('page-view', $data);

            } else {
                redirect(base_url().'sro_dashboard');
            }
        }
        else{
            redirect(base_url().'auth/logout');
        }
    }
}
