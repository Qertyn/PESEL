<?php

function wrongInput($pesel){
    $result = false;
    if(empty($pesel) || ctype_digit($pesel) === false){
        $result = true;
    }
    else{
        $result = false;
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
//SUMA KONTROLNA - sprawdza sume pesela, czyli jego poprawnosc

    // Waga kolejnych cyfr do obliczenia sumy kontrolnej
function wrongPesel($pesel){
    
    $Wagi = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3); // tablica z odpowiednimi wagami
    $Sum = 0;
    
    for ($i = 0; $i < 10; $i++) {
        $Sum += $Wagi[$i] * $pesel[$i]; //mnożymy każdy ze znaków dla 10 pierwszych cyfr przez wagę i sumujemy wszystko
    }
    //obliczamy sumę kontrolną i porównujemy ją z ostatnią cyfrą.
    $int = 10 - $Sum % 10; 
    $suma_k = ($int == 10)?0:$int;
    
    if ($suma_k == $pesel[10]){
        $result =  true;
    }else{
        $result = false;
    }
    
}

function data($pesel){
    $dzien = substr($pesel, 4,2);
    $rok = "";
    if(substr($pesel, 2 ,2) > 13){
        $miesiac = (substr($pesel, 2, 2)) - 20;
        $rok = ("20".substr($pesel, 0, 2));
        if($miesiac<10) $miesiac = "0" . $miesiac;
        return $rok." ".$miesiac." ".$dzien;
    }else {
        $miesiac = substr($pesel, 2 ,2);
        $rok = ("19".substr($pesel, 0, 2));
        return $rok."-".$miesiac."-".$dzien;
    }
}
function plec($pesel){
    $ManOrWoman = substr($pesel, 9, 1);
    if($ManOrWoman%2 == 1){
        return "Mężczyzna";
    }else{
        return "Kobieta";
    }
}
?>