<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Calculadora</title>
</head>
<body>
<?php
$mensagem = "";

$informado = isset ( $_POST ["num1"] );
$informado = $informado && isset ( $_POST ["num2"] );
$informado = $informado && isset ( $_POST ["operacao"] );

if ($informado) {
	$numerico = is_numeric ( $_POST ["num1"] );
	$numerico = $numerico && is_numeric ( $_POST ["num2"] );
	$numerico = $numerico && is_numeric ( $_POST ["operacao"] );
	
	if ($numerico) {
		$num1 = $_POST ["num1"];
		$num2 = $_POST ["num2"];
		
		switch ($_POST ["operacao"]) {
			case 1 :
				$mensagem = $num1 + $num2;
				break;
			
			case 2 :
				$mensagem = $num1 - $num2;
				break;
			case 3 :
				if ($num2 == 0) {
					$mensagem = "Divisão por zero!! Num pode!!";
				} else {
					$mensagem = $num1 / $num2;
				}
				
				break;
			case 4 :
				$mensagem = $num1 * $num2;
				break;
		}
	} else {
		$mensagem = "Informe apenas valores numéricos!";
	}
} else {
	$mensagem = "Informe os valores corretamente!";
}

?>
	<form action="index.php" method="post">
		<h1><?php echo $mensagem; ?></h1>
		<label for="num1">Primeiro número</label> 
		<input type="text" name="num1" /> 
		
		<label for="num2">Primeiro número</label> 
		<input type="text" name="num2" /> 
		
		<select name="operacao">
			<option value="1">Soma</option>
			<option value="2">Subtracao</option>
			<option value="3">Divisao</option>
			<option value="4">Multiplicacao</option>
		</select> 
		
		<input type="submit" value="Enviar">
	</form>
</body>
</html>