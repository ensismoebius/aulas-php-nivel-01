<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<style type="text/css">
	table td{
	   border: 3px solid;
	   border-color: black;
	}
	</style>
</head>
<body>
<?php
require_once 'lib/bancoDeDados.php';

if (conectar()) {
    executarSQL("select * from Responsavel");

    $resultado = recuperarResultados();
?>
<table>
<?php
    foreach ($resultado as $linha) {
?>
	<tr>
		<td><?php echo $linha["cod"]; ?></td>
		<td><?php echo $linha["nome"]; ?></td>
	</tr>
<?php 
    }
?>
</table>
<?php
}
?>
</body>
</html>