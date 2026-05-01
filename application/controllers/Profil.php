<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
    public function index()
    {
		$this->load->view('layout/header');
        $this->load->view('profil');
		$this->load->view('layout/footer');
    }
}