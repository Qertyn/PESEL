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
        if(strlen($pesel)>11 || strlen($pesel)<11){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
