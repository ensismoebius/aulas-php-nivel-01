<?php
require_once "./lib/bancoDeDados.php";

if(conectar()){
  executarSQL("select * from Responsavel");

  $result = recuperarResultados();

  print_r($result);

  desconectar();
}
?>
