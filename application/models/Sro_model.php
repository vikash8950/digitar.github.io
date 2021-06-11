<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sro_model extends CI_model {

	function __construct() {
        parent::__construct();
    }
 	
	function get_data($user_id){

		$this->db->select('ud.*,u.*,');
	    $this->db->from('user_data ud');
	    $this->db->join('users u','ud.user_id = u.user_id');
	    $this->db->where('u.user_type', 3);
	    $this->db->where('ud.sro_id', $user_id);
		$result = $this->db->get();
		if ($result->num_rows()>0) {
			$users = $result->result_array();

			$user_ids = array();
			foreach ($users as $key => $value) {
				$user_ids[] = $value['user_id'];
			}

			$this->db->select('user_id,marks');
	    	$this->db->from('sro_marks');
	    	$this->db->where_in('user_id', $user_ids);
	    	$result1 = $this->db->get();
	    	$user_marks_temp = $result1->result_array();

	    	$user_marks = array();
	    	foreach ($user_marks_temp as $key => $value) {
	    		$user_marks[$value['user_id']] = $value;
	    	}

	    	foreach ($users as $key => $value) {
				if (isset($user_marks[$value['user_id']])) {
					$users[$key]['marks'] = $user_marks[$value['user_id']]['marks'];
				} else {
					$users[$key]['marks'] = '';
				}
			}

			return $users;
		} else {
			return false;
		}
	}// end of function

	function get_user_data($user_id){

		$this->db->select('*');
	    $this->db->from('users u');
	    $this->db->join('user_data ud','ud.user_id = u.user_id');
	    $this->db->where('user_type', 3);
		$this->db->where('u.user_id',$user_id);
		$result = $this->db->get();
		$data = $result->row_array();

		return $data;
	}

	function get_officials($user_id){

		$officials = array();

		$this->db->select('i.ser_no,i.rank,iu.first_name,iu.last_name');
	    $this->db->from('user_data u');
	    $this->db->join('user_data i','i.user_id = u.io_id');
	    $this->db->join('users iu','iu.user_id = u.io_id');
		$this->db->where('u.user_id',$user_id);
		$result = $this->db->get();
		$officials['io'] = $result->row_array();

		$this->db->select('i.ser_no,i.rank,iu.first_name,iu.last_name');
	    $this->db->from('user_data u');
	    $this->db->join('user_data i','i.user_id = u.sro_id');
	    $this->db->join('users iu','iu.user_id = u.sro_id');
		$this->db->where('u.user_id',$user_id);
		$result = $this->db->get();
		$officials['sro'] = $result->row_array();

		return $officials;

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

	function add_marks($user_id,$data){

		$sro_data = array('sro_remarks' => $data['sro_remarks']);

		$this->db->where('user_id',$data['user_id']);
		$result = $this->db->update('user_data',$sro_data);

		$temp = array(	'sro_user_id' => $user_id,
					  	'user_id' => $data['user_id'],
					  	'type' => 'A',
						'marks' => $data['A']
					);

		$this->db->insert('sro_marks',$temp);

		$temp = array(	'sro_user_id' => $user_id,
					  	'user_id' => $data['user_id'],
					  	'type' => 'B',
						'marks' => $data['B']
					);

		$this->db->insert('sro_marks',$temp);

		$temp = array(	'sro_user_id' => $user_id,
					  	'user_id' => $data['user_id'],
					  	'type' => 'C',
						'marks' => $data['C']
					);

		$this->db->insert('sro_marks',$temp);

		$temp = array(	'sro_user_id' => $user_id,
					  	'user_id' => $data['user_id'],
					  	'type' => 'D',
						'marks' => $data['D']
					);

		$this->db->insert('sro_marks',$temp);

		$temp = array(	'sro_user_id' => $user_id,
					  	'user_id' => $data['user_id'],
					  	'type' => 'E',
						'marks' => $data['E']
					);

		$this->db->insert('sro_marks',$temp);

		return true;
	}

}// end of class
