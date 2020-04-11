<html>
<head>
	<title> latihan2_2 input</title>
</head>
<body>
<table align="center" border="1">
<form method="post" action="proses2-2.php">
	<h3 align="center"><blink>Input</blink></h3>
<tr>
	<td>NIM</td>
	<td><input type="text" name="nim"></td>
</tr>
<tr>
	<tr>
		<td>Program Studi</td>
		<td><select name="program_studi">
			<option value>Program Studi</option>
			<option value="Teknik Informatika S1">Teknik informatika S1</option>
			<option value="Sistem Informasi S1">Sistem Informasi S1</option>
			<option value="Teknik Informatika D3">Teknik Informatika D3</option>
		</select></td>
	</tr>
	<tr>
		<td>Nilai Tugas</td>
		<td><input type="text" name="nilai_tugas"></td>
	</tr>
	<tr>
		<td>Nilai UTS</td>
		<td><input type="text" name="nilai_uts"></td>
	</tr>
	<tr>
		<td>Nilai Uas</td>
		<td><input type="text" name="nilai_uas"></td>
	</tr>
	<tr>
		<td>Catatan Khusus</td>
		<td>
		<p><input type="checkbox" name="catatan_khusus[]"value="Kehadiran >= 70%">Kehadiran >= 70%</p>
		<p><input type="checkbox" name="catatan_khusus[]" value="Interaktif di kelas">Interaktif di kelas</p>
		<p><input type="checkbox" name="catatan_khusus[]" value="Tidak terlambat mengumpulkan tugas">Tidak terlambat mengumpulkan tugas</p>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<div align="center">
				<input type="submit" name="proses" value="submit"/>
			</div>
		</td>
	</tr>
</tr>
</form>
</table>
</body>
</html>