<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        
        $this->load->model('m_setting');
        
    }
    public function index(){
        $data = array(
                    'title' => 'ADMIN Web Sekolah',
                    'title2' => 'Dashboard',
                    'isi' => 'admin/v_home'
        );
        $this->load->view('admin/layout/v_wrapper',$data, false);
    }

    public function setting(){

        $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('no_sekolah', 'no sekolah', 'required');
        $this->form_validation->set_rules('kepala_sekolah', 'Kepala sekolah', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('visi', 'visi', 'required');
        $this->form_validation->set_rules('misi', 'misi', 'required');
        $this->form_validation->set_rules('sejarah', 'sejarah', 'required');
        
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_kepsek/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_kepsek'))
                {
                        $data = array(
                            'title' => 'ADMIN web sekolah',
                            'title2' => 'Edit Data Kepsek',
                            'error' => $this->upload->display_errors(),
                            'setting' => $this->m_setting->detail(),
                            'isi' => 'admin/v_setting'
                        );
                    $this->load->view('admin/layout/v_wrapper',$data, false);
                }
                else
                {
                        $upload_data = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './foto_kepsek/'.$upload_data['uploads']['file_name'];
                        
                        $this->load->library('image_lib', $config);

                        $setting=$this->m_setting->detail();
                        if ($setting->foto_kepsek !="") {
                            unlink('./foto_kepsek/'.$setting->foto_kepsek);
                        }
                        $data = array(
                                        'id' => '1',
                                        'nip' => $this->input->post('nip'), 
                                        'nama_sekolah' => $this->input->post('nama_sekolah'), 
                                        'kepala_sekolah' => $this->input->post('kepala_sekolah'), 
                                        'alamat' => $this->input->post('alamat'), 
                                        'no_sekolah' => $this->input->post('no_sekolah'), 
                                        'visi' => $this->input->post('visi'), 
                                        'misi' => $this->input->post('misi'), 
                                        'sejarah' => $this->input->post('sejarah'), 
                                        'foto_kepsek' => $upload_data['uploads']['file_name']
                                    );
                        $this->m_setting->update($data);
                        
                        $this->session->set_flashdata('pesan', 'Data Berhasil Di Ubah!');
                        redirect('admin/setting');
                }

                        $data = array(
                            'id' => '1',
                            'nip' => $this->input->post('nip'), 
                            'nama_sekolah' => $this->input->post('nama_sekolah'), 
                            'kepala_sekolah' => $this->input->post('kepala_sekolah'), 
                            'alamat' => $this->input->post('alamat'), 
                            'no_sekolah' => $this->input->post('no_sekolah'), 
                            'visi' => $this->input->post('visi'), 
                            'misi' => $this->input->post('misi'), 
                            'sejarah' => $this->input->post('sejarah'), 
                            // 'foto_kepsek' => $upload_data['uploads']['file_name']
                        );
            $this->m_setting->update($data);
            
            $this->session->set_flashdata('pesan', 'Data Berhasil Di Ubah!');
            redirect('admin/setting');
        } 
        $data = array(
            'title' => 'ADMIN Web Sekolah',
            'title2' => 'Setting',
            'setting' => $this->m_setting->detail(),
            'isi' => 'admin/v_setting'
        );
            $this->load->view('admin/layout/v_wrapper',$data, false);

        

    }
}