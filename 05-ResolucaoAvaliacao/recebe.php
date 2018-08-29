<?php
if(isset($_POST["nome"]) && isset($_POST["sobrenome"])){
    if(trim($_POST["nome"])=="" || trim($_POST["sobrenome"])==""){
        echo "Os campos não podem ser em branco";
    }else{
        echo "Olá " . $_POST["nome"] . " " . $_POST["sobrenome"] . " você é da hora";
    }
}

function retorna10($valor1, $valor2){
    return $valor1 * $valor2;
}



$valor = retorna10(10, 2);


