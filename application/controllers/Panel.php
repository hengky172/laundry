<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Panel extends CI_Controller
{
    public function index()
    {
        $this->load->view('backend/login');
    }
}
