<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_model extends CI_Model {

    public function get_all_pesan() {
        return $this->db->order_by('tanggal_kirim', 'DESC')->get('pesan_ortu')->result();
    }

    public function simpan_pesan($data) {
        return $this->db->insert('pesan_ortu', $data);
    }

    public function hapus($id) {
        $this->db->where('id', $id);
        $this->db->delete('pesan_ortu'); 
    }
}
