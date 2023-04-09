<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DBSettings extends CI_Model {


	public $id;
	public $username;
	public $password;
	public $email;
	public $address;

	public function add()
	{
		$this->username = $_POST['username'];
		$this->password = $_POST['password'];
		$this->email = $_POST['email'];
		$this->address = $_POST['address'];

		$data = array(
			'username' => $_POST['username'],
			'password'     => $_POST['password'],
			'email'    => $_POST['email'],
			'address'    => $_POST['address']
		);

		$this->db->insert('table_settings', $data);
	}
	public function edit()
	{
		$this->username = $_POST['username'];
		$this->password = $_POST['password'];
		$this->email = $_POST['email'];
		$this->address = $_POST['address'];

		$patokan = array(
			'id' => $_POST['id']
		);

		$this->db->update('table_settings', $this, $patokan);
	}
	public function delete()
	{
		$patokan = array(
			'id' => $_POST['id']
		);

		$this->db->delete('table_settings', $this, $patokan);
	}
	public function select()
	{
		$query = $this->db->get('table_settings');	
	}
}
