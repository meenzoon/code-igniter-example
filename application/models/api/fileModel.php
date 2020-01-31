<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FileModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function create($file_origin_name)
	{
		// 파일명, 파일크기
		$file_data['file_origin_name'] = $file_origin_name;
		$file_data['file_size'] = 123;

		// db insert
		$result = $this->db->insert('file', $file_data);

		return $result;
	}

	public function delete($file_idx)
	{
		$file_data['file_idx'] = $file_idx;
		$result = 1;
		//$result = $this->db->delete('file', $file_data);

		return $result;
	}
}
