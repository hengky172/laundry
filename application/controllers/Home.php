<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $isi['paket'] = $this->db->get('paket')->result();
        $this->load->view('frontend/header');
        $this->load->view('frontend/home', $isi);
        $this->load->view('frontend/footer');
    }
}
