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
		font-size: 50px;
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

	#warna{
		background-color: #00FFFF;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Bea Cukai Kediri</h1>
	<div id="body">
		<a href="<?php echo site_url('welcome/tambahData') ?>">Tambah Data</a>
		<table border="5" width="3000px" >
			<tr id="warna">
				<td>No.</td>
				<td>TGI Surat</td>
				<td>Asal</td>
				<td>Tanggal Surat</td>
				<td>Dasar Surat</td>
				<td>No. SPD</td>
				<td>Nama 1</td>
				<td>No. SPD</td>
				<td>Nama 2</td>
				<td>No. SPD</td>
				<td>Nama 3</td>
				<td>No. SPD</td>
				<td>Nama 4</td>
				<td>No. SPD</td>
				<td>Nama 5</td>
				<td>No. SPD</td>
				<td>Nama 6</td>
				<td>Penugasan</td>
				<td>Tanggal Berangkat</td>
				<td>Tanggal Selesai</td>
				<td>Durasi</td>
				<td>Jangka Waktu</td>
				<td>Berangkat Dari</td>
				<td>Tujuan</td>
				<td>Kendaraan</td>
				<td>Penandatanganan</td>
				<td>Opsi</td>
			</tr>
			<?php
			$no = 1;
			foreach ($hasil as $r){?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['tgi_surat']?></td>
				<td><?php echo $r['asal']?></td>
				<td><?php echo $r['tanggal_surat']?></td>
				<td><?php echo $r['dasar_surat']?></td>
				<td><?php echo $r['no_spd1']?></td>
				<td><?php echo $r['nama1']?></td>
				<td><?php echo $r['no_spd2']?></td>
				<td><?php echo $r['nama2']?></td>
				<td><?php echo $r['no_spd3']?></td>
				<td><?php echo $r['nama3']?></td>
				<td><?php echo $r['no_spd4']?></td>
				<td><?php echo $r['nama4']?></td>
				<td><?php echo $r['no_spd5']?></td>
				<td><?php echo $r['nama5']?></td>
				<td><?php echo $r['no_spd6']?></td>
				<td><?php echo $r['nama6']?></td>
				<td><?php echo $r['penugasan']?></td>
				<td><?php echo $r['tgl_berangkat']?></td>
				<td><?php echo $r['tanggal_selesai']?></td>
				<td><?php echo $r['durasi']?></td>
				<td><?php echo $r['jangka_waktu']?></td>
				<td><?php echo $r['berangkat_dari']?></td>
				<td><?php echo $r['tujuan']?></td>
				<td><?php echo $r['kendaraan']?></td>
				<td><?php echo $r['penandatangan']?></td>
				<td>
					<a href="<?php echo site_url('welcome/editData/'.$r['no_surat']) ?>">Edit</a> || 
					<a href="<?php echo site_url('welcome/delete/'.$r['no_surat']) ?>" onclick="return confirm('yakin mau dihapus datanya?')">Hapus</a> ||
					<a href="<?php echo site_url('laporan/cetak_pegawai/')?>">Cetak</a>
				</td>
			</tr>
			<?php }?>
		</table>	
	</div>
</div>

</body>
</html>