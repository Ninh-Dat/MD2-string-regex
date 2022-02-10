<?php
function isFirstLetterUpperCase($str){
    $regexp = '/^[A-Z]/';

    if (   preg_match($regexp,$str)){
        echo "String first character is uppercase";
    }
    else{
        echo "String first character is not uppercase";
    }
}

isFirstLetterUpperCase('Ninh đạt');
?>
