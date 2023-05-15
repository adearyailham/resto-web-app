<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discount extends CI_Controller {


	public function add()
	{
		$this->load->view('formulir_discount');
	}
	public function management()
	{
		$this->load->model('DBDiscount');
		$keterimaData = $this->DBDiscount->select();

		$data= array(
			'query' => $keterimaData
		);

		$this->load->view('management_discount', $data);
	}
	public function submit(){
		//kita mulai panggil model tadi
		// yang siyap interaksi ke dbuser
		$this->load->model('DBDiscount');

		$this->DBDiscount->add();

			//buat efek loading
			header("refresh:5; url=/discount/management");
			$this->load->view('loading');
	}
}
