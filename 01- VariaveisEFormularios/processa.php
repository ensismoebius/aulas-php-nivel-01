<?php
function repete3Vezes($quantidade) {
	// Usando o for
	for($i = 0; $i < $quantidade; $i ++) {
		echo $i + 1 . " - Olá<br>";
	}
	
	// Usando o while
	$contador = 0;
	
	while ( $contador < $quantidade ) {
		echo $contador + 1 . " - Olá<br>";
		$contador ++;
	}
	
	$contador = 0;
	
	do {
		echo $contador + 1 . " - Olá<br>";
		$contador ++;
	} while ( $contador < $quantidade );
}

// Para criar uma variável em php basta escrever a variável

// Cria uma variável numérica
$variavelNumerica = 10;

// Cria uma variável para texto (ou seja, string)
$variavelDeTexto = "Olá mundo!";

if (isset ( $_GET ["qtde"] )) {
	
	// Chama a função usando os dados do GET
	repete3Vezes ( $_GET ["qtde"] );
	
	// Chama a função usando um valor literal
	repete3Vezes ( 47 );
	return;
}

/*
 * Verifica se o cpf existe no POST ou existe no GET
 * Caso não exista exibe uma mensagem informando o usuário
 */
if (isset ( $_POST ["cpf"] ) || isset ( $_GET ["cpf"] )) {
	
	if (isset ( $_POST ["cpf"] )) {
		// Recupera os dados enviados via POST
		$mensagem = "Olá dona ou dono do cpf: " . $_POST ["cpf"] . " você ganhou um iphone!";
		echo $mensagem;
	}
	if (isset ( $_GET ["cpf"] )) { // Recupera os dados enviados via GET
		$mensagem = "Olá dona ou dono do cpf: " . $_GET ["cpf"] . " você ganhou um iphone!";
		echo $mensagem;
	}
} else {
	echo "Você não enviou nada!";
}
?>
