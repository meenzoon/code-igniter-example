<?php


class User extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function getUser(){
		//return $this->db->query('SELECT * FROM USER')->result();
		return $this->db->get('user', 10)->result();
	}
}
