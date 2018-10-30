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
	<h1>Form Input	</h1>
	<div id="body">
		<a href="<?php echo site_url('welcome/index') ?>">Kembali</a>
		<form action="<?php echo site_url('welcome/insert') ?>" method="POST">
			<div id="container-left">
				TGI Surat <br>
			<input type="date" name="tgi_surat"/></br>
			Asal <br>
			<input type="text" name="asal"/></br>
			Tanggal Surat <br>
			<input type="date" name="tanggal_surat"/></br>
			Dasar Surat <br>
			<input type="text" name="dasar_surat"/></br>
			No. Spd <br>
			<input type="number" name="no_spd1"/></br>
			Nama1 <br>
			<input type="text" name="nama1"/></br>
			No. Spd <br>
			<input type="number" name="no_spd2"/></br>
			Nama 2 <br>
			<input type="text" name="nama2"/></br>
			No. Spd <br>
			<input type="number" name="no_spd3"/></br>
			Nama 3 <br>
			<input type="text" name="nama3"/>
			</br>No. Spd <br>
			<input type="number" name="no_spd4"/></br>
			Nama 4<br>
			<input type="text" name="nama4"/>
			</br>No. Spd <br>
			<input type="number" name="no_spd5"/></br>
			Nama 5 <br>
			<input type="text" name="nama5"/></br>No. Spd <br>
			<input type="number" name="no_spd6"/></br>
			Nama 6 <br>
			<input type="text" name="nama6"/></br>
			</div>
			<div id="container-right">
				Penugasan <br>
			<textarea type="text" name="penugasan"></textarea><br>
			Tanggal Berangkat <br>
			<input type="date" name="tgl_berangkat"/></br>
			Tanggal Selesai <br>
			<input type="date" name="tanggal_selesai"/></br>
			Durasi <br>
			<input type="number" name="durasi"/></br>
			Jangka Waktu<br>
			<input type="text" name="jangka_waktu"/><br>
			Berangkat Dari<br>
			<input type="text" name="berangkat_dari"/><br>
			Tujuan<br>
			<input type="text" name="tujuan"/><br>
			Kendaraan<br>
			<input type="text" name="kendaraan"/><br>
			Penandatanganan<br>
			<input type="text" name="penandatangan"/><br>
			
			<input type="submit" name="simpan" value="simpan"/>
			</div>
		</form>	
	</div>
</div>

</body>
</html>