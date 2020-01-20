<?php
class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->output->set_content_type('application/json');
	}

	public function index()
	{
		$data['greeting']='Hello Blog';
		$this->output
			->set_output(json_encode($data));
	}

	public function create($title, $id)
	{
		$data['title'] = $title;
		$data['id'] = $id;

		$this->output
			-> set_output(json_encode($data));
		/*
		$this->output
			-> set_content_type('application/json');
		*/
	}

	// 때에 따라서 함수의 공개적 접근을 허용해서는 안 될 경우도 있을 것입니다. 함수를 private 으로 만들려면, 간단히 밑줄(_)을 함수 이름 앞에 추가해 주세요. 그러면 웹에서 호출할 수 없게 됩니다:
	/*
	private function _hide()
	{

	}
	*/
}
