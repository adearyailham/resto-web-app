<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function add()
	{
		$this->load->view('formulir_order');
	}
	public function management()
	{
		$this->load->view('management_order');
	}
}
