<?php

    print_r($_POST);

    class Mensagem {
        private $destino = null;
        private $assunto = null;
        private $mensagem = null;

        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }
    }

    $mensagem = new Mensagem();

     $mensagem->__set('destino', $_POST['destino']);
     $mensagem->__set('assunto', $_POST['assunto']);
     $mensagem->__set('mensagem', $_POST['mensagem']);
     
     
     print('<br>');
     print_r($mensagem);