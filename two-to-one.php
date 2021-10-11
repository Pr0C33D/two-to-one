<?php 
// https://www.codewars.com/kata/5656b6906de340bd1b0000ac

function longest($a, $b) {
        $arr = $a.$b;
        $stringParts = str_split($arr);
        sort($stringParts);
        $stringParts = implode('', $stringParts);
        return join(array_unique(preg_split("//u", $stringParts)));
}
?>