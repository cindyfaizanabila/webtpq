<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Pesan_model $Pesan_model
 * @property Layanan_model $Layanan_model
 * @property CI_Session $session
 */

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pesan_model');
    }

    public function pesan_ortu() {
        $data['judul'] = 'Pesan dari Orang Tua';
        $data['pesan'] = $this->Pesan_model->get_all_pesan(); 
        $this->load->view('admin/pesan_ortu', $data);
    }

    public function hapus($id) {
        $this->load->model('Pesan_model');
        
        if ($this->Pesan_model->hapus($id)) {
            $this->session->set_flashdata('success', 'Pesan berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus pesan.');
        }

        redirect('admin/pesan_ortu'); // Pastikan sesuai dengan halaman daftar pesanmu
    }

}
