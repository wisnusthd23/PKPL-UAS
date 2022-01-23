<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_berita');

        $this->load->library('unit_test');
    }


    public function index()
    {
        $data = array(
            'title' => 'ADMIN web sekolah',
            'title2' => 'Daftar Berita',
            'berita' => $this->m_berita->lists(),
            'isi' => 'admin/berita/v_list'
        );
        $this->load->view('admin/layout/v_wrapper', $data, false);
    }

    public function add()
    {
        $this->form_validation->set_rules('judul_berita', 'Judul', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required', array('required' => '%s Harus Diisi'));
        // $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        // $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        // $this->form_validation->set_rules('id_mapel', 'Mata Pelajaran', 'required');
        // $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
        // $this->form_validation->set_rules('foto_guru', 'Foto Guru', 'required');


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './gambar_berita/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar_berita')) {
                $data = array(
                    'title' => 'ADMIN web sekolah',
                    'title2' => 'Tambah Daftar Berita',
                    'error' => $this->upload->display_errors(),
                    'isi' => 'admin/berita/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, false);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './gambar_berita/' . $upload_data['uploads']['file_name'];

                $this->load->library('image_lib', $config);

                $data = array(
                    'judul_berita' => $this->input->post('judul_berita'),
                    'slug_berita' => url_title($this->input->post('judul_berita'), 'dash', TRUE),
                    'isi_berita' => $this->input->post('isi_berita'),
                    'kategori_berita' => $this->input->post('katogori_berita'),
                    'tgl_berita' => date('Y-m-d'),
                    'id_user' => $this->session->userdata('id_user'),
                    'gambar_berita' => $upload_data['uploads']['file_name']
                );
                $this->m_berita->add($data);

                $this->session->set_flashdata('pesan', 'Berhasil Di Simpan!');
                redirect('berita');
            }
        }
        $data = array(
            'title' => 'ADMIN web sekolah',
            'title2' => 'Add Berita',
            'isi' => 'admin/berita/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, false);
    }

    public function edit($id_berita)
    {
        $this->form_validation->set_rules('judul_berita', 'Judul', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required', array('required' => '%s Harus Diisi'));
        // $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        // $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        // $this->form_validation->set_rules('id_mapel', 'Mata Pelajaran', 'required');
        // $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
        // $this->form_validation->set_rules('foto_guru', 'Foto Guru', 'required');


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './gambar_berita/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2000';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar_berita')) {
                $data = array(
                    'title' => 'ADMIN web sekolah',
                    'title2' => 'Edit Berita',
                    'error' => $this->upload->display_errors(),
                    'berita' => $this->m_berita->detail($id_berita),
                    'isi' => 'admin/berita/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, false);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './gambar_berita/' . $upload_data['uploads']['file_name'];

                $this->load->library('image_lib', $config);

                $berita = $this->m_berita->detail($id_berita);
                if ($berita->gambar_berita != "") {
                    unlink('./gambar_berita/' . $berita->gambar_berita);
                }
                $data = array(
                    'id_berita' => $id_berita,
                    'judul_berita' => $this->input->post('judul_berita'),
                    'slug_berita' => url_title($this->input->post('judul_berita'), 'dash', TRUE),
                    'isi_berita' => $this->input->post('isi_berita'),
                    'kategori_berita' => $this->input->post('kategori_berita'),
                    'id_user' => $this->session->userdata('id_user'),
                    'gambar_berita' => $upload_data['uploads']['file_name']
                );
                $this->m_berita->edit($data);

                $this->session->set_flashdata('pesan', 'Berhasil Di Simpan!');
                redirect('berita');
            }
            $data = array(
                'id_berita' => $id_berita,
                'judul_berita' => $this->input->post('judul_berita'),
                'slug_berita' => url_title($this->input->post('judul_berita'), 'dash', TRUE),
                'isi_berita' => $this->input->post('isi_berita'),
                'kategori_berita' => $this->input->post('kategori_berita'),
                'id_user' => $this->session->userdata('id_user'),
            );
            $this->m_berita->edit($data);

            $this->session->set_flashdata('pesan', 'Berhasil Di Simpan!');
            redirect('berita');
        }
        $data = array(
            'title' => 'ADMIN web sekolah',
            'title2' => 'Add Berita',
            'berita' => $this->m_berita->detail($id_berita),
            'isi' => 'admin/berita/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, false);
    }
    public function delete($id_berita)
    {
        $berita = $this->m_berita->detail($id_berita);
        if ($berita->gambar_berita != "") {
            unlink('./gambar_berita/' . $berita->gambar_berita);
        }

        $data = array('id_berita' => $id_berita);
        $this->m_berita->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Di hapus!');
        redirect('berita');
    }
    public function test_unit($id_berita)
    {
        // $berita = $this->m_berita->detail($id_berita);
        $data = array('id_berita' => $id_berita);
        $test = $this->m_berita->test_unit($data);
        $test_name = "PENGUJIAN TEST DELETE";
        $this->unit->run($test, $test_name);
    }
}

/* End of file Berita.php */
