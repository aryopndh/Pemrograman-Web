<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1-2 Perulangan</title>
</head>
<body>

</body>
</html>
<?php
// menggunakan while loop
	echo "While Loop";
	echo "<br>";
	$a = 1;

	while ($a <= 5){
		$b = 5;
		while ($b >= 1){
			if ($a < $b){
				echo '';
			} else {
				echo $a;
			} 
			$b--;
		}
		echo "<br>";
		$a++;
	}
	echo "<br>";
	echo "<br>";
?>
<?php  
//menggunakan for loop
	echo "For Loop";
	echo "<br>";
	for ($a = 1; $a <= 5; $a++){
		for ($b = 5; $b >= 1; $b--){
			if ($a < $b){
				echo '';
			} else {
				echo $a;
			}
		}
		echo "<br>";
	}

?>