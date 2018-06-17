


<?php
require_once 'lib/bancoDeDados.php';

if (formularioEnviado ()) {
	
	$codigo = usuarioValido ( $_POST ["login"], $_POST ["senha"] );
	
	if ($codigo > - 1) {
		
		session_start ();
		$_SESSION ["cod"] = $codigo;
		
		header ( "Location: principal.php" );
	} else {
		echo "seu usuário não existe";
	}
}
function usuarioValido($login, $senha) {
	$codUsu = - 1;
	
	conectar ();
	
	executarSQL ( "select cod from Usuario where login='$login' and senha='$senha'" );
	
	$res = lerResultados ();
	
	foreach ( $res as $linha ) {
		$codUsu = $linha ["cod"];
	}
	
	return $codUsu;
}
function formularioEnviado() {
	if (! isset ( $_POST ["login"] )) {
		return false;
	}
	
	if (! isset ( $_POST ["senha"] )) {
		return false;
	}
	
	return true;
}




