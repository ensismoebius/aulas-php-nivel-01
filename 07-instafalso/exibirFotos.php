<?php 

require_once 'lib/bancoDeDados.php';

if (! conectar ()) {
    echo "Falha ao atualizar o banco de dados!";
    return;
}

session_start ();

if (! isset ( $_SESSION ["cod"] )) {
    header ( "location: index.php" );
    return;
}

$codDono = $_SESSION ["cod"];


?>

<html>
    <style>
        img{
            width: 80%;
        	height: 30px;
        	position: absolute;
        	top: 50%;
        	left: 5%;
        }
    
    
    
    </style>
<body>

<img src="./images/<?php echo $nomeImagem?>" >

</body>
</html>







<?php
		executarSQL ( "select descricao, nome from Foto where codigo_canal='$codDono'" );
		$arrResultados = recuperarResultados ();

		foreach ( $arrResultados as $linha ) {
			?>
			<option value="<?php echo $linha["cod"]; ?>" > <?php echo $linha["nome"]; ?> </option>
			<?php 
		}
		?>