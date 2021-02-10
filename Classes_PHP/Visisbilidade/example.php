<?php
//Private: significa que apenas membros ou funções da classe podem acessa-la.
//Protected: significa que apenas os membros ou funções da classe podem acessa-la e também, as classes que herdar delas.
//Public: significa que todas as classes podem acessar, independente se herdar delas ou não.

    class Myclass{
        public $publica = 'public';
        protected $protegida = 'protected';
        private $privada = 'private';

        function PrintClasses(){
            echo $this->publica;
            echo $this->protegida;
            echo $this->privada;
        }
    }

    $object = new Myclass();
    echo $object->publica;//Mostra a Classe na Tela
    echo $object->privada;//Nao Mostra pois seu metodo é privado
    echo $object->protegida;//Nao Mostra pois seu metodo é Protegido
    $object->PrintClasses();//mostra todas as classes mesmo sendo privadas e protegidas, pois esta dentro de de uma funcao publica


?>