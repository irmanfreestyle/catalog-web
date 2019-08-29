<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Mdashboard');
    }

	public function index()
	{
        $data['title'] = "ADMIN | Catalog App";
        $data['page'] = 'LIST PRODUK';
        $data['content'] = "admin/dashboard";
        $this->db->order_by("tgl_upload", "desc");
        $data['products'] = $this->db->get('produk')->result();
        $data['photos'] = $this->db->get('foto_produk');
        
		$this->load->view('admin/template', $data);	
    }	
    
    function uploadpage() {
        $data['title'] = "Upload Produk";
        $data['page'] = 'UPLOAD PRODUK';
        $data['content'] = "admin/uploadpage";
        $data['categories'] = $this->db->query('select * from kategori order by id_kategori desc')->result();
		$this->load->view('admin/template', $data);	
    }
    

    function category() {
        $data['title'] = "Atur Kategori Produk";
        $data['page'] = 'ATUR KATEGORI PRODUK';
        $data['content'] = "admin/category";
        $data['categories'] = $this->db->query('select * from kategori order by id_kategori desc')->result();
		$this->load->view('admin/template', $data);	
    }
    function addCategory() {
        $category = $this->input->post('category');
        if($this->db->insert('kategori', ['id_kategori'=>'', 'nama_kategori'=>$category])) {
            $this->session->set_flashdata('alert-category', 'success');            
        } else {
            $this->session->set_flashdata('alert-category', 'error');
        }
        redirect(base_url().'admin/category');
    }
    function deleteCategory($id) {
        if($this->db->delete('kategori', ['id_kategori'=>$id])) {

        } else {
            $this->session->set_flashdata('alert-category', 'error');
        }
        redirect(base_url().'admin/category');
    }

    function changePasswordPage() {
        $data['title'] = "Ubah Password | Repository TE Unjani";
        $data['page'] = 'UBAH PASSWORD | REPOSITORY TE UNJANI';
        $data['content'] = "admin/changePassword.php";
		$this->load->view('admin/template', $data);
    }


    function loginPage() {
        $data['title'] = "Login Admin | Repository TE Unjani";                
		$this->load->view('admin/login', $data);
    }

    function login() {
        $password = $this->input->post('password');
        $this->db->where('password', $password);
        $check = $this->db->get('users');
        if($check->num_rows() > 0) {
            $this->session->set_userdata('loged_in', true);
            redirect(base_url().'admin/');
        } else {            
            redirect(base_url().'admin/loginPage?password=wrong');
        }
    }

    function logout() {
        unset($_SESSION['loged_in']);
        redirect(base_url().'admin/loginPage');
    }

    function changePassword() {
        $oldPassword = $this->input->post('old-password');
        $newPassword = $this->input->post('new-password');

        $this->db->where('password', $oldPassword);
        $res = $this->db->get('users');
        
        if($res->num_rows() > 0) {
            $this->db->update('users', ['password' => $newPassword]);
            $this->session->set_flashdata('changePassword', 'Password Berhasil Dirubah');
            redirect(base_url().'admin/changePasswordPage');
        } else {
            $this->session->set_flashdata('changePassword', 'Password Lama Salah');
            redirect(base_url().'admin/changePasswordPage');
        }
    }

    function uploadFile() {        
        
        $config['upload_path'] = 'assets/images/upload/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 5000000;
        $config['encrypt_name'] = TRUE; 
	
		$this->load->library('upload', $config);
 
		if ($this->upload->do_upload('image')){
            $filename = $this->upload->data('file_name');            
            echo json_encode(['status'=>'success', 'filename'=>$filename]);
		} else {
            $error = array('error' => $this->upload->display_errors());
            echo json_encode(['status'=>'failed', 'error'=>$error]);
        }
    }

    function uploadProduct() {         
        $photos = $this->input->post('image');
        $id_produk = uniqid();

        $dataProduct = [      
            'id_produk' => $id_produk,
            'nama_produk' => $this->input->post('namaproduk'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'kategori' => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi'),
            'tgl_upload' => date("Y/m/d")
        ];            
                    
        if($this->db->insert('produk', $dataProduct)) {
            foreach($photos as $idx=>$photo) {
                $this->db->insert('foto_produk', [
                    'id_foto' => '',
                    'id_produk' => $id_produk,
                    'nama_foto' => $photos[$idx]
                ]);
            }
        }        

        $this->session->set_flashdata('alert-product', 'success');
        redirect(base_url().'admin/uploadpage');
    }

    function deletefile() {
        $file_id = $this->input->get('id_file');

        $this->db->delete('files', ['id_file'=>$file_id]);
        redirect(base_url().'admin');
    }
	
}


ini_set('upload_max_filesize', '500M');
ini_set('post_max_size', '500M');
ini_set('max_input_time', 5000);
ini_set('max_execution_time', 5000);