<?php  

function Factorial ($Factorial) 


{
    $factorial = 1; 

for ($x=$Factorial; $x>=1; $x--)   
{
  $factorial = $factorial * $x;  
}
return $factorial ;

}

echo factorial(5) ;