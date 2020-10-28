<!DOCTYPE html>
<html>
<head>
	<title>prueba</title>
</head>
<body>


<?php
//lea n cantidad de numero y decir la cantidad de + y -
$n=20;
$par=0;
$impar=0;

for($i=2; $i<=$n; $i++){
 if($i %2==0){
 	$par++;
 }
 else{
 	$impar++;
 }
}
echo "el total de pares es ".$par;
echo "el total de pares es ".$impar;

?>
</body>
</html>