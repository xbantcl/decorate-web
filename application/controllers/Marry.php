<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marry extends CI_Controller {

	public function index()
	{
		$this->load->view('/marry/test');
	}

	public function show()
	{
		$this->load->view('/marry/test-version2');
	}
}
