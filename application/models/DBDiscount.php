<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DBDiscount extends CI_Model {


	public $id;
	public $nama_discount;
	public $jumlah_potongan;

	public function add()
	{
		$this->nama_discount = $_POST['nama_discount'];
		$this->jumlah_potongan = $_POST['jumlah_potongan'];

		$data = array(
			'nama_discount' => $_POST['nama_discount'],
			'jumlah_potongan'     => $_POST['jumlah_potongan'],
		);

		$this->db->insert('table_discount', $data);
	}
	public function edit()
	{
		$this->nama_discount = $_POST['nama_discount'];
		$this->jumlah_potongan = $_POST['jumlah_potongan'];

		$patokan = array(
			'id' => $_POST['id']
		);

		$this->db->update('table_discount', $this, $patokan);
	}
	public function delete()
	{
		$patokan = array(
			'id' => $_POST['id']
		);

		$this->db->delete('table_discount', $this, $patokan);
	}
	public function select()
	{
		$dataSemua = array();
		$query = $this->db->get('table_discount');	
		
		$hasil = $query->result();
		foreach($hasil as $col){
			$data = array(
				'id'				=>$col->id,
				'nama_discount'		=>$col->nama_discount,
				'jumlah_potongan'	=>$col->jumlah_potongan

			);
			$dataSemua[] = $data;
		}
		return $dataSemua;
	}
}
