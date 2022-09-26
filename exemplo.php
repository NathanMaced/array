
	<html>
	<body>

			<p>exemplo declaração de variavel sem array</p>
		<?php 
			
			$nome1 = "maria";
			$nome2 = "joao";
			$nome3 = "pedro";
			$nome4 = "paulo";
			$nome5 = "lucas";


			echo ("$nome1<br/>$nome2<br/>$nome3<br/>$nome4<br/>$nome5<br/>");
		 ?>

		<p>exemplo declaração de variavel com array</p>
		 <?php 

		 	$nome = array("maria","joao","pedro","paulo","lucas");

		 	echo "os nomes no array<br/>";

		 	foreach ($nome as $nomes) {
		 		echo "<br/>".$nomes;

		 	}
		  ?>

  </body>
	</html>