<?php

   //modelo
   	class Funcionario {
        //atributos
		public $nome = 'José';
		public $telefone = '11 99999-8888';
		public $numFilhos = 2;


		//métodos
		function resumirCadFunc() {
			return "$this->nome possui $this->numFilhos filho(s).";
		}

		function modificarNumFilhos() {
			//afetar um atributo do objeto
		}
   }

   $y = new Funcionario();
   echo $y->resumirCadFunc();