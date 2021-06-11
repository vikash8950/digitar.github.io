<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Io_model extends CI_model {

	function __construct() {
        parent::__construct();
    }
 	
	function get_data($user_id){

		$this->db->select('ud.*,u.*,');
	    $this->db->from('user_data ud');
	    $this->db->join('users u','ud.user_id = u.user_id');
	    $this->db->where('u.user_type', 3);
	    $this->db->where('ud.io_id', $user_id);
		$result = $this->db->get();
		if ($result->num_rows()>0) {
			$users = $result->result_array();

			$user_ids = array();
			foreach ($users as $key => $value) {
				$user_ids[] = $value['user_id'];
			}

			$this->db->select('i.user_id,i.marks,s.marks as sro');
	    	$this->db->from('io_marks i');
	    	$this->db->join('sro_marks s','i.user_id = s.user_id','left');
	    	$this->db->where_in('i.user_id', $user_ids);
	    	$result1 = $this->db->get();
	    	$user_marks_temp = $result1->result_array();

	    	$user_marks = array();
	    	foreach ($user_marks_temp as $key => $value) {
	    		$user_marks[$value['user_id']] = $value;
	    	}

	    	foreach ($users as $key => $value) {
				if (isset($user_marks[$value['user_id']])) {
					$users[$key]['marks'] = $user_marks[$value['user_id']]['marks'];
					$users[$key]['sro'] = $user_marks[$value['user_id']]['sro'];
				} else {
					$users[$key]['marks'] = '';
					$users[$key]['sro'] = '';
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

		$sro_data = array('sro_id' => $data['sro_id'], 'io_remarks' => $data['io_remarks']);

		$this->db->where('user_id',$data['user_id']);
		$result = $this->db->update('user_data',$sro_data);

		$temp = array(	'io_user_id' => $user_id,
					  	'user_id' => $data['user_id'],
					  	'type' => 'A',
						'marks' => $data['A']
					);

		$this->db->insert('io_marks',$temp);

		$temp = array(	'io_user_id' => $user_id,
					  	'user_id' => $data['user_id'],
					  	'type' => 'B',
						'marks' => $data['B']
					);

		$this->db->insert('io_marks',$temp);

		$temp = array(	'io_user_id' => $user_id,
					  	'user_id' => $data['user_id'],
					  	'type' => 'C',
						'marks' => $data['C']
					);

		$this->db->insert('io_marks',$temp);

		$temp = array(	'io_user_id' => $user_id,
					  	'user_id' => $data['user_id'],
					  	'type' => 'D',
						'marks' => $data['D']
					);

		$this->db->insert('io_marks',$temp);

		$temp = array(	'io_user_id' => $user_id,
					  	'user_id' => $data['user_id'],
					  	'type' => 'E',
						'marks' => $data['E']
					);

		$this->db->insert('io_marks',$temp);

		return $result;
	}

	function update_details($user_id,$data){

		$this->db->where('user_id',$data['user_id']);
		$result = $this->db->delete('io_marks');

		$sro_data = array('io_remarks' => $data['io_remarks']);

		$this->db->where('user_id',$data['user_id']);
		$result = $this->db->update('user_data',$sro_data);

		$temp = array(	'io_user_id' => $user_id,
					  	'user_id' => $data['user_id'],
					  	'type' => 'A',
						'marks' => $data['A']
					);

		$this->db->insert('io_marks',$temp);

		$temp = array(	'io_user_id' => $user_id,
					  	'user_id' => $data['user_id'],
					  	'type' => 'B',
						'marks' => $data['B']
					);

		$this->db->insert('io_marks',$temp);

		$temp = array(	'io_user_id' => $user_id,
					  	'user_id' => $data['user_id'],
					  	'type' => 'C',
						'marks' => $data['C']
					);

		$this->db->insert('io_marks',$temp);

		$temp = array(	'io_user_id' => $user_id,
					  	'user_id' => $data['user_id'],
					  	'type' => 'D',
						'marks' => $data['D']
					);

		$this->db->insert('io_marks',$temp);

		$temp = array(	'io_user_id' => $user_id,
					  	'user_id' => $data['user_id'],
					  	'type' => 'E',
						'marks' => $data['E']
					);

		$this->db->insert('io_marks',$temp);

		return $result;
	}

}// end of class
