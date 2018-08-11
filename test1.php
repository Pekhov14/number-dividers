<?php 

function number_dividers ($a)
{
	$i = 1;
	while($i <= $a)
	{
		if ($a % $i == 0)
			if ($i == $a) 
				echo $i;
			else 
				echo $i . ", ";
		$i++;
	}
}

number_dividers(12);
