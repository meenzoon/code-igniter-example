<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * 게시판 클래스
 */
class Board extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		// set response header(Content-Type: 'application/json')
		$this->output->set_content_type('application/json');
	}

	/*
	public function _remap($method, $params=array())
	{
		$result = call_user_func_array(array($this, $method), $params);

		$this->output->set_output($result);
	}
	*/

	public function index()
	{
		log_message('info', "Board Class");
		$result = array(
			'name' => 'Blog Index API'
		);
		$this->output->set_output(json_encode($result));
	}

	public function create()
	{
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$result = array(
				'name' => 'name',
				'id' => 'id1'
			);
			$this->output->set_output(json_encode($result));
		} else {
			$this->output->set_status_header(405);
			$this->output->set_output(json_encode(array("error" => "AB123")));
		}
	}

	public function boardList()
	{
		echo "Board List";
	}

	public function detail()
	{

	}

	/*
	 * 게시판 목록
	 *
	 */
	public function update()
	{

	}

	public function delete()
	{

	}
}
