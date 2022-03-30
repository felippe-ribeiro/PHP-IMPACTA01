<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php


$cont = 1;//contadora e controladora
while($cont <= 50){
	if($cont % 5 == 0) $cor="#0F0";
	elseif ($cont % 2 == 0) $cor = "#F00";
	else $cor = "#000";

	echo "<span style=\"color:$cor\">$cont</span>, ";
	$cont++;
}
echo"<hr>";

$cont2 = 2;
while($cont2 <= 100){
	if($cont2 % 2 == 0) $cor2 = "#00F";
	else $cor2 = "#F00";
	echo "<span style=\"color:$cor2\">$cont2</span>,";
	$cont2++;
}
echo "<hr>"


?>
</body>
</html>