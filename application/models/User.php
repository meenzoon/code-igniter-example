<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function getUser()
	{
		//return $this->db->query('SELECT * FROM USER')->result();
		$user_result = $this->db->get('user', 5)->result();
		//$user_result['model_id'] = $_GET['id'] == '' ? '' : $_GET['id'];
		return $user_result;
	}
}
