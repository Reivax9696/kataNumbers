<?php


$number = 235;         
$numberToFind = 8;    

$thisNumber = $number; 

while ($thisNumber != 0)
{
    $thisDigit = $thisNumber % 10; 
    $thisNumber = $thisNumber / 10; 
    
    if ($thisDigit == $numberToFind)
    {
        echo $number . " contains the number " . $numberToFind;
        break;
    }
}

if ($thisNumber == 0 && $thisDigit != $numberToFind)
{
    echo $number . " does not contain the number " . $numberToFind;
}



?>