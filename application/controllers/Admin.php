<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model dan library wajib
        $this->load->model('M_CMS');
        $this->load->library('upload');
        $this->load->library('session');
    }

    // Menampilkan Halaman Dashboard
    public function index() {
        $data['hero_images'] = $this->M_CMS->get_hero();
        $data['features']    = $this->M_CMS->get_features();
        $data['banner']      = $this->M_CMS->get_banner();
        $data['zigzags']     = $this->M_CMS->get_zigzag();

        $this->load->view('layout/admin_header');
        $this->load->view('admin/dashboard', $data);
    }

    // ==========================================
    // PROSES UPLOAD HERO SHOWCASE
    // ==========================================
    public function update_hero() {
        // Tangkap nomor slot dari input hidden
        $slot_number = $this->input->post('slot_number');
        
        // 1. Konfigurasi Upload CodeIgniter
        $config['upload_path']   = './assets/uploads/'; // Folder tujuan
        $config['allowed_types'] = 'jpg|jpeg|png|webp'; // Format yang diizinkan
        $config['max_size']      = 2048;                // Maksimal 2MB
        
        // Buat nama file unik (gabungan slot dan waktu) agar gambar langsung berubah tanpa ter-cache browser
        $config['file_name']     = 'hero_slot_' . $slot_number . '_' . time(); 

        $this->upload->initialize($config);

        // 2. Lakukan proses Upload
        if ($this->upload->do_upload('hero_image')) {
            // Jika sukses, ambil nama filenya
            $uploadData = $this->upload->data();
            $file_name = $uploadData['file_name'];

            // 3. Simpan nama file baru ke database
            $this->M_CMS->update_hero($slot_number, ['image_file' => $file_name]);
            
            // Buat pesan sukses
            $this->session->set_flashdata('success', 'Image Slot ' . $slot_number . ' successfully updated!');
        } else {
            // Jika gagal (file kebesaran/format salah), buat pesan error
            $this->session->set_flashdata('error', $this->upload->display_errors('',''));
        }

        // 4. Kembalikan admin ke halaman dashboard
        redirect('admin');
    }

	// ==========================================
    // PROSES UPDATE FEATURES (Teks & Gambar Opsional)
    // ==========================================
    public function update_feature() {
        $id = $this->input->post('feature_id');
        
        // 1. Ambil data teks dari input form
        $data_update = [
            'title' => $this->input->post('title')
        ];

        // 2. Cek apakah admin mengunggah gambar baru
        if (!empty($_FILES['feature_image']['name'])) {
            $config['upload_path']   = './assets/uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp|svg'; // SVG biasanya dipakai buat icon feature
            $config['max_size']      = 2048;
            $config['file_name']     = 'feature_' . $id . '_' . time();

            $this->upload->initialize($config);

            if ($this->upload->do_upload('feature_image')) {
                // Jika berhasil upload, masukkan nama gambar baru ke array update
                $data_update['image_file'] = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors('',''));
                redirect('admin');
            }
        }

        // 3. Simpan perubahan ke database (gambar tidak akan tertimpa kalau form upload kosong)
        $this->M_CMS->update_feature($id, $data_update);
        $this->session->set_flashdata('success', 'Feature Card successfully updated!');
        redirect('admin');
    }

    // ==========================================
    // PROSES UPDATE PROMO BANNER
    // ==========================================
    public function update_banner() {
        $id = $this->input->post('banner_id');
        
        $data_update = [
            'title'       => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'button_text' => $this->input->post('button_text')
        ];

        if (!empty($_FILES['banner_image']['name'])) {
            $config['upload_path']   = './assets/uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp';
            $config['max_size']      = 3072; // Banner biasanya lebih besar, kita kasih limit 3MB
            $config['file_name']     = 'banner_' . time();

            $this->upload->initialize($config);

            if ($this->upload->do_upload('banner_image')) {
                $data_update['image_file'] = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors('',''));
                redirect('admin');
            }
        }

        $this->M_CMS->update_banner($id, $data_update);
        $this->session->set_flashdata('success', 'Promotional Banner successfully updated!');
        redirect('admin');
    }

	public function save_zigzag() {
        $id = $this->input->post('zigzag_id');
        
        $data_save = [
            'title'       => $this->input->post('title'),
            'description' => $this->input->post('description')
        ];

        // Cek apakah ada file gambar yang diupload
        if (!empty($_FILES['zigzag_image']['name'])) {
            $config['upload_path']   = './assets/uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp|gif';
            $config['max_size']      = 2048;
            $config['file_name']     = 'zigzag_' . time();

            $this->upload->initialize($config);

            if ($this->upload->do_upload('zigzag_image')) {
                $data_save['image_file'] = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors('',''));
                redirect('admin');
            }
        }

        // LOGIKA PENENTU: Insert atau Update?
        if (!empty($id)) {
            // Jika ID terisi, berarti UPDATE data lama
            $this->M_CMS->update_zigzag($id, $data_save);
            $this->session->set_flashdata('success', 'Zig-Zag Row successfully updated!');
        } else {
            // Jika ID kosong, berarti INSERT baris baru
            $this->M_CMS->insert_zigzag($data_save);
            $this->session->set_flashdata('success', 'New Zig-Zag Row successfully added!');
        }

        redirect('admin');
    }

    // ==========================================
    // PROSES DELETE ZIG-ZAG
    // ==========================================
    public function delete_zigzag($id) {
        $this->M_CMS->delete_zigzag($id);
        $this->session->set_flashdata('success', 'Zig-Zag Row successfully deleted!');
        redirect('admin');
    }
}