<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DBOrder extends CI_Model {


	public $id;
	public $name;
	public $quantity;
	public $price;

	public function add()
	{
		$this->name = $_POST['name'];
		$this->quantity = $_POST['quantity'];
		$this->price = $_POST['price'];

		$data = array(
			'name' => $_POST['name'],
			'quantity'     => $_POST['quantity'],
			'price'    => $_POST['price']
		);

		$this->db->insert('table_order', $data);
	}
	public function edit()
	{
		$this->name = $_POST['name'];
		$this->quantity = $_POST['quantity'];
		$this->price = $_POST['price'];

		$patokan = array(
			'id' => $_POST['id']
		);

		$this->db->update('table_order', $this, $patokan);
	}
	public function delete()
	{
		$patokan = array(
			'id' => $_POST['id']
		);

		$this->db->delete('table_order', $this, $patokan);
	}
	public function select()
	{
		$dataSemua = array();
		$query = $this->db->get('table_order');	
		
		$hasil = $query->result();
		foreach($hasil as $col){
			$data = array(
				'id'		=>$col->id,
				'name'		=>$col->name,
				'quantity'	=>$col->quantity,
				'price'		=>$col->price,

			);
			$dataSemua[] = $data;
		}

		return $dataSemua;
	}
}
