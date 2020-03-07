<?php

abstract class BarulhosDeCarro
{
    public function getBarulho($nomeDoCarro)
    {
        if($nomeDoCarro == 'Opala' )
        {
            return "{$nomeDoCarro}, Fazendo Barulho Fazendo muito barulho";
        }else {
            return "{$nomeDoCarro}, Fazendo Barulho";

        }
        
    }
}
class Carro extends BarulhosDeCarro
{
    public function Acelerar(){
        return 'Vrum Vrum';
    }
}
$ford = new Carro;
echo $ford->getBarulho('Opala');
echo $ford->Acelerar();
