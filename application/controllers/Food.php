<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food extends CI_Controller {


	public function add()
	{
		$this->load->view('formulir_food');
	}
	public function management()
	{

		$this->load->model('DBFood');
		$keterimaData = $this->DBFood->select();

		$data= array(
			'query' => $keterimaData
		);

		$this->load->view('management_food', $data);
	}
	public function submit(){
		//kita mulai panggil model tadi
		// yang siyap interaksi ke dbuser
		$this->load->model('DBFood');

		$this->DBFood->add();

			//buat efek loading
			
			header("refresh:5; url=/food/management");
			$this->load->view('loading');
	}
}
