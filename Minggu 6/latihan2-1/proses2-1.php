<html>
<head>
	<title>latihan2-1 (hasil)</title>
</head>
<body>
	<h3 align="center"><blink>Hasil Nilai</blink></h3>
<table align="center" border="2">
	<?php
		$program_studi =$_POST ['program_studi'];
		$nim=$_POST['nim'];
		$tugas=$_POST['nilai_tugas'];
		$uts=$_POST['nilai_uts'];
		$uas=$_POST['nilai_uas'];
		$na=(0.40*$tugas)+(0.30*$uts)+(0.30*$uas);
		if ($na >=85)
			{
			$ket = 'Lulus' ;
			}

		else if ($na >=70)
			{
			$ket = 'Lulus' ;
			}

		else if ($na >= 60)
			{
			$ket = 'Lulus' ;
			}

		else if ($na >=50)
			{
			$ket = 'Lulus' ;
			}

		else 
			{
			$ket = 'Tidak Lulus' ;
			}

		$data_catatan_khusus=$_POST ['catatan_khusus'];
		$selected_catatan_khusus="";
			foreach($data_catatan_khusus as $catatan_khusus)
			{
				$selected_catatan_khusus .= $catatan_khusus ."<br>";
			}
	?>
<tr>
	<th>Program Studi</th>
	<th>Nim</th>
	<th>Nilai akhir</th>
	<th>Status</th>
	<th>Catatan khusus</th>
</tr>
<tr>
	<td align="center"><?php echo$program_studi; ?></td>
	<td align="center"><?php echo$nim;?></td>
	<td align="center"><?php echo$na; ?></td>
	<td align="center"><?php echo$ket;?></td>
	<td align="center"><?php echo$selected_catatan_khusus;?></td>
</tr>
</table>
</body>
</html>