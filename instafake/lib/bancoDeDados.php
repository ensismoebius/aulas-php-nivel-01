
<?php
$resultado = null;
$conexao = null;
function conectar() {
	global $conexao;
	
	// Data Source Name - nome da fonte de dados
	$dsn = "mysql:host=127.0.0.1;dbname=instagram";
	
	try {
		// PHP Data Object - Objeto de Informações do PHP
		$conexao = new PDO ( $dsn, "teste", "1234" );
		return true;
	} catch ( Exception $e ) {
		return false;
	}
}
function desconectar() {
	global $conexao;
	$conexao = null;
}
function executarSQL($sql) {
	global $conexao;
	global $resultado;
	$resultado = $conexao->prepare ( $sql );
	
	$conexao->beginTransaction ();
	$resultado->execute ();
	$conexao->commit ();
}
function lerResultados() {
	global $resultado;
	return $resultado->fetchAll ();
}












