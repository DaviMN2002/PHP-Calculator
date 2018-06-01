<?php
	
	function soma($a,$b){
		$soma = $a + $b;
		return $soma;
	}

	function sub($a,$b){
		$sub = $a - $b;
		return $sub;
	}

	function mult($a,$b){
		$mult = $a * $b;
		return $mult;
	}

	function divisao($a,$b){
		$divisao = $a / $b;
		return $divisao;
	}

	function potencia($a,$b){
		$potencia = pow($a, $b);
		return $potencia;
	}

	$x = $_POST['num1'];
	$y = $_POST['num2'];
	$op = $_POST['operacao']; //espera-se "soma", "sub", "mult","divisao" ou "pot"

	switch ($op) {
		case 'soma':
			echo "A soma de $x + $y é ".soma($x,$y);
			break;

		case 'sub':
			echo "A subtração de $x - $y é ".sub($x,$y);
			break;

		case 'mult':
			echo "A multiplicação de $x x $y é ".mult($x,$y);
			break;

		case 'divisao':
			echo "A divisão de $x / $y é ".divisao($x,$y);
			break;

		case 'potencia':
			echo "A potência de $x elevado a $y é ".potencia($x,$y);
			break;
		
		default:
			echo "Função Inválida";
			break;
	}

?>