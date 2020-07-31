<?php
$nome = "Maria José";
$a = 1;
$b = 3;
$c = 7;

// Escopo Global
function exibirNome()
{
	
	global $nome;
	echo "$nome";
}

exibirNome();
echo "<hr>";
////////////////////////////////

// Escopo Local
function exibirCidade()
{  

	global $cidade;
	$cidade = "Rio de Janeiro";
}
exibirCidade();
echo $cidade;
echo "<hr>";
////////////////////////////////


function soma()
{
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();
echo "<hr>";