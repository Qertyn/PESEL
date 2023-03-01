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
function data($pesel){
    $rok = substr($pesel, 0, 2);
    $miesiac = substr($pesel, 2, 2);
    $dzien = substr($pesel, 4, 2);

    // Pierwsza cyfra z miesiąca, między 0 i 9
    $wiek = substr($pesel, 2, 1);
    $wiek += 2;// Dodajemy 2, bo tak
    $wiek %= 10;// Reszta z dzielenia przez 10, tak trzeba
    $wiek = round($wiek / 2, 0, PHP_ROUND_HALF_DOWN);// Dzielimy na 2 i zaokrąglamy w dół, wiec ma to sens
    $wiek += 18;// Dodajemy 18, bo tak było napisane w obliczeniach

    // Pełny rok
    $rok = $wiek.$rok;

    // Przekształcenie "miesiąca" z PESEL na prawidłowy format
    $miesiac = str_pad($miesiac % 20, 2, '0', STR_PAD_LEFT);

    if ($dzien < 1 || $dzien > cal_days_in_month(CAL_GREGORIAN, $miesiac, $rok)) {
        $result = true;
    }else{
        $result = false;
    }


    if ($rok < 1800 || $rok > 2299) {
        $result = true;
    }else{
        $result = false;
    }
    
    if ($miesiac < 1 || $miesiac > 12) {
        $result = true;
    }else{
        $result = false;
    }
    
    $_SESSION['dzien'] = $dzien;
    $_SESSION['miesiac'] = $miesiac;
    $_SESSION['rok'] = $rok;
return $result;
}