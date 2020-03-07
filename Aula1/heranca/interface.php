<?php

interface RacaoDeGato
{
    public function empacotar($kg);
    public function setPreco($preco);
    public function distribuir($cliente);
    public function fabricar($materiaPrima);
}
class Empresa implements RacaoDeGato
{
    public function empacotar($kg)
    {
        echo 'Empacotando {$kg} de ração';
    }
    public function setPreco($preco)
    {
        echo 'Empacotando {$preco} de ração';
    }
    public function istribuir($cliente)
    {
        echo 'Empacotando {$cliente} de ração';
    }
    public function fabricar($materiaPrima)
    {
        echo 'Empacotando {$materiaPrima} de ração';
    }
}