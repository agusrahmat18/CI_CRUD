<?php 
class Login extends CI_Controller{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_login');
		$this->load->library('session');
	}

	function index()
	{
		$this->load->view('login');
	}

	function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("login",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->load->library('session');
			$this->session->set_userdata($data_session);
			redirect(base_url("dashboard")); 

		}else
		{
			$this->load->view('login');
			// echo "Username dan password salah !";
			echo "<div class='alert alert-danger'><center>Upss...!!! Login gagal.</center></div>";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}