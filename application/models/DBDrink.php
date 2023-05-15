<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DBDrink extends CI_Model {


	public $id;
	public $name;
	public $price;
	public $rating;

	public function add()
	{
		$this->name = $_POST['name'];
		$this->price = $_POST['price'];
		$this->rating = $_POST['rating'];

		$data = array(
			'name' => $_POST['name'],
			'price'     => $_POST['price'],
			'rating'    => $_POST['rating']
		);

		$this->db->insert('table_drink', $data);
	}
	public function edit()
	{
		$this->name = $_POST['name'];
		$this->price = $_POST['price'];
		$this->rating = $_POST['rating'];

		$patokan = array(
			'id' => $_POST['id']
		);

		$this->db->update('table_drink', $this, $patokan);
	}
	public function delete()
	{
		$patokan = array(
			'id' => $_POST['id']
		);

		$this->db->delete('table_drink', $this, $patokan);
	}
	public function select()
	{
		$dataSemua = array();
		$query = $this->db->get('table_drink');	
		
		$hasil = $query->result();
		foreach($hasil as $col){
			$data = array(
				'id'		=>$col->id,
				'name'		=>$col->name,
				'price'		=>$col->price,
				'rating'	=>$col->rating

			);
			$dataSemua[] = $data;
		}
		return $dataSemua;
	}
}
