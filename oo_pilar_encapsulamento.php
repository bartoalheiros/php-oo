<?php

    class Pai {
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        public function getSobrenome() {
            return $this->sobrenome;
        }

        public function setSobrenome($value) {
            //regra de negócio     
            if(strlen($value) >= 3) {
                $this->sobrenome = $value;
            }
        }
    }

    $pai = new Pai();
    echo $pai->getSobrenome();
    $pai->setSobrenome('Oliveira');
    echo '<br />';
    echo $pai->getSobrenome();