<?php 

class Auth extends CI_Controller{

	function __construct(){
		
		parent::__construct();	
		// if($this->session->userdata('username')){
		// 	redirect('Dashboard');
		// }
		
		$this->load->model('M_login');

	}

	function index(){
		$this->load->view('web/auth');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$id = $this->input->post('id');
		$where = array(
			
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->M_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'id'=> $id,
				'username' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect('Dashboard');

		}else{
			redirect('Auth');
		}
	}

	public function Logout(){
		
     
	   $this->session->unset_userdata('id');
	   $this->session->unset_userdata('username');
		
       
        redirect('Auth');/// ketika logout lagsung akan di alihkan ke tampilan route default
    }
}