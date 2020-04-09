<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Play extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('M_sound');
    }

    //Menampilkan data kontak
    function index_get() {
        $id = $this->get('id_voice');
        if ($id == '') {
            $kontak = $this->M_sound->get_sound();
        } else {
            $this->db->where('id_voice', $id);
            $kontak = $this->db->get('sound')->result();
        }
        $this->response($kontak, 200);
    }

    function getalbum() {
        $id = $this->get('id');
        if ($id == '') {
            $kontak = $this->db->get('album')->result();
        } else {
            $this->db->where('id', $id);
            $kontak = $this->db->get('album')->result();
        }
        $this->response($kontak, 200);
    }

    //Masukan function selanjutnya disini
}
?>