<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Input $input
 * @property CI_Form_validation $form_validation
 * @property Pendaftaran_model $Pendaftaran_model
 * @property CI_Session $session
 */

class Pendaftaran extends CI_Controller {

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('pendaftaran/index');
        $this->load->view('layouts/footer');
    }

}

 
