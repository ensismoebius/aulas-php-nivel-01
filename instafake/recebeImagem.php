<?php
require_once 'lib/bancoDeDados.php';
session_start ();

$nomeGerado = gerarNomeParaArquivo ();

if (salvarArquivo ( $nomeGerado )) {
	// salvar os dados da imagem no banco de dados
	$cod = $_SESSION ["cod"];
	
	conectar ();
	executarSQL ( "insert into Imagem (codUsuario, nome)values('$cod','$nomeGerado')" );
	desconectar ();
} else {
	echo "Não foi possível salvar sua imagem!!";
}
function salvarArquivo($nomeDoArquivo) {
	$arquivo = $_FILES ["imagem"] ["tmp_name"];
	return move_uploaded_file ( $arquivo, "./img/imagens/$nomeDoArquivo" );
}
function gerarNomeParaArquivo() {
	$nome = $_FILES ["imagem"] ["name"];
	$arrArquivo = explode ( ".", $nome );
	$extensao = $arrArquivo [count ( $arrArquivo ) - 1];
	
	return microtime () . rand () . $extensao;
}

print_r ( $_POST );
print_r ( $_FILES );