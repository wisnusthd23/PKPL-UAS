<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_home');
    }

    public function index()
    {
        $data = array(
            'title' => 'web sekolah',
            'berita' => $this->m_home->side_berita(),
            'guru' => $this->m_home->side_guru(),
            'pengumuman' => $this->m_home->pengumuman(),
            'isi' => 'v_home'
        );
        $this->load->view('layout/v_wrapper', $data, false);
    }

    public function download()
    {
        $data = array(
            'title' => 'Download',
            'download' => $this->m_home->download(),
            'isi' => 'v_download'
        );
        $this->load->view('layout/v_wrapper', $data, false);
    }

    public function guru()
    {
        $data = array(
            'title' => 'Guru',
            'guru' => $this->m_home->guru(),
            'isi' => 'v_guru'
        );
        $this->load->view('layout/v_wrapper', $data, false);
    }

    public function berita()
    {

        $this->load->library('pagination');
        $config['base_url'] = base_url('home/berita');
        $config['total_rows'] = count($this->m_home->total_berita());
        $config['per_page'] = 6;
        $config['uri_segmen'] = 3;

        $limit = $config['per_page'];
        $start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;

        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div class="text-center"><ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['full_tag_close'] = '</ul></div>';

        $this->pagination->initialize($config);

        $data = array(
            'paginasi' => $this->pagination->create_links(),
            'berita_terakhir' => $this->m_home->berita_terakhir(),
            'title' => 'Berita',
            'berita' => $this->m_home->berita($limit, $start),
            'isi' => 'v_berita'
        );
        $this->load->view('layout/v_wrapper', $data, false);
    }

    public function detail_berita($slug_berita)
    {
        $this->load->library('pagination');
        $config['base_url'] = base_url('home/berita');
        $config['total_rows'] = count($this->m_home->total_berita());
        $config['per_page'] = 6;
        $config['uri_segmen'] = 3;
        $limit = $config['per_page'];
        $start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
        $data = array(
            'title' => 'Detail Berita',
            'berita_terakhir' => $this->m_home->berita_terakhir(),
            'berita' => $this->m_home->detail_berita($slug_berita),
            'beritaa' => $this->m_home->berita($limit, $start),
            'isi' => 'v_detail_berita'
        );
        $this->load->view('layout/v_wrapper', $data, false);
    }

    public function contact()
    {
        $data = array(
            'title' => 'Contact',
            // 'gallery' => $this->m_home->gallery(),
            'isi' => 'v_contact'
        );
        $this->load->view('layout/v_wrapper', $data, false);
    }
    public function gallery()
    {
        $data = array(
            'title' => 'Gallery',
            'gallery' => $this->m_home->gallery(),
            'isi' => 'v_gallery'
        );
        $this->load->view('layout/v_wrapper', $data, false);
    }

    public function detail_gallery($id_gallery)
    {
        $data = array(
            'title' => 'Gallery',
            'detail_gallery' => $this->m_home->detail_gallery($id_gallery),
            'nama_gallery' => $this->m_home->nama_gallery($id_gallery),
            'isi' => 'v_detail_gallery'
        );
        $this->load->view('layout/v_wrapper', $data, false);
    }

    public function siswa()
    {
        $data = array(
            'title' => 'Siswa',
            'siswa' => $this->m_home->siswa(),
            'isi' => 'v_siswa'
        );
        $this->load->view('layout/v_wrapper', $data, false);
    }

    public function profile()
    {
        $data = array(
            'title' => 'Profile Sekolah',
            'profile' => $this->m_setting->detail(),
            'isi' => 'v_profile'
        );
        $this->load->view('layout/v_wrapper', $data, false);
    }
}
