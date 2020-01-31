<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('api/fileModel');
	}

	public function create()
	{
		$result = $this->fileModel->create('123.txt');
		echo $result;
	}

	public function delete()
	{

	}
}
