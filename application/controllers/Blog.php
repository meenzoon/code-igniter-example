<?php
class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo 'Hello Blog';
	}

	public function create($title, $id)
	{
		echo $title;
		echo '<br>';
		echo $id;
	}
}
