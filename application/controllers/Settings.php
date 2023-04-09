<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {


	public function index()
	{
		$this->load->view('settings');
	}
	public function submit(){
		//kita mulai panggil model tadi
		// yang siyap interaksi ke dbuser
		$this->load->model('DBSettings');

		$this->DBSettings->add();
	}

}
