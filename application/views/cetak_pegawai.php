<?php
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Daftar Pegawai');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('Author');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h3 align="center">KEMENTRIAN KEUANGAN REPUBLIK INDONESIA</h3>
					<h5 align="center" cellpadding="1">DIREKTORAT JENDERAL BEA DAN CUKAI</h5>
					<h5 align="center" cellpadding="1">KANTOR WILAYAH JAWA TIMUR II</h5>
					<h3 align="center" cellpadding="1">KANTOR PENGAWASAN DAN PELAYANAN BEA DAN CUKAI</h3>
					<h3 align="center" cellpadding="1">TIPE MADYA CUKAI KEDRI</h3>
						<table cellspacing="1" bgcolor="#666666" cellpadding="2">
						<tr bgcolor="#ffffff">
							<th width="5%" align="center">No</th>
							<th width="5%" align="center">No_Surat</th>
							<th width="15%" align="center">Tgi_Surat</th>
							<th width="15%" align="center">Asal</th>
							<th width="15%" align="center">Tgl_Surat</th>
							<th width="15%" align="center">Dasar_Surat</th>
							<th width="15%" align="center">No_spd1</th>
							<th width="15%" align="center">Nama1</th>
						</tr>';
			foreach ($pegawai as $row) 
				{
					$i++;
					$html.='<tr bgcolor="#ffffff">
							<td align="center">'.$i.'</td>
							<td>'.$row['no_surat'].'</td>
							<td>'.$row['tgi_surat'].'</td>
							<td>'.$row['asal'].'</td>
							<td>'.$row['tanggal_surat'].'</td>
							<td>'.$row['dasar_surat'].'</td>
							<td align="right">'.number_format($row['no_spd1'],0,",",",").'</td>
							<td>'.$row['nama1'].'</td>
						</tr>';
				}
			$html.='</table>';
			$pdf->writeHTML($html, true, false, true, false, '');
			$pdf->Output('daftar_pegawai.pdf', 'I');
?>