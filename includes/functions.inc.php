<?php

function wrongInput($pesel){
    if(empty($pesel) || ctype_digit($pesel) === false){
        return true;
    }
    return false;
}
function wrongLength($pesel){
    if(strlen($pesel) != 11){
        return true;
    }
    return false;
}
function wrongPesel($pesel){
    
    $Wagi = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3);
    $Sum = 0;
    
    for ($i = 0; $i < 10; $i++) {
        $Sum += $Wagi[$i] * $pesel[$i];
    }
    $int = 10 - $Sum % 10; 
    $suma_k = ($int == 10)?0:$int;
    
    if ($suma_k == $pesel[10]){
        return false;
    }
    return true;
}

function data($pesel){
    $dzien = substr($pesel, 4,2);
    if(substr($pesel, 2, 2) <= 13) {
        $miesiac = substr($pesel, 2, 2);
        $rok = ("19" . substr($pesel, 0, 2));
    } else {
        $miesiac = (substr($pesel, 2, 2)) - 20;
        $rok = ("20" . substr($pesel, 0, 2));
        if ($miesiac < 10) $miesiac = "0" . $miesiac;
    }
    return $rok . " " . $miesiac . " " . $dzien;
}
function plec($pesel){
    $ManOrWoman = substr($pesel, 9, 1);
    if($ManOrWoman%2 == 1){
        return "Mężczyzna";
    }else{
        return "Kobieta";
    }
}