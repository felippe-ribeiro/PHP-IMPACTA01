<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

##########################################
$carro[0] = 'uno';
$carro[1] = 'toro';
$carro[2] = 'polo';
$carro[3] = 'onix';
echo "<pre>";
var_dump($carro);
echo "</pre>";
echo "<hr>";
//atribuição implicita
$cor[]="verde";
$cor[]="vermelho";
$cor[]="azul";
$cor[]="amarelo";
$cor[]="pink";
echo "<pre>";
var_dump($cor);
echo "</pre>";

echo "<hr>";
###########################################
//construtor Array - atribução explicita
//$impacta = array('livres' => 'Paulista', 'Superior'=>'Barra Funda');
$impacta = array(	'livres' => 'Paulista', 
					'Superior'=>'Barra Funda',
				);
echo "<pre>";
var_dump($impacta);
echo "</pre>";

echo "<hr>";
###########################################
//construtor Array - atribução implicita
$cursos = array('PHP','MySql', 'JavaScript','Linux');

echo "<pre>";
var_dump($cursos);
echo "</pre>";

################################################
//forma reduzida
$design=['InDesign','Photoshop','Ilustrator'];
echo "<pre>";
var_dump($design);
echo "</pre>";
################################################
//forma reduzida
$design2=[0=>'InDesign','Imagens'=>'Photoshop',20=>'Ilustrator'];
echo "<pre>";
var_dump($design2);
echo "</pre>";
################################################
//outra formas
$string="Rodrigo,Juçara,Mariana,Suzana,Paulo";
$array = explode(",",$string);
echo "<pre>";
var_dump($array);
echo "</pre>";

?>
</body>
</html>