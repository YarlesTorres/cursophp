<?php 
	$carros = ["BMW", "Fusca", "Hilux"];
	// Array associativo
	$pessoa = ["nome"=>"Maria José", "idade"=>20];

	echo "$carros[0]";
	print_r($carros);
	echo "<hr>";

	echo "Meu nome é $pessoa[nome] e tenho $pessoa[idade] anos";
	echo "<hr>";

	//Para inserir elementos em um array
	$carros[] = "Amarok";
	print_r($carros);
	echo "<hr>";

	$carros[10] = "Camaro";
	print_r($carros);
	echo "<hr>";

	echo "Total de carros " .count($carros);
	echo "<hr>";
	echo count($pessoa);
	echo "<hr>";

	foreach ($carros as $carro) {
		echo "$carro<br>";
	}
	echo "<hr>";
	foreach ($pessoa as $indice => $valor) {
		echo $indice. ":".$valor."<br>";
	}
	echo "<hr>";

	// Arrays multidimencionais
	$times = array(
		"cariocas" => array("campeao" => "Vasco", "vice" => "Flamengo", "terceiro"=>"Botafogo"),
		"paulistas"=>array("São Paulo", "Palmeiras", "Corinthians")
	);

	echo $times["paulistas"][2];
	echo "<hr>";
	foreach ($times["cariocas"] as $indice => $valor) {
		echo $indice. ":".$valor."<br>";
	}
	echo "<hr>";

