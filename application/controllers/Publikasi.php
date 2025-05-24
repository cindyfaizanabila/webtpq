<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publikasi extends CI_Controller {

    public function kabar_madrasah()
    {
        $this->load->view('layouts/header');       
        $this->load->view('publikasi/kabar_madrasah');        
        $this->load->view('layouts/footer');       
    }

    public function galeri()
    {
        $this->load->view('layouts/header');     
        $this->load->view('publikasi/galeri');      
        $this->load->view('layouts/footer');      
    }
}