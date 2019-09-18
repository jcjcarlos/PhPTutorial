<?php

include('getNumberOfString.php');


$value1 = readline('Insira o numero 1: ');
$value2 = readline('Insira o numero 2: ');
$value3 = readline('Insira o numero 3: ');

$num1 = getNumberOfString($value1);
$num2 = getNumberOfString($value2);
$num3 = getNumberOfString($value3);

if ($num1 === NULL || $num2 === NULL || $num3 === NULL)
{
	echo "Foi detectado um número inválido";
}
else 
{
	if ($num1 < $num2)
	{
		$menor = $num1;
		$meio = $num2;
	}
	else 
	{
		$menor = $num2;
		$meio = $num1;
	}
	if ($num3 < $menor)
	{
		$antigo_menor = $menor;
		$menor = $num3;
		$maior = $meio;
		$meio = $antigo_menor;

	}
	else
	{
		$maior = $num3;
	}
	echo "Menor: $menor / Meio: $meio / Maior: $maior\n";
}
?>
