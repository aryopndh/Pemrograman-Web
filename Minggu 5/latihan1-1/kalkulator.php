<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1-1 PHP</title>
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
		
	<form method="post" action="kalkulator.php">	
		<input type="text" name="bil1" class="bil"  placeholder="Masukkan Bilangan Pertama">
			<br>				
		<input type="text" name="bil2" class="bil"  placeholder="Masukkan Bilangan Kedua">
			<br>
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			
			<input type="submit" name="hitung" value="Hitung" class="tombol">				
								
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
	
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		
		<?php }else{ ?>
		
			<input type="text" value="0" class="bil">
		<?php } ?>			
</body>
</html>