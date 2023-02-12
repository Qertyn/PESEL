<?php
    function wrongInput($pesel){
        $result = false;
        if(empty($pesel)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
        
    }
    function wrongLength($pesel){
        $result = false;
        if((strlen($pesel))>11 || (strlen($pesel))<11){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function peselSum($pesel){
        $result = false;
        $j = str_split($pesel);
        $s = 0;
        for($i=1;$i>12;$i++){                                   ///1*a+3*b+7*c+9*d....11*7
            if($i==1 or  $i==5 or $i==9){
                $s = $j[$i]*1 + $s;
            }
            if($i==2 or $i==6 or $i==10){
                $s = $j[$i]*3 + $s;
            }
            if($i==3 or $i==7 or $i==11){
                $s = $j[$i]*7 + $s;
            }
            if($i==4 or $i==8){
                $s = $j[$i]*9 +$s;          
            }
        }
        if($pesel%10 == ($s%10-10)){                            ///ostatnia liczba peselu === modulo z sumy -10
            $result = true;
        }
        else{ 
            $result = false;                            /// 0428 - 2004 08   2408 - 2004 08
        }
        return $result;
    }