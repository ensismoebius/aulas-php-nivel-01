<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Inserir imagens</title>
</head>
<body>

	<form action="inserirfotos.php" method="post" enctype="multipart/form-data">

		<label for="descricao">Descrição da foto</label>
		<input type="text" name="descricao"/><br />
		
		<label for="arquivo">Escolha um arquivo</label>
		<input type="file" name="arquivo"/><br />

		<label for="visibilidade">Imagem publica?</label>
		<input type="checkbox" name="visibilidade"/><br />
		
		<input type="submit" value="Enviar">
	
	</form>
</body>
</html>
<?php

require_once './lib/bancoDeDados.php';

function formularioEnviado(){
	return isset($_POST["descricao"]) &&
	isset($_FILES["arquivo"]) &&
	isset($_POST["visibilidade"]);
}
if(formularioEnviado()){
	
	$nomeDoArquivo = rand() . microtime(true) . "." . end(explode(".", $_FILES["arquivo"]["name"]));
	$caminhoDoArquivo = $_FILES["arquivo"]["tmp_name"];
	
	$descricao = $_POST["descricao"];
	$visibilidade = $_POST["visibilidade"] == "on" ? 1 : 0;
	
	$destino = "./images/$nomeDoArquivo";
	
	$resultado = move_uploaded_file($caminhoDoArquivo, $destino);
	
	if($resultado){
		if(conectar()){
			
			$sql = "insert into Foto (nome, descricao, visibilidade) values
					('$nomeDoArquivo','$descricao','$visibilidade')";
		
			executarSQL($sql);
		}else{
			echo "Falha ao atualizar o banco de dados!";
		}
	}else{
		echo "Falha ao enviar a imagem!";
	}
}
desconectar();
?>












