<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Api_Sample extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
		$this->load->helper('url');
		$this->load->helper('form');
        $this->load->database();
		$this->load->model('M_Buku');
    }

    function index_get() {
        $product_name = $this->get('product_name');
		// $product_name = $this->input->post('product_name');
        if ($product_name == '') {
            $product = $this->db->get('ma_product')->result();
        } else {
            $this->db->where('product_name like', '%'.$product_name.'%');
            $product = $this->db->get('ma_product')->result();
        }
        $this->response($product, 200);
    }

    function index_post() {
		$number=$this->M_Buku->buat_kode();
		
        $data = array(
                    'product_id'     => $this->M_Buku->buat_kode(),
                    'product_name'   => $this->post('product_name'),
                    'photo'   		 => $this->post('photo'));
        $insert = $this->db->insert('ma_product', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put() {
        $product_id = $this->put('product_id');
        $data = array(
                    'product_id'	=> $this->put('product_id'),
                    'product_name'	=> $this->put('product_name'),
                    'photo'			=> $this->put('photo'));
        $this->db->where('product_id', $product_id);
        $update = $this->db->update('ma_product', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $product_id = $this->delete('product_id');
        $this->db->where('product_id', $product_id);
        $delete = $this->db->delete('ma_product');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>