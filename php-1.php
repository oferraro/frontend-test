<?php
function getTheAgeFromABrithday($dateofbirth)
{ 
    $age = strtotime($dateofbirth); 
    
	if($age === false)
        return false; 
		
    list($y1,$m1,$d1) = explode("-",date("Y-m-d",$age)); 
    $now = strtotime("now"); 
	
    list($y2,$m2,$d2) = explode("-",date("Y-m-d",$now)); 
    $age = $y2 - $y1; // It has to be $y2 - $y1 to show a possitive result instead of negative number
	 
    if((int)($m2.$d2) < (int)($m1.$d1)) 
        $age -= 1; // Should be - instead of +
		
    return $age; 
}

echo getTheAgeFromABrithday('13-10-1977');
