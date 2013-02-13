<?php

	if (isset($_GET["latitude"])) {
		$latitude = $_GET["latitude"];
	}
	if (isset($_GET["longitude"])) {
		$longitude = $_GET["longitude"];
	}
	if (isset($_GET["hora"])) {
		$hora = $_GET["hora"];
	}
	if (isset($_GET["portao"])) {
		$portao = $_GET["portao"];
	}
	
	$myFile = "p$portao.txt";
	$fh = fopen($myFile, 'w') or die("impossivel abrir arquivo");
	$stringData = "latitude,longitude,hora,portao\n";	
	fwrite($fh, $stringData);
	$stringData = "$latitude,$longitude,$hora,$portao";
	fwrite($fh, $stringData);
	fclose($fh);
?>
