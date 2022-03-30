<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>
<?php 
/*
LOCAIS NA MEM�RIA EM QUE PODEMOS ARMAZENAR INFORMA��ES
S�O IGUAIS A VARI�VEIS, MAS N�O PODEM TER O SEU CONTEUDO
ALTERADO DURANTE A EXECU��O DO C�DIGO
POR PADR�O USAR LETRAS MAIUSCULAS
N�O S�O PRECEDIDAS POR $
*/

define('NOME','Felippe Ribeiro');
define('CURSO','php');
define('B',"<br>");
define('R',"<hr>");
echo CURSO;
echo B;
//echo curso; //erro por ser case sensitive
echo R;
echo B;
echo NOME;

define('USUARIO','Marcia',TRUE);//FALSE � o valor padrao - pode ser omitido não funciona mais
echo USUARIO;

#########################################
echo R;
//php 7
define('ALUNOS',['edu','ana','Eva','Ivo']);
echo ALUNOS[2];


###########################
ECHO R;
define('CURSO','MySql'); // erro porque já foi definida curso
?>
</body>
</html>