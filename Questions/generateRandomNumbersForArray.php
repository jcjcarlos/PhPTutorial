<?php

function randomNumbersForArray($numbers){
	if (is_numeric($qtdNumbers)){
		$qtdNumber = intval($numbers);
		$dataArray = [];
		for ($i=0;$i<=$qtdNumber;$i++){
			$dataArray[$i] = rand(-100,100);
		}
		print_r($dataArray);
	}
	else return NULL;

?>
