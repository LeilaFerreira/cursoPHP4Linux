<?php


class Humano {
    //atributo
    public $nome = "leila";
    
    //constante de classe
    const Vida = true;
    //Metodos do objeto
    public function ministrarCurso()
    {
        echo "Estou estudando PHP";
        echo '<br>';
    }
    public function dormir()
    {
        if(self::Vida == true){
            echo "Dormindo";
            echo '<br>';
        }else{
            echo "Morri";
        }
        
    } 
    public function __clone()
    {
        echo 'clonando o Objeto';
    }
    public function __construct($idade)
    {
        $this->idade = $idade;
    }
    public function __destruct()
    {
        echo "Estou desalocando o espaço da memoria";
    }
    
}


