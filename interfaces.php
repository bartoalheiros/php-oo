<?php

    interface EquipamentoEletronicoInterface {
        public function ligar();
        public function desligar();
    }

    // -------------------------------------------
    class Geladeira {
        public function abrirPorta() {
            echo 'Abrir a porta';
        }
    }

    class TV {
        public function trocarCanal() {
            echo 'Trocar canal';
        }
    }

    $x = new Geladeira();
    $y = new TV();