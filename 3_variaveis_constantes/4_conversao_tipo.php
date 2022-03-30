<!doctype html>

<html>
<head>
<title>Settype_Gettype</title>
<meta charset="utf-8">
</head>
<body>

<?php 
//Estudo de Settype
//Declara vari�vel ou altera o tipo de dado

settype ($a,'string');
echo gettype ($a);//string
echo $a;
echo "<hr>";

setype($b,'string')
echo gettype ($b);
echo "<br>";
$b="20buscar";
echo $b;
echo "<br>";
settype ($b,'integer');
echo gettype ($b);
echo "<br>";
echo $b;

echo "<hr>";
$c="20buscar";
echo (int)($c);
echo $c;
echo "<br>";
$d = (object)($c);
var_dump($d);
?>
</body>
</html>
