<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table_Buku extends CI_Controller{

	public function __construct()
    {
		parent::__construct();
		$this->load->model("M_Buku");
		$this->load->library('form_validation');
		$this->load->library('session');
    }

    public function index()
    {
        $data["buku"] = $this->M_Buku->getAll();
        $this->load->view("buku/v_buku", $data);
		// print_r($data);
    }

    public function add()
    {
        $buku = $this->M_Buku;
        $validation = $this->form_validation;
        $validation->set_rules($buku->rules());

        if ($validation->run()) {
            $buku->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("buku/add_buku");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('table_buku');
       
        $buku = $this->M_Buku;
        $validation = $this->form_validation;
        $validation->set_rules($buku->rules());

        if ($validation->run()) {
            $buku->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["buku"] = $buku->getById($id);
        if (!$data["buku"]) show_404();
        
        $this->load->view("buku/edit_buku", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_Buku->delete($id)) {
            redirect(site_url('table_buku'));
        }
    }

}