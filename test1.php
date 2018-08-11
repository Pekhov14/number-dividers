<?php 

function number_dividers ($a)
{
	$i = 1;
	while($i <= $a)
	{
		if ($a % $i == 0)
			echo $i . ", ";
		$i++;
	}
}

number_dividers(9);
