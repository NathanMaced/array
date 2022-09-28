
<html>


	<?php 

		$salarios = array("Joao" => 2000, "Pedro" => 1000,  "Maria" => 500);

		echo "Salario de Joao é ". $salarios['Joao'] . "<br/>";
		echo "Salario de Pedro é ". $salarios['Pedro'] . "<br/>";
		echo "Salario de Maria é ". $salarios['Maria'] . "<br/>";

		$salarios['Joao'] = "alto";
		$salarios['Pedro'] = "médio";
		$salarios['Maria'] = "baixo";

		echo "Salario de Joao é ". $salarios['Joao'] . "<br/>";
		echo "Salario de Pedro é ". $salarios['Pedro'] . "<br/>";
		echo "Salario de Maria é ". $salarios['Maria'] . "<br/>";


	 ?>


</html>