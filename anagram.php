<?php

function stripPunctuationAndSpaces($string) {
    $string = strtolower($string);
    $string = preg_replace("/(?![.=$'€%-])\p{P}/u", "", $string);
    $string = str_replace(" ", "", $string);
    return $string;
}


$string1 = stripPunctuationAndSpaces("rail safetz!!");
$string2 = stripPunctuationAndSpaces("fairy! tales");

$array1 = str_split($string1);
$array2 = str_split($string2);

$compareArray = array_diff($array1,$array2);
$isAnagram = empty($compareArray);
echo($isAnagram?"Anagram":"Not zn Anagram");
?>