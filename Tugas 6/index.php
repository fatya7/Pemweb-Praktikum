<?php
function angkaRomawi($angka)
{
	 $angka = intval($angka);
	 $result = '';
	 
	 $array = array('M' => 1000,
	 'CM' => 900,
	 'D' => 500,
	 'CD' => 400,
	 'C' => 100,
	 'XC' => 90,
	 'L' => 50,
	 'XL' => 40,
	 'X' => 10,
	 'IX' => 9,
	 'V' => 5,
	 'IV' => 4,
	 'I' => 1);
	 
	 foreach($array as $roman => $value){
	  $matches = intval($angka/$value);
	 
	  $result .= str_repeat($roman,$matches);
	 
	  $angka = $angka % $value;
	 }
	 
	 return $result;
}

?>
<html>
<!-- by Fitra Ilyasa - 120140048 -->
<!-- Praktikum Pemrograman Web RA - Tugas 6 -->
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="UTF-8" />
        <meta name="description" content="Romawi, Fitra Ilyasa" />
        <meta name="keywords" content="Romawi, Fitra, Ilyasa, Fitra Ilyasa" />
        <title>ROMAWI - Fitra Ilyasa</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>

		<form action="#" method="POST" align="center">
		Angka : <input type="number" name="angka"><br><br>
		<button type="submit">Konversi</button>
		<h2>Romawi : <?php error_reporting(0); echo angkaRomawi($_POST["angka"]); ?><br></h2>
		</form>
		

	</body>
</html>
