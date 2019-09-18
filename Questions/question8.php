<?php
	include('getNumberOfString.php');
	$value = readline('\nInsira o número a ser calculado: ');
	$number = getNumberOfString($value);
	if ($number <> NULL)
	{
		$product = 1;
		echo "Iniciando contagem:\n";
		for ($i = 1; $i <= $number; $i++)
		{
			echo "$i - ";
			$product *= $i;
			if ($i % 10 === 0)
				echo "\n";
		}
		$i--;
		echo "\nO produto de todos os números de 1 até $i: $product.\n\n ";
	}
	else { echo "Numero invalido";}
?>
