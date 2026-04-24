<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_CMS'); 
    }
    
    public function index()
    {
        $data['hero_images'] = $this->M_CMS->get_hero();
        $data['features']    = $this->M_CMS->get_features();
        $data['banner']      = $this->M_CMS->get_banner();
        $data['zigzags']     = $this->M_CMS->get_zigzag();

        $this->load->view('layout/header');
        
        $this->load->view('home_view', $data); 
        
        $this->load->view('layout/footer');
    }
}