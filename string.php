<?php 

	$texto = "micro Computador";
	$tamanho = strLen($texto);

	echo "<br/>".$texto. " possui ".$tamanho." caracteres";
	echo "<br/>".strtoupper($texto);
	echo "<br/>".strtolower($texto);
	echo "<br/>".ucfirst($texto);
	echo "<br/>".ucwords($texto);
	//3 caracteres a partir da posição 13
	echo "<br/>".substr($texto,13,3);
	echo "<br/>".str_replace("micro", "Nano", $texto);

 ?>