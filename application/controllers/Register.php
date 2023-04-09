<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('register');
	}
	public function submit(){
		//kita mulai panggil model tadi
		// yang siyap interaksi ke dborder
		$this->load->model('DBUser');

		$this->DBUser->register();

		//buat efek loading
		echo "<img src='/images/loading.gif'>";
		echo "wait...";
		header("refresh:5; url=/");
	}
}
