<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
<form action="index.php" method="post">
<input type="text" name= "sql"/>
<input type="submit" value="Enviar" />
</form>

	<table>
		<thead>
			<tr>
<?php
require_once './lib/BancoDeDados.php';

$sql = isset($_POST["sql"]) ? $_POST["sql"] : "";

$bd = new BancoDeDados ();

if ($bd->abrirConexao ()) {

	$bd->executarSQL ( $sql );

	$arrResultado = $bd->lerResultados ();

	
	if(count($arrResultado) > 0){
		foreach ($arrResultado[0] as $nomeCampo => $valorDoCampo) {
			?>
				<th><?php echo $nomeCampo; ?></th>
			<?php 
		}
	}
	?>
			</tr>
		</thead>
		<tbody>
	<?php 

	foreach ( $arrResultado as $linha ) {
		
		echo "<tr>";
		foreach ($linha as $valorDoCampo) {
			?>
				<td><?php echo $valorDoCampo; ?></td>
			<?php 
		}
		echo "</tr>";
	}
}
?>
		</tbody>
	</table>
</body>
</html>










