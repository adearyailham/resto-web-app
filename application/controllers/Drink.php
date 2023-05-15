<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drink extends CI_Controller {


	public function add()
	{
		$this->load->view('formulir_drink');
	}
	public function management()
	{
		$this->load->model('DBDrink');
		$keterimaData = $this->DBDrink->select();

		$data= array(
			'query' => $keterimaData
		);

		$this->load->view('management_drink', $data);
	}
	public function submit(){
		//kita mulai panggil model tadi
		// yang siyap interaksi ke dbuser
		$this->load->model('DBDrink');

		$this->DBDrink->add();


			//buat efek loading
			header("refresh:5; url=/drink/management");
			$this->load->view('loading');
	}
}
