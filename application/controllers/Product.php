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
		$data['logo'] = $this->db->query("select * from custom where type = 'logo'")->result()[0]->nama_foto;		
		$data['socmeds'] = $this->db->query("select * from socmed where tampilkan = 1")->result();

		$kategori = $data['produk']->kategori;
		$data['similar_produk'] = $this->db->query("select * from produk where not id_produk = '$id_produk' and kategori = '$kategori' limit 3")->result();
		
		$data['all_photo'] = $this->db->get('foto_produk')->result();
		
		foreach($data['similar_produk'] as $product) {
			$product->foto_produk = [];
		}

		foreach($data['all_photo'] as $photo) {
			foreach($data['similar_produk'] as $idx=>$product) {
				if(($photo->id_produk == $product->id_produk)) {
					if(!count($product->foto_produk)) {
						$data['similar_produk'][$idx]->foto_produk[0] = $photo;
					}
				}
			}
		}
				

		$this->load->view('main/template', $data);
	}		

}
