<?php

    class Pai {
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        public function getNome() {
            return $this->nome;
        }
    }

    $pai = new Pai();
    echo $pai->sobrenome;