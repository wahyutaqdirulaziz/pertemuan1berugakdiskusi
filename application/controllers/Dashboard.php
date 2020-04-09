<?php



class Dashboard extends CI_Controller{
    public function __construct()
  {
    parent::__construct();
    
    // Cek apakah user sudah login
    if(!$this->session->userdata('username')){
      redirect('Auth');

    }

    // Cek apakah user login 
    // sebagai administrator
   

    // Load model users
   
  }
    public function index(){
        $data['page'] = 'admin/Dashboard';
        $this->load->view('admin/layout/base',$data);
    }
}