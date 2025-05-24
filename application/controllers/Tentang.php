<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

    public function profil_madrasah()
    {
        $this->load->view('layouts/header');       
        $this->load->view('tentang/profil_madrasah');        
        $this->load->view('layouts/footer');       
    }

    public function sejarah_madrasah()
    {
        $this->load->view('layouts/header');     
        $this->load->view('tentang/sejarah_madrasah');      
        $this->load->view('layouts/footer');      
    }

    public function visi_misi()
    {
        $this->load->view('layouts/header');      
        $this->load->view('tentang/visi_misi');       
        $this->load->view('layouts/footer');      
    }

    public function struktur_organisasi()
    {
        $this->load->view('layouts/header');       
        $this->load->view('tentang/struktur_organisasi');        
        $this->load->view('layouts/footer');       
    }

}
