<?php

function containsNumber($number, $numberToFind) {
    $thisNumber = $number;

    while ($thisNumber != 0) {
        $thisDigit = $thisNumber % 10;
        $thisNumber = $thisNumber / 10;

        if ($thisDigit == $numberToFind) {
            return $number . " contains the number " . $numberToFind;
        }
    }

    if ($thisNumber == 0 && $thisDigit != $numberToFind) {
        return $number . " does not contain the number " . $numberToFind;
    }
}

$number = 235;
$numberToFind = 8;

$result = containsNumber($number, $numberToFind);
echo $result;

?>