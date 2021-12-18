<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_logout extends CI_Model
{
    public function getlogout()
    {
        if (empty($this->session->userdata('username'))) {
            $this->session->sess_destroy();
            redirect('panel');
        }
    }
}
