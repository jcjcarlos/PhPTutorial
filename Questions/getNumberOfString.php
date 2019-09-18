<?php
function getNumberOfString($number)
{
	if(is_numeric($number))
	{
		return intval($number);
	}
	else return NULL;
}
?>
