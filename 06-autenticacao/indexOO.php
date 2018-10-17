<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Login</title>
</head>
<body>
	<table>
		<tr>
			<td>Cod</td>
			<td>Nome</td>
			<td>Senha</td>
		</tr>
<?php
require_once 'lib/BancoDeDados.php';

$bd = new BancoDeDados ();

if ($bd->abrirConexao ()) {
	$bd->executarSQL ( "select * from Pessoas" );

	$arrResultado = $bd->lerResultados ();

	foreach ( $arrResultado as $linha ) {
		?>
		<tr>
			<td><?php echo $linha["cod"]?></td>
			<td><?php echo $linha["nome"]?></td>
			<td><?php echo $linha["senhaSecreta"]?></td>
		</tr>
		<?php
	}
}
$bd->fecharConexao ();
?>
</table>
</body>
</html>






























