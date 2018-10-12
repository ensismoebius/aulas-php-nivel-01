<?php
require_once 'lib/BancoDeDados.php';

session_start ();

$bd = new BancoDeDados();

if (formularioEnviado ()) {
	if ($bd->abrirConexao()) {
		$bd->executarSQL ( "select cod from Login where login='{$_POST["login"]}'
				and senha='{$_POST["senha"]}'" );
		
		$arrResultado = $bd->lerResultados();
		
		if (count ( $arrResultado ) > 0) {
			// sucesso!!!!!
			$_SESSION ["cod"] = $arrResultado [0] ["cod"];
		}
	}
}

$bd->fecharConexao();

if (isset ( $_SESSION ["cod"] )) {
	header ( "location: principal.php" );
	return;
}

function formularioEnviado() {
	return isset ( $_POST ["login"] ) && isset ( $_POST ["senha"] );
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Login</title>
</head>
<body>
	<form action="index.php" method="post">
		<input type="text" name="login" /> 
		<input type="password" name="senha" />
		<input type="submit" value="Enviar" />
	</form>
</body>
</html>






























