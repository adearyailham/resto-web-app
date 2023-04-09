<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function add()
	{
		$this->load->view('formulir_order');
	}
	public function management()
	{
		$this->load->model('DBOrder');
		$keterimaData = $this->DBOrder->select();

		$data= array(
			'query' => $keterimaData
		);

		$this->load->view('management_order', $data);
	}
	public function submit(){
		//kita mulai panggil model tadi
		// yang siyap interaksi ke dborder
		$this->load->model('DBOrder');

		$this->DBOrder->add();

			//buat efek loading

			header("refresh:5; url=/order/management");
			$this->load->view('loading');
	}
}
