<?php

class Avo
{
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    public function mostraNome()
    {
        return $this->nome;
    }
}
class Mae extends Avo
{
    public function __construct($nome, $idade)
    {
        parent::__construct($nome);
        $this->idade = $idade;

    }
    public function mostraIdade()
    {
        return $this->idade;
    }
}
//classe filha não pode ser herdada usando o (final)
final class Filha extends Mae
{
    public function __construct($nome, $idade, $genero)
    {
        parent::__construct($nome, $idade);
        $this->genero = $genero;
    }
    public function mostraGenero()
    {
        return $this->genero;
    }

}




$mae = new Mae('Joana', 40);
$mae->mostraNome();
$mae->mostraIdade();
echo $mae->  mostraNome();
echo $mae-> mostraIdade();




// $avo1 = new avo('Maria');
// $avo2 = new avo('Ana');
// echo $avo1 ->mostraNome();
// echo '<br>';
// echo $avo2->mostraNome();