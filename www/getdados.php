<?php

	if (isset($_GET["portao"])) {
		$portao = $_GET["portao"];
	}
	$dados = file_get_contents("p$portao.txt");
	print("$dados");

?>
