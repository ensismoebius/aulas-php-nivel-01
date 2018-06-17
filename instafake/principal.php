<?php
require_once 'lib/bancoDeDados.php';
session_start();
conectar();
executarSQL("select login from Usuario where cod=" . $_SESSION["cod"]);
$arrResultados = lerResultados();
$loginDoUsuario = $arrResultados[0]["login"];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilo.css">
<meta charset="UTF-8">
<title>Principal</title>
</head>
<body>
	<div class="localizador">
		<form action="get">
			<input type="text" name="localizar"
				placeholder="Procure por um usuário">
		</form>
	</div>
	<div id="content">
		<div class="usuario">
			<img alt="foto" src="img/eu.jpg" class="fotoUsuario"><br> <label>Boas vindas: <?php echo $loginDoUsuario; ?></label>
			<br>
			<button>Adicionar foto</button>
		</div>
		<div class="listaDePostagens">
        <?php
        executarSQL("select nome, descricao from Imagem where codUsuario = {$_SESSION ["cod"]}");
        $arrImagens = lerResultados();
        foreach ($arrImagens as $linha) {
        ?>
			<section class="postagem">
				<img alt="imagem" src="img/imagens/<?php echo $linha["nome"]; ?>"
					class="fotoDaPostagem">
				<details open="open">
					<p><?php echo $linha["descricao"]; ?></p>
				</details>
			</section>
		<?php
        }
        desconectar();
        ?>
		</div>
	</div>
</body>
</html>