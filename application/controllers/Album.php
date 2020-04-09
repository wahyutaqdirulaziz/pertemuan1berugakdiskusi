<?php


class Album extends CI_Controller{
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
        $this->load->model('M_album');
        $data['album'] = $this->M_album->getalbum();
        $data['page']='admin/album';
        $this->load->view('admin/layout/base',$data);
    }

    public function viewalbum($id){
        $this->load->model('M_album');
        $data['album'] = $this->M_album->getbyid($id);
        $data['page']='admin/view_album';
        $this->load->view('admin/layout/base',$data);
    }
}