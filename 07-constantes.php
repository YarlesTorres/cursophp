<?php
// Primeiro o nome da constante, depois o valor dela
/*É recomendado que sempre se declare constantes com nomes 
identificadores em uppercase, letras maiúsculas, para facilitar sua identificação.*/

// As contantes são globais 

define("NOME", "José");
echo NOME;
echo "<hr>";

// Constantes do tipo array
define("TIMES", ["Flamengo", "Vasco", "Internacional"]);
echo TIMES[2];
