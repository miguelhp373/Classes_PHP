<?php
    class PrivateTest{
        protected $msg = 'hello world' ;
         function PrintOnScreen(){
            echo  $this->msg; 
        }

    
    } 

    $obj = new PrivateTest;
    $obj->PrintOnScreen();//mesmo o metodo $msg seja protected, sera mostrado na tela a mensagem pois esse metodo esta dentro de uma funcao publica; mas se fosse protected nao seria possivel
?>