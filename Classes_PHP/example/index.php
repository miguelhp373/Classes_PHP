<?php
//Para Boas Praticas Se Utiliza Letra maiuscula no inicio do nome da classe;

// Classe base com propriedades e métodos de membros
class Vegetal{
    public $comestivel;
    public $cor;

    function Vegetal($comestivel, $cor='verde'){
        $this->comestivel = $comestivel;
        $this->cor = $cor;
    }

    function Is_Comestivel(){
        return $this->comestivel;
    }

    function Qual_Cor(){
        return $this->cor;
    }
}
//Fim da Classe

//essa classe é uma extensão da classe pai(base)
class Espinafre extends Vegetal{ 
    public $cozido = false;

    function Espinafre(){
        $this->Vegetal(true,"verde");//Se Refere a Funcao Vegetal da Classe Pai
    }

    function Cozinhe(){
        $this->cozido = true;
    }

    function Esta_Cozido(){
        $this->cozido;
    }
}
//fim da classe
?>