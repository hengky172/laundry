<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_transaksi');
    }
    public function tambah()
    {
        $isi['content'] = 'backend/transaksi/t_transaksi';
        $isi['judul'] = 'Form Tambah Transaksi';
        $isi['konsumen'] = $this->db->get('konsumen')->result();
        $isi['paket'] = $this->db->get('paket')->result();
        $isi['kode_transaksi'] = $this->m_transaksi->generateKode();
        $this->load->view('backend/dashboard', $isi);
    }
    public function getHargaPaket()
    {
        $kode_paket = $this->input->post('kode_paket');
        $data = $this->m_transaksi->getHargaPaket($kode_paket);
        echo json_encode($data);
    }
    public function simpan()
    {
        $data = array(
            'kode_transaksi' => $this->input->post('kode_transaksi'),
            'kode_konsumen' => $this->input->post('kode_konsumen'),
            'kode_paket' => $this->input->post('kode_paket'),
            'tgl_masuk' => $this->input->post('tgl_masuk'),
            'tgl_ambil' => '',
            'berat' => $this->input->post('berat'),
            'grand_total' => $this->input->post('grand_total'),
            'bayar' => $this->input->post('bayar'),
            'status' => $this->input->post('status')
        );
        $query = $this->db->insert('transaksi', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Transaksi Berhasil di Simpan !!!');
            redirect('transaksi/tambah', 'refresh');
        }
    }

    public function riwayat()
    {
        $isi['content'] = 'backend/transaksi/riwayat_transaksi';
        $isi['judul'] = 'Riwayat Transaksi';
        $isi['data'] = $this->m_transaksi->getAllRiwayat();
        $this->load->view('backend/dashboard', $isi);
    }

    public function edit_transaksi($kode_transaksi)
    {
        $isi['content'] = 'backend/transaksi/edit_transaksi';
        $isi['judul'] = 'Form Edit Transaksi';
        $isi['transaksi'] = $this->m_transaksi->edit_transaksi($kode_transaksi);
        $isi['konsumen'] = $this->db->get('konsumen')->result();
        $isi['paket'] = $this->db->get('paket')->result();
        $this->load->view('backend/dashboard', $isi);
    }

    public function update()
    {
        $kode_transaksi = $this->input->post('kode_transaksi');
        $data = array(
            'kode_transaksi' => $this->input->post('kode_transaksi'),
            'kode_konsumen' => $this->input->post('kode_konsumen'),
            'kode_paket' => $this->input->post('kode_paket'),
            'tgl_masuk' => $this->input->post('tgl_masuk'),
            'tgl_ambil' => '',
            'berat' => $this->input->post('berat'),
            'grand_total' => $this->input->post('grand_total'),
            'bayar' => $this->input->post('bayar'),
            'status' => $this->input->post('status')
        );
        $query = $this->m_transaksi->update($kode_transaksi, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Transaksi Berhasil di Edit !!!');
            redirect('transaksi/riwayat', 'refresh');
        }
    }
}
