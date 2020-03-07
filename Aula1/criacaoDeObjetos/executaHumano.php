<?php
echo '<pre>';
require('autoload.php');

//criando objetos
$pessoa = new Humano(13);
// $pessoa -> ministrarCurso();
// $pessoa -> dormir();
// echo $pessoa ->nome;
//criando outro objeto da mesma classe
$pessoa2 = new Humano(20);
// $pessoa2->nome = "leo";
// echo $pessoa2->nome;
// echo $pessoa->nome;
// echo Humano::Vida;



// require('autoload.php');

// $pessoa = new Humano();
// $pessoa -> ministrarCurso();
// $pessoa -> dormir();
// echo $pessoa ->nome;

$pessoa2 ->nome = "leial";
var_dump($pessoa)->nome = "leila";
unset($pessoa2);
var_dump($pessoa2)->nome = "leo";
// $pessoa3 = clone($pessoa2);
// $pessoa3->nome = "Henrique";
// echo $pessoa2->nome;
// echo $pessoa->nome;
// echo Humano::Vida;
