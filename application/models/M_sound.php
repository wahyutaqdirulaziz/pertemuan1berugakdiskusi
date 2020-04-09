<?php
    class M_sound extends CI_Model{

        var $sound_path;
        var $sound_path_url;

        function __construct(){
            parent::__construct();
            $this->sound_path = realpath(APPPATH . '../assets/sound');
            
        }
        function isound($sound = ''){
            if(!$sound){
                $data = array(
                    'judul' => $this->input->post('judul'),
                    'keterangan' => $this->input->post('keterangan'),
                   
                );
            }else{
                $data = array(
                    'judul' => $this->input->post('judul'),
                    'keterangan' => $this->input->post('keterangan'),
                    'album_id' => $this->input->post('id_album'),
                   


                    'sound' => $sound,


                );
            }
            if($this->input->post('id_voice')){
                $this->db->where("id_voice",$this->input->post('id_voice'));
                $this->db->update('sound',$data);
            }else{
                $sound = $this->db->insert('sound',$data);

            }
        }

        function do_upload($sound){
            $config = array(
                'allowed_types'=>'mp3|wav',
                'upload_path'=> $this->sound_path,
                'max_size'=>20000

            );
            $this->load->library('upload',$config);
            $this->upload->do_upload($sound);
            $data = $this->upload->data($sound);
            $image_data = $this->upload->data();
            $nama_filenya = $image_data['file_name'];
            
           

            return $nama_filenya;

        }
        function get_sound(){
            $this->db->select('*');
            $this->db->order_by('sound.tanggal','desc');
            $this->db->from('sound');
            $this->db->join('album','album.id = sound.album_id','left');

            $query = $this->db->get();
            return $query->result();
        }
        public function getById($id)
    {
        return $this->db->get_where('sound', ["id_voice" => $id])->row();
    }
    public function update()
    {
        $post = $this->input->post();
        $data = array(
            'id_voice' => $this->input->post('id'),
            'judul' => $this->input->post('judul'),
            'keterangan' => $this->input->post('keterangan'),
            'sound' => $this->input->post('suara'),
           
           

            


        );
        return $this->db->update('sound', $data, array('id_voice' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete('sound', array("id_voice" => $id));
    }
    }
?>