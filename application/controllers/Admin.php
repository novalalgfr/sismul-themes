<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_CMS');
        $this->load->library('upload');
        $this->load->library('session');
    }

    public function index() {
        $data['hero_images'] = $this->M_CMS->get_hero();
        $data['features']    = $this->M_CMS->get_features();
        $data['banner']      = $this->M_CMS->get_banner();
        $data['zigzags']     = $this->M_CMS->get_zigzag();

        $this->load->view('layout/admin_header');
        $this->load->view('admin/dashboard', $data);
    }

    public function update_hero() {
        $slot_number = $this->input->post('slot_number');
        
        $config['upload_path']   = './assets/uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['max_size']      = 2048;
        $config['file_name']     = 'hero_slot_' . $slot_number . '_' . time();

        $this->upload->initialize($config);

        if ($this->upload->do_upload('hero_image')) {
            $uploadData = $this->upload->data();
            $file_name = $uploadData['file_name'];

            $this->M_CMS->update_hero($slot_number, ['image_file' => $file_name]);
            $this->session->set_flashdata('success', 'Image Slot ' . $slot_number . ' successfully updated!');
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors('',''));
        }

        redirect('admin');
    }

    public function update_feature() {
        $id = $this->input->post('feature_id');
        
        $data_update = [
            'title' => $this->input->post('title')
        ];

        if (!empty($_FILES['feature_image']['name'])) {
            $config['upload_path']   = './assets/uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp|svg';
            $config['max_size']      = 2048;
            $config['file_name']     = 'feature_' . $id . '_' . time();

            $this->upload->initialize($config);

            if ($this->upload->do_upload('feature_image')) {
                $data_update['image_file'] = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors('',''));
                redirect('admin');
            }
        }

        $this->M_CMS->update_feature($id, $data_update);
        $this->session->set_flashdata('success', 'Feature Card successfully updated!');
        redirect('admin');
    }

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
            $config['max_size']      = 3072;
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

        if (!empty($id)) {
            $this->M_CMS->update_zigzag($id, $data_save);
            $this->session->set_flashdata('success', 'Zig-Zag Row successfully updated!');
        } else {
            $this->M_CMS->insert_zigzag($data_save);
            $this->session->set_flashdata('success', 'New Zig-Zag Row successfully added!');
        }

        redirect('admin');
    }

    public function delete_zigzag($id) {
        $this->M_CMS->delete_zigzag($id);
        $this->session->set_flashdata('success', 'Zig-Zag Row successfully deleted!');
        redirect('admin');
    }
}