<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
	$this->load->library('session');
  }

  function index()
  {
	if($this->session->set_userdata('status') != "login")
	{
		$this->load->view('dashboard/dashboard');
	}else
	{
		$this->load->view('login');
	}
	// print_r($data);
  }

}