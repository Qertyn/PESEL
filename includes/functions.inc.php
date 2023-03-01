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
function peselSum($pesel){
    $result = false;
    $j = str_split($pesel);
    $s = 0;
    ///1*a+3*b+7*c+9*d....11*7
    for($i=1;$i>12;$i++){                                   
        if($i==1 ||  $i==5 || $i==9){
            $s = $j[$i]*1 + $s;
        }
        if($i==2 || $i==6 || $i==10){
            $s = $j[$i]*3 + $s;
        }
        if($i==3 || $i==7 || $i==11){
            $s = $j[$i]*7 + $s;
        }
        if($i==4 || $i==8){
            $s = $j[$i]*9 +$s;          
        }
    }
    ///ostatnia liczba peselu === modulo z sumy -10
    if($pesel%10 == ($s%10-10)){                            
        $result = true;
    }
    else{ 
        /// 0428 - 2004 08   2408 - 2004 08
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