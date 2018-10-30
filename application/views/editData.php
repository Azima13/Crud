<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bea Cukai Kediri</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Form Edit 	</h1>

	<div id="body">
		<a href="<?php echo site_url('welcome/index') ?>">Kembali</a>
		<?php if ($dataEdit){
			$id = $dataEdit->no_surat;
			$tgi_surat = $dataEdit->tgi_surat;
			$asal = $dataEdit->asal;
			$tanggal_surat = $dataEdit->tanggal_surat;
			$dasar_surat = $dataEdit->dasar_surat;
			$no_spd1 = $dataEdit->no_spd1;
			$nama1 = $dataEdit->nama1;
			$no_spd2 = $dataEdit->no_spd2;
			$nama2 = $dataEdit->nama2;
			$no_spd3 = $dataEdit->no_spd3;
			$nama3 = $dataEdit->nama3;
			$no_spd4 = $dataEdit->no_spd4;
			$nama4 = $dataEdit->nama4;
			$no_spd5 = $dataEdit->no_spd5;
			$nama5 = $dataEdit->nama5;
			$no_spd6 = $dataEdit->no_spd6;
			$nama6 = $dataEdit->nama6;
			$penugasan = $dataEdit->penugasan;
			$tgl_berangkat = $dataEdit->tgl_berangkat;
			$tanggal_selesai = $dataEdit->tanggal_selesai;
			$durasi = $dataEdit->durasi;
			$jangka_waktu = $dataEdit->jangka_waktu;
			$berangkat_dari = $dataEdit->berangkat_dari;
			$tujuan = $dataEdit->tujuan;
			$kendaraan = $dataEdit->kendaraan;
			$penandatangan = $dataEdit->penandatangan;
		} else{
			$tgi_surat = "";
			$asal = "";
			$tanggal_surat = "";
			$dasar_surat = "";
			$no_spd1 = "";
			$nama1 = "";
			$no_spd2 = "";
			$nama2 = "";
			$no_spd3 = "";
			$nama3 = "";
			$no_spd4 = "";
			$nama4 = "";
			$no_spd5 = "";
			$nama5 = "";
			$no_spd6 = "";
			$nama6 = "";
			$penugasan = "";
			$tgl_berangkat = ""; 
			$tanggal_selesai = "";
			$durasi = "";
			$jangka_waktu = ""; 
			$berangkat_dari = "";
			$tujuan = "";
			$kendaraan = "";
			$penandatangan = "";

		}?>
		<form action="<?php echo site_url('welcome/update/'.$id) ?>" method="POST">
			<div>
				TGI Surat <br>
			<input type="date" name="tgi_surat" value="<?php echo $tgi_surat ?>"/></br>
			Asal <br>
			<input type="text" name="asal" value="<?php echo $asal ?>"/></br>
			Tanggal Surat <br>
			<input type="date" name="tanggal_surat" value="<?php echo $tanggal_surat ?>"/></br>
			Dasar Surat <br>
			<input type="text" name="dasar_surat" value="<?php echo $dasar_surat ?>"/></br>
			No. Spd <br>
			<input type="number" name="no_spd1" value="<?php echo $no_spd1 ?>"/></br>
			Nama1 <br>
			<input type="text" name="nama1" value="<?php echo $nama1 ?>"/></br>
			No. Spd <br>
			<input type="number" name="no_spd2" value="<?php echo $no_spd2 ?>"/></br>
			Nama2 <br>
			<input type="text" name="nama2" value="<?php echo $nama2 ?>"/></br>
			No. Spd <br>
			<input type="number" name="no_spd3" value="<?php echo $no_spd3 ?>"/></br>
			Nama3 <br>
			<input type="text" name="nama3" value="<?php echo $nama3 ?>"/></br>
			No. Spd <br>
			<input type="number" name="no_spd4" value="<?php echo $no_spd4 ?>"/></br>
			Nama4 <br>
			<input type="text" name="nama4" value="<?php echo $nama4 ?>"/></br>
			No. Spd <br>
			<input type="number" name="no_spd5" value="<?php echo $no_spd5 ?>"/></br>
			Nama5 <br>
			<input type="text" name="nama5" value="<?php echo $nama5 ?>"/></br>
			No. Spd <br>
			<input type="number" name="no_spd6" value="<?php echo $no_spd6 ?>"/></br>
			Nama6 <br>
			<input type="text" name="nama6" value="<?php echo $nama6 ?>"/></br>
			
			</div>
			<div>
			Penugasan <br>
			<textarea type="text" name="penugasan" value="<?php echo $penugasan ?>"/></textarea><br>
			Tanggal Berangkat <br>
			<input type="date" name="tgl_berangkat" value="<?php echo $tgl_berangkat ?>" /></br>
			Tanggal Selesai <br>
			<input type="date" name="tanggal_selesai" value="<?php echo $tanggal_selesai ?>" /></br>
			Durasi <br>
			<input type="number" name="durasi" value="<?php echo $durasi ?>" /></br>
			Jangka Waktu<br>
			<input type="text" name="jangka_waktu" value="<?php echo $jangka_waktu ?>" /><br>
			Berangkat Dari<br>
			<input type="text" name="berangkat_dari" value="<?php echo $berangkat_dari ?>" /><br>
			Tujuan<br>
			<input type="text" name="tujuan" value="<?php echo $tujuan ?>" /><br>
			Kendaraan<br>
			<input type="text" name="kendaraan" value="<?php echo $kendaraan ?>" /><br>
			Penandatanganan<br>
			<input type="text" name="penandatangan" value="<?php echo $penandatangan ?>" /><br>
			</div>
			<input type="submit" name="simpan" value="simpan"/>
		</form>	
	</div>
</div>

</body>
</html>