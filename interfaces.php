<?php

    interface EquipamentoEletronicoInterface {
        
    }

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