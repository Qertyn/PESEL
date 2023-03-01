<?php
function wrongInput($pesel){
    $result = false;
    if(empty($pesel)){
        $result = true;
    }
    else{
        $result = false;
    }
    // PESEL nie zawiera wyłącznie cyfr
    if(ctype_digit($pesel) === false){
        $result = true;
    }
    else{
        $result = false;
    }
return $result;       
}
//sprawdza sume pesela, czyli jego poprawnosc
function wrongPesel($pesel){
    $result = false;
    // Rozbicie cyfr na elementy tablicy
    $cyfry_pesel = str_split($pesel);
    // Waga kolejnych cyfr do obliczenia sumy kontrolnej
    $wagi = [1, 3, 7, 9, 1, 3, 7, 9, 1, 3, 1];

    $checksum = array_reduce(array_keys($cyfry_pesel), 
    function ($bierz, $id) use ($wagi, $cyfry_pesel) 
        {
            return $bierz + $wagi[$id] * $cyfry_pesel[$id];
        }
    );

    if ($checksum % 10 !== 0) {
        $result = false;
    }else{
        $result = true;
    }
return $result;
}
//sprawdza dlugosc pesela
function wrongLength($pesel){
    $result = false;
    if(strlen($pesel) != 11){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}