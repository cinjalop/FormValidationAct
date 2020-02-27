<?php

function isEmpty($str){
        return trim(strlen($str) > 0);
    }
function IsNullOrEmptyString($str){
       return (!isset($str) || trim($str) === '');
    }
    //returns a boolean value after validation of date  
function isInCorrectFormat($str){
        return var_dump(checkdate($month, $day, $year));
}


?>
