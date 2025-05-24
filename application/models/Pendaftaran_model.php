<?php
class Pendaftaran_model extends CI_Model
{
    public function simpan($data)
    {
        return $this->db->insert('pendaftaran', $data);
    }
}
