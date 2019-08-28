<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	// _REMAP USING FOR PASSING PARAMETER ON INDEX METHOD
	function _remap($productId) {
		$this->index($productId);
	}

	public function index($productId)
	{				
		$data['title'] = "Detail Produk | Catalog App";
		$data['content'] = "main/detailProduct";

		$this->load->view('main/template', $data);
	}	

}
