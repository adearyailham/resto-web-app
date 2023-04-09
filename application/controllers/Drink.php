<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drink extends CI_Controller {


	public function add()
	{
		$this->load->view('formulir_drink');
	}
	public function management()
	{
		$this->load->view('management_drink');
	}
	public function submit(){
		//kita mulai panggil model tadi
		// yang siyap interaksi ke dbuser
		$this->load->model('DBDrink');

		$this->DBDrink->add();


			//buat efek loading
			echo "<img src='/images/loading.gif'>";
			echo "wait...";
			header("refresh:5; url=/home");
	}
}
