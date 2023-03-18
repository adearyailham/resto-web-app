<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food extends CI_Controller {


	public function add()
	{
		$this->load->view('formulir_food');
	}
	public function management()
	{
		$this->load->view('management_food');
	}
}
