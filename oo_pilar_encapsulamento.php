<?php

    class Pai {
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        public function __get($attr) {
            return $this->$attr;
        }
       
        public function __set($attr, $value) {
            $this->$attr = $value;
        }

        private function executarMania() {
            echo 'Assobiar';
        }

        protected function responder() {
            echo 'Oi';
        }

        public function executarAcao() {
            $x = rand(1, 10);

            if($x >= 1 && $x <=8) {
                $this->responder();
            } else {
                $this->executarMania();
            }
        }

    }

    class Filho extends Pai {
        // public function getAtributo($attr) {
        //     return $this->$attr;
        // }

        // public function setAtributo($attr, $value) {
        //     $this->$attr = $value;
        // }

    }

    // $pai = new Pai();
    // // echo $pai->humor;
    // echo $pai->executarAcao();

    $filho = new Filho();
    echo '<pre>';
    print_r($filho);
    echo '</pre>';
 
    //exibir os métodos do objeto
    echo '<pre>';
    print_r(get_class_methods($filho));
    echo '</pre>';