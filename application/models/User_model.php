<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_model {

	function __construct() {
        parent::__construct();
    }
 	
	function get_data($user_id){

		$this->db->select('*');
		$this->db->where('user_id',$user_id);
		$result = $this->db->get('user_data');
		if ($result->num_rows()>0) {
			return $result->row_array();
		} else {
			return false;
		}
	}// end of function

	function submit_details($user_id,$w_data,$s_data,$data){

		$io_data = array('io_id' => $data['io_id'] );

		$this->db->where('user_id',$user_id);
		$result = $this->db->update('user_data',$io_data);

		foreach ($s_data as $key => $value) {
			$temp = array('user_id' => $user_id, 's_name' => $value );

			$this->db->insert('strengths',$temp);
		}

		foreach ($w_data as $key => $value) {
			$temp = array('user_id' => $user_id, 'w_name' => $value );

			$this->db->insert('weaknesses',$temp);
		}

		return $result;
	}

	function get_details($user_id){

		$details = array();

		$this->db->select('*');
		$this->db->where('user_id',$user_id);
		$result = $this->db->get('strengths');
		$details['strengths'] = $result->result_array();

		$this->db->select('*');
		$this->db->where('user_id',$user_id);
		$result = $this->db->get('weaknesses');
		$details['weaknesses'] = $result->result_array();

		$this->db->select('*');
		$this->db->where('user_id',$user_id);
		$result = $this->db->get('io_marks');
		if ($result->num_rows()>0) {
			$details['io_marks'] = $result->result_array();
		} else {
			$details['io_marks'] = false;
		}

		$this->db->select('*');
		$this->db->where('user_id',$user_id);
		$result = $this->db->get('sro_marks');
		if ($result->num_rows()>0) {
			$details['sro_marks'] = $result->result_array();
		} else {
			$details['sro_marks'] = false;
		}

		return $details;
	}

	function update_details($user_id,$w_data,$s_data){

		$this->db->where('user_id',$user_id);
		$result = $this->db->delete('strengths');

		$this->db->where('user_id',$user_id);
		$result = $this->db->delete('weaknesses');

		foreach ($s_data as $key => $value) {
			$temp = array('user_id' => $user_id, 's_name' => $value );

			$this->db->insert('strengths',$temp);
		}

		foreach ($w_data as $key => $value) {
			$temp = array('user_id' => $user_id, 'w_name' => $value );

			$this->db->insert('weaknesses',$temp);
		}

		return $result;
	}

}// end of class
