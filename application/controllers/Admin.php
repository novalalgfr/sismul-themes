<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function index()
    {
        $this->load->view('layout/admin_header');
        $this->load->view('admin/dashboard');
        $this->load->view('layout/admin_footer');
    }
}