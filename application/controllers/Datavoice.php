<?php


class Datavoice extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_sound');
    }
        
    public function index(){
       
        $data['sound']=$this->M_sound->get_sound();
        $data['page']='admin/Listvoice';

        $this->load->view('admin/layout/base',$data);

    }
    public function create(){
        $this->load->model('M_album');
        $data['album'] = $this->M_album->getalbum();
        $data['sound']=$this->M_sound->get_sound();
        $data['page']='admin/create';

        $this->load->view('admin/layout/base',$data);

    }
    function proses(){

        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('keterangan','Keterangan','required');

        if($this->form_validation->run()== FALSE){
            $this->create();
        }else{
            $nm_sound = $this->M_sound->do_upload('sound');
            $this->M_sound->isound($nm_sound);
            redirect('Datavoice');
        }

    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('Datavoice');
       
       
        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('keterangan','Keterangan','required');

        if ($this->form_validation->run()) {
            $this->M_sound->update();
           redirect('Datavoice');
        }else{
            $data["tes"] = $this->M_sound->getById($id);
            $data['page']='admin/update';
            $this->load->view('admin/layout/base',$data);

        }

        
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_sound->delete($id)) {
            redirect(site_url('Datavoice'));
        }
    }
}