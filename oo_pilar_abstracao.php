<?php

   //modelo
   	class Funcionario {
        //atributos
		private $nome = 'José';
		public $telefone = '11 99999-8888';
		public $numFilhos = 2;


		//métodos
		function resumirCadFunc() {
			return "$this->nome possui $this->numFilhos filho(s).";
		}

		function modificarNumFilhos($novoNumFilhos) {
			//afetar um atributo do objeto
			$this->numFilhos = $novoNumFilhos;
		}
	}

	$y = new Funcionario();
	echo $y->resumirCadFunc();
	$y->modificarNumFilhos(3);
	echo '<br />';
	echo $y->resumirCadFunc();
	echo '<hr />';

	$x = new Funcionario();
	echo $x->resumirCadFunc();
	echo '<br />';
	$x->modificarNumFilhos(1);
	echo $x->resumirCadFunc();