<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_model {

	function __construct() {
        parent::__construct();
    }
 	
	function verify($username, $password){

		$this->db->select('*');
		$this->db->where('email',$username);
		$this->db->where('password',$password);
		$result = $this->db->get('users');
		if ($result->num_rows()>0) {
			return $result->row_array();
		} else {
			return false;
		}
	}// end of verify function 


}// end of auth class
