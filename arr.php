<?php
function printUnique($l, $r) 
{ 
	$result=array();
	$visited=array();
	for($i=$l;$i<=$r;$i++)
	{
		if(!in_array($i,$result)){
			$result[]=$i
		}

	}
}

// Driver code 
$l = 1; $r = 20; 
printUnique($l, $r);

//https://www.geeksforgeeks.org/numbers-unique-distinct-digits/
?>