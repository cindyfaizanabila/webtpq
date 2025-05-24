<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kabar extends CI_Controller {

    public function artikel1()
    {
        $this->load->view('layouts/header');
        $this->load->view('kabar/artikel1');
        $this->load->view('layouts/footer');
    }
    public function artikel2()
    {
        $this->load->view('layouts/header');
        $this->load->view('kabar/artikel2');
        $this->load->view('layouts/footer');
    }
    public function artikel3()
    {
        $this->load->view('layouts/header');
        $this->load->view('kabar/artikel3');
        $this->load->view('layouts/footer');
    }
    public function artikel4()
    {
        $this->load->view('layouts/header');
        $this->load->view('kabar/artikel4');
        $this->load->view('layouts/footer');
    }
    public function artikel5()
    {
        $this->load->view('layouts/header');
        $this->load->view('kabar/artikel5');
        $this->load->view('layouts/footer');
    }
    public function artikel6()
    {
        $this->load->view('layouts/header');
        $this->load->view('kabar/artikel6');
        $this->load->view('layouts/footer');
    }
}