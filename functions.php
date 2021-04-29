<?php

function dd($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

function checkAge($age) {
    if ($age >= 21) {
        echo 'You are ' , $age , '. Please come in sir.';
    } else {
        echo 'You are ' , $age , '. Not this night, buddy.';
    }
}

function checkAge2($age) {
    return $age >= 21 ? 'Enter' : 'No go';
}