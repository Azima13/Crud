<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->data['hasil'] = $this->model_crud->getUser('data_crud');
		$this->load->view('welcome_message', $this->data);
	}

	public function tambahData()
	{
		$this->load->view('tambahData');
	}

	public function editData($id)
	{
		$this->data['dataEdit'] =  $this->model_crud->dataEdit('data_crud',$id);
		$this->load->view('editData', $this->data);
	}

	public function Insert()
	{
		$tgi_surat = $_POST['tgi_surat'];
		$asal = $_POST['asal'];
		$tanggal_surat = $_POST['tanggal_surat'];
		$dasar_surat = $_POST['dasar_surat'];
		$no_spd1 = $_POST['no_spd1'];
		$nama1 = $_POST['nama1'];
		$no_spd2 = $_POST['no_spd2'];
		$nama2 = $_POST['nama2'];
		$no_spd3 = $_POST['no_spd3'];
		$nama3 = $_POST['nama3'];
		$no_spd4 = $_POST['no_spd4'];
		$nama4 = $_POST['nama4'];
		$no_spd5 = $_POST['no_spd5'];
		$nama5 = $_POST['nama5'];
		$no_spd6 = $_POST['no_spd6'];
		$nama6 = $_POST['nama6'];
		$penugasan = $_POST['penugasan'];
		$tgl_berangkat = $_POST['tgl_berangkat'];
		$tanggal_selesai = $_POST['tanggal_selesai'];
		$durasi = $_POST['durasi'];
		$jangka_waktu =$_POST['jangka_waktu'];
		$berangkat_dari = $_POST['berangkat_dari'];
		$tujuan = $_POST['tujuan'];
		$kendaraan = $_POST['kendaraan'];
		$penandatangan = $_POST['penandatangan'];

		$data = array('tgi_surat' => $tgi_surat ,'asal' => $asal ,  'tanggal_surat' => $tanggal_surat , 'dasar_surat' => $dasar_surat , 'no_spd1' => $no_spd1 , 'nama1' => $nama1, 'no_spd2' => $no_spd2 , 'nama2' => $nama2, 'no_spd3' => $no_spd3 , 'nama3' => $nama3, 'no_spd4' => $no_spd4 , 'nama4' => $nama4, 'no_spd5' => $no_spd5 , 'nama5' => $nama5, 'no_spd6' => $no_spd6 , 'nama6' => $nama6, 'penugasan' => $penugasan, 'tgl_berangkat' => $tgl_berangkat, 'tanggal_selesai' => $tanggal_selesai, 'durasi' => $durasi, 'jangka_waktu' => $jangka_waktu, 'berangkat_dari' => $berangkat_dari, 'tujuan' => $tujuan, 'kendaraan' => $kendaraan, 'penandatangan' => $penandatangan);
		$tambah = $this->model_crud->tambahData('data_crud',$data);
		if ($tambah > 0) {
			redirect('welcome/index');
		}else{
			echo "Gagal Disimpan";
		}

	}

	public function delete($id)
	{
		$hapus = $this->model_crud->hapusData('data_crud',$id);
		if ($hapus > 0) {
			redirect('welcome/index');
		}else{
			echo "Gagal Disimpan";
		}
	}

	public function update($id)
	{
		$tgi_surat = $_POST['tgi_surat'];
		$asal = $_POST['asal'];
		$tanggal_surat = $_POST['tanggal_surat'];
		$dasar_surat = $_POST['dasar_surat'];
		$no_spd1 = $_POST['no_spd1'];
		$nama1 = $_POST['nama1'];
		$no_spd2 = $_POST['no_spd2'];
		$nama2 = $_POST['nama2'];
		$no_spd3 = $_POST['no_spd3'];
		$nama3 = $_POST['nama3'];
		$no_spd4 = $_POST['no_spd4'];
		$nama4 = $_POST['nama4'];
		$no_spd5 = $_POST['no_spd5'];
		$nama5 = $_POST['nama5'];
		$no_spd6 = $_POST['no_spd6'];
		$nama6 = $_POST['nama6'];
		$penugasan = $_POST['penugasan'];
		$tgl_berangkat = $_POST['tgl_berangkat'];
		$tanggal_selesai = $_POST['tanggal_selesai'];
		$durasi = $_POST['durasi'];
		$jangka_waktu =$_POST['jangka_waktu'];
		$berangkat_dari = $_POST['berangkat_dari'];
		$tujuan = $_POST['tujuan'];
		$kendaraan = $_POST['kendaraan'];
		$penandatangan = $_POST['penandatangan'];
		
		$data = array('tgi_surat' => $tgi_surat ,'asal' => $asal ,  'tanggal_surat' => $tanggal_surat , 'dasar_surat' => $dasar_surat , 'no_spd1' => $no_spd1 , 'nama1' => $nama1, 'no_spd2' => $no_spd2 , 'nama2' => $nama2, 'no_spd3' => $no_spd3 , 'nama3' => $nama3, 'no_spd4' => $no_spd4 , 'nama4' => $nama4, 'no_spd5' => $no_spd5 , 'nama5' => $nama5, 'no_spd6' => $no_spd6 , 'nama6' => $nama6, 'penugasan' => $penugasan, 'tgl_berangkat' => $tgl_berangkat, 'tanggal_selesai' => $tanggal_selesai, 'durasi' => $durasi, 'jangka_waktu' => $jangka_waktu, 'berangkat_dari' => $berangkat_dari, 'tujuan' => $tujuan, 'kendaraan' => $kendaraan, 'penandatangan' => $penandatangan);
		$edit = $this->model_crud->editData('data_crud',$data,$id);
		if ($edit > 0) {
			redirect('welcome/index');
		}else{
			echo "Gagal Disimpan";
		}

	}
}
