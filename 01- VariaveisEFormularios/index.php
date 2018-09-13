<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Form</title>
</head>
<body>
    <h1>Repete via GET</h1>
	<form action="processa.php" method="get">
		<input type="text" name="qtde"/>
		<input type="submit" />
	</form>


    <h1>Manda via GET</h1>
	<form action="processa.php" method="get">
		<input type="text" name="cpf"/>
		<input type="text" name="rg"/>
		<input type="text" name="end"/>
		<input type="submit" />
	</form>

    <h1>Manda via POST</h1>
	<form action="processa.php" method="post">
		<input type="text" name="cpf"/>
		<input type="text" name="rg"/>
		<input type="text" name="end"/>
		<input type="submit" />
	</form>
</body>
</html>
