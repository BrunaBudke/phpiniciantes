<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aula 02</title>
</head>
<body>
	<?php
    /*
    INTEIROS (int) - qualquer número sem decimais positivo ou negativo
    PONTO FLUTUANTE (float, double ou real) - número com decimais 
    STRING texto
    BOOLEANOS - verdadeiro (true) ou falso (false)
    ARRAYS - variáveis multidimencionais, vetores
    OBJETOS - instancia de uma classe
    RECURSOS - variáveis especiais do PHP que referenciam recuros externos
    NULO  (null) - variável sem nenhum valor, porém é diferente de ""
    */

	$idade = 30;
	$altura = 1.81;
	$nome = "Ricardo Bernardi";
	$casado = true;

	$numero = 50;

	define('CONFIG', 1500);

    //echo CONFIG;

	function calc(){
		global $numero;
		echo $numero
	}

	//calc();

	//$cadastro = array('Cliente 1', 'Cliente 2', 'Cliente 3');
	//$cadastro[] = 'Cliente 1';
	//$cadastro[] = 'Cliente 2';
	//$cadastro = array('cliente1' => 'Ricardo', 'cliente2' => 'Zezinho');
	$cadastro = array(
		'cliente1' => array(
   			'nome' => 'Ricardo',
   			'idade' => 30,
		),
		'cliente2' => array(
   			'nome' => 'Zezinho',
   			'idade' => 50,
	),
);

	var_dump(get_defined_vars());

	//echo $cadastro['Cliente1']['nome'];

    //echo "Olá, meu nome é $nome e eu tenho $idade anos.";
?>
</body>
</html>
