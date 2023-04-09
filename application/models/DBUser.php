<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DBUser extends CI_Model {


	public $id;
	public $username;
	public $pass;
	public $email;
	public $fullname;

	public function add()
	{
		$this->username = $_POST['username'];
		$this->pass = $_POST['pass'];
		$this->email = $_POST['email'];

		$data = array(
			'username' => $_POST['username'],
			'pass'     => $_POST['pass'],
			'email'    => $_POST['email']
		);

		$this->db->insert('table_user', $data);
	}
	public function edit()
	{
		$this->username = $_POST['username'];
		$this->pass = $_POST['pass'];
		$this->email = $_POST['email'];

		$patokan = array(
			'id' => $_POST['id']
		);

		$this->db->update('table_user', $this, $patokan);
	}
	public function delete()
	{
		$patokan = array(
			'id' => $_POST['id']
		);

		$this->db->delete('table_user', $this, $patokan);
	}
	public function select()
	{
		$dataSemua = array();
		$query = $this->db->get('table_user');	
		
		$hasil = $query->result();
		foreach($hasil as $col){
			$data = array(
				'id'		=>$col->id,
				'username'	=>$col->username,
				'pass'		=>$col->pass,
				'email'		=>$col->email,
				'address'	=>$col->address

			);
			$dataSemua[] = $data;
		}

		return $dataSemua;
	}
	public function register()
	{

		$this->username = $_POST['username'];
		$this->pass = $_POST['pass'];
		$this->fullname = $_POST['fullname'];
		$this->email = $_POST['email'];


		$data = array(
			'username' => $_POST['username'],
			'pass'     => $_POST['pass'],
			'email'    => $_POST['email'],
			'fullname'    => $_POST['fullname']

		);

		$this->db->insert('table_user', $data);
	}
}
