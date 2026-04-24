<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model M_CMS agar bisa digunakan di controller ini
        // (Jika kamu sudah menambahkannya di autoload.php, baris ini sebenarnya opsional)
        $this->load->model('M_CMS'); 
    }
    
    public function index()
    {
        // 1. Ambil semua data dari Model dan simpan di dalam array $data
        $data['hero_images'] = $this->M_CMS->get_hero();
        $data['features']    = $this->M_CMS->get_features();
        $data['banner']      = $this->M_CMS->get_banner();
        $data['zigzags']     = $this->M_CMS->get_zigzag();

        // 2. Load View dan sisipkan $data ke dalam home_view
        $this->load->view('layout/header');
        
        // PERHATIKAN: Variabel $data wajib dimasukkan sebagai parameter kedua!
        $this->load->view('home_view', $data); 
        
        $this->load->view('layout/footer');
    }
}