<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Input $input
 * @property CI_Form_validation $form_validation
 * @property Pesan_model $Pesan_model
 */

class Hubungi extends CI_Controller {

    public function layanan_ortu()
    {
        $this->load->helper(['form', 'url']);
        $this->load->library('form_validation');
        $this->load->model('Pesan_model');

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor HP', 'required|numeric');
        $this->form_validation->set_rules('surel', 'Surel', 'required|valid_email');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('layouts/header');
            $this->load->view('hubungi/layanan_ortu');
            $this->load->view('layouts/footer');
        } else {
            $data_pesan = [
                'nama' => $this->input->post('nama'),
                'nomor' => $this->input->post('nomor'),
                'surel' => $this->input->post('surel'),
                'pesan' => $this->input->post('pesan')
            ];

            $this->Pesan_model->simpan_pesan($data_pesan);

            $this->load->view('layouts/header');
            $this->load->view('hubungi/terimakasih');
            $this->load->view('layouts/footer');
        }
    }

    public function kontak()
    {
        $this->load->view('layouts/header');     
        $this->load->view('hubungi/kontak');      
        $this->load->view('layouts/footer');      
    }

}
