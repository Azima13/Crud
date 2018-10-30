<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {
    public function __construct()
        {
            parent::__construct();
            $this->load->library('Pdf');
            $this->load->model('pegawai_model');
        }
    public function contoh()
        {
            $this->load->view('contoh', $data);
        }
    public function cetak_pegawai()
        {
            $data['pegawai'] = $this->pegawai_model->get_pegawai();
            $this->load->view('cetak_pegawai', $data);
            
        }
}
