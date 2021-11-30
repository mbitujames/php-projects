<?php 
// PHP program to Find the minimum distance between two numbers 

function minDist($arr, $n, $x, $y) 
{ 
	
	//previous index and min distance 
	$i=0; 
	$p=-1; 
	$min_dist=PHP_INT_MAX; 
	
	for($i=0 ; $i<$n ; $i++) 
	{ 
		if($arr[$i] ==$x || $arr[$i] == $y) 
		{ 
			//we will check if p is not equal to -1 and 
			//If the element at current index matches with 
			//the element at index p , If yes then update 
			//the minimum distance if needed 
			if($p != -1 && $arr[$i] != $arr[$p]) 
				$min_dist = min($min_dist,$i-$p); 
			
			//update the previous index 
			$p=$i; 
		} 
	} 
	//If distance is equal to int max 
	if($min_dist==PHP_INT_MAX) 
	return -1; 
	return $min_dist; 
} 

/* Driver program to test above function */
	$arr =array(4,8,6,1,2,9,4); 
	$n = count($arr); 
	$x = 3; 
	$y = 6; 

	echo "Minimum distance between $x and ", 
		"$y is ", minDist($arr, $n, $x, $y); 
?> 
