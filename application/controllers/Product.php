<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	// _REMAP USING FOR PASSING PARAMETER ON INDEX METHOD
	function _remap($id_produk) {
		$this->index($id_produk);
	}

	public function index($id_produk)
	{				
		$data['title'] = "Detail Produk | Catalog App";
		$data['content'] = "main/detailProduct";
		$data['produk'] = $this->db->query("select * from produk where id_produk = '$id_produk'")->result()[0];
		$data['photos'] = $this->db->query("select * from foto_produk where id_produk = '$id_produk'")->result();

		$kategori = $data['produk']->kategori;
		$data['similar_produk'] = $this->db->query("select * from produk where not id_produk = '$id_produk' and kategori = '$kategori'")->result_array();
				

		$this->load->view('main/template', $data);
	}		

}
