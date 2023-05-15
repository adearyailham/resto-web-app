<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function add()
	{
		$this->load->view('formulir_user');
	}
	public function management()
	{
		$this->load->model('DBUser');
		$keterimaData = $this->DBUser->select();

		$data= array(
			'query' => $keterimaData
		);

		$this->load->view('management_user', $data);
	}
	public function submit(){
		//kita mulai panggil model tadi
		// yang siyap interaksi ke dbuser
		$this->load->model('DBUser');

		$this->DBUser->add();

		//buat efek loading
		header("refresh:5; url=/user/management");
		$this->load->view('loading');


	}

	public function login (){
		redirect('/home', 'refresh');
	}
	public function testing(){
		$this->load->model('DBUser');

		
		$keterimaData = $this->DBUser->select();

		echo var_dump($keterimaData);
	}
	public function delete(){
		$idna = $this->input->get('id');
		$this->load->model('DBUser');

		$this->DBUser->delete($idna);

		//buat efek loading
		header("refresh:5; url=/user/management");
		$this->load->view('loading');

	}

}
