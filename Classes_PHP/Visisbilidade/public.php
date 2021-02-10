<?php
    class PublicTest{
        public $test = 'hello world';

        function PrintOnScreen(){
            echo $this->test;
        }
    }

    $showObject = new PublicTest();
    $showObject->PrintOnScreen();//mostra a mensagem da funcao publica dentro da classe

?>