<?php 
// Variáveis variáveis
	/*é um recurso que nos permite a criação de uma variável através do conteúdo de outra variável.*/
	$bebida = "refrigerante";
	$$bebida = "Guaraná";
	echo "$refrigerante <br>";

	$destino = "cidade";
	$$destino = "Ilhéus";
	echo "Seu destino será na $destino de ${$destino}";

