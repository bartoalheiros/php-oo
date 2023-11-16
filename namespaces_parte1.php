<?php

    namespace A;

    class Cliente implements CadastroInterface {
        public $nome = 'Jorge';
        public function __get($attr) {
            return $this->$attr;
        }

        public function salvar() {
            echo 'Salvar';
        }
    }

    interface CadastroInterface {
        public function salvar();
    }

    namespace B;

    class Cliente implements CadastroInterface {
        public $nome = 'Jamilton';
        public function __get($attr) {
            return $this->$attr;
        }

        public function remover() {
            echo 'Remover';
        }
    }

    interface CadastroInterface {
        public function remover();
    }

    $c = new \A\Cliente();
    print_r($c);
    echo $c->__get('nome');