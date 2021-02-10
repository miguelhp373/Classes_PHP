<?php
    class PrivateTest{
        private $test = 'hello world';

        private function PrintOnScreen(){
            echo $this->test;
        }
    }

    $ShowObj = new PrivateTest();
    $ShowObj->PrintOnScreen();//nao irá funcionar pois essa funcao é privada e nao pode ser acessada, e o php ira dar erro, a nao ser que essa funcao seja publica

?>