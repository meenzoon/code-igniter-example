<?php
class Blog extends CI_Controller {

	/*
	 * Blog constructor.
	 *
	 *
	 */
	function __construct()
	{
		parent::__construct();

		$this->output->set_content_type('application/json');
	}

	/*
	public function _remap($method, $params=array())
	{
		if(method_exists($this, $method))
		{
			$result = call_user_func_array(array($this, $method), $params);
			$this->output->set_content_type('application/json');
			$this->output->set_output(json_encode($result));
		}
		else
		{
			return show_404();
		}
	}*/

	/*
	 * Blog index
	 *
	 * @return json
	 */
	public function index()
	{
		$data['greeting']='Hello Blog';

		$this->output->set_output(json_encode($data));
	}

	/*
	 * Blog Create
	 *
	 * @param string $title 제목
	 * @param integer $id 아이디
	 * @return json
	 */
	public function create($title, $id)
	{
		$data['title'] = $title;
		$data['id'] = $id;

		$this->output -> set_output(json_encode($data));
		/*
		$this->output
			-> set_content_type('application/json');
		*/
	}

	public function insert()
	{
		//echo $_SERVER['REQUEST_METHOD'];
		//$data = $this->input->post();

		$result = array(
			array(
				'name' => 'Edward',
				'age' => 30
			),
			array(
				'name' => 'Alex',
				'age' => 25
			)
		);
		$this->output->set_output(json_encode($result));
		//return $result;

		//return $_SERVER['REQUEST_METHOD'];
	}

	// 때에 따라서 함수의 공개적 접근을 허용해서는 안 될 경우도 있을 것입니다. 함수를 private 으로 만들려면, 간단히 밑줄(_)을 함수 이름 앞에 추가해 주세요. 그러면 웹에서 호출할 수 없게 됩니다:
	/*
	private function _hide()
	{

	}
	*/
}
