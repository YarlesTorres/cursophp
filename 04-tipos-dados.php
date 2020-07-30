<?php
/************Escalares************/

// String
$str = "Olá, mundo!";
var_dump($str);

if (is_string($str)) {
	echo "É uma String!";
}else{
	echo "Não é uma String!";
}
echo "<hr>";

// INT 
$idade = 20;
var_dump($idade);

if (is_int($idade)) {
	echo "É Int";
}else{
	echo "Não é Int";
}
echo "<hr>";

// FLOAT
$altura = 1.60;
var_dump($altura);

if (is_float($altura)) {
	echo "É float!";
}else{
	echo "Não é float!";
}
echo "<hr>";

// Boolean
$admin = true;
var_dump($admin);

if (is_bool($admin)) {
	echo "É boolean";
}else{
	echo "Não é boolean!";
}
echo "<hr>";

/************Compostos************/
$carros = array ("Gol", "Uno", "Camaro", 12, 20.6, true);
var_dump($carros);
echo "<hr>";

/************Objeto************/
class Cliente {
	public $nome;
	public function atribuirNome($value)
	{
		$this->nome = $value;
	}
}

$cliente = new Cliente();
$cliente->atribuirNome("Fulano");
var_dump($cliente);

if (is_object($cliente)) {
	echo "É um objeto!";
}else{
	echo "Não é um objeto";
}
echo "<hr>";

/************Especiais************/
// NULL
$local = NULL;
var_dump($local);
echo "<hr>";

/************Resource************/