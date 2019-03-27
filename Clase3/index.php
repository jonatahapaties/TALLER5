<?php
 $numeroingresado=7;
 $contador=0;


 for ($i=2;$i<$numeroingresado;$i++){
 	//echo "<br>hola</br>";
 	if($numeroingresado%$i==0){
 		echo "<br>El $numeroingresado es divisible por $i </br>";
 		$contador++;
 	}

 }
	if ($contador==0){
		 		echo "<br>El numero es primo  </br>";
		 	}
 		else {
 			echo "<br>El numero no es primo  </br>";
 	

	} 

?>


