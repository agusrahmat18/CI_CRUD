<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operasional extends CI_Controller{

	public function __construct()
    {
		parent::__construct();
		$this->load->model("M_Operasional");
		$this->load->library('form_validation');
		$this->load->library('session');
    }

    public function index()
    {
        $data["operasional"] = $this->M_Operasional->getAll();
        $this->load->view("operasional/index", $data);
		// print_r($data);
    }

    public function add()
    {
        $operasional = $this->M_Operasional;
        $validation = $this->form_validation;
        $validation->set_rules($operasional->rules());

        if ($validation->run()) {
            $operasional->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("operasional/add");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('operasional');
       
        $operasional = $this->M_Operasional;
        $validation = $this->form_validation;
        $validation->set_rules($operasional->rules());

        if ($validation->run()) {
            $operasional->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["operasional"] = $operasional->getById($id);
        if (!$data["operasional"]) show_404();
        
        $this->load->view("operasional/edit", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_Operasional->delete($id)) {
            redirect(site_url('operasional'));
        }
    }

}