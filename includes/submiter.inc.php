<?php
include_once('functions.inc.php');

if(isset($_POST['submit']))
{
    $pesel = $_POST['pesel'];
    require_once 'functions.inc.php';

    //sprawdza sume kontrolna
    if(wrongPesel($pesel) == false){
        header('location: ../index.php?error=wrongPesel');
        exit();
    }
    //sprawdza wprowadzone cyfry
    else if(wrongInput($pesel) !== false){
        header('location: ../index.php?error=wrongInput');
        exit();
    }
    //sprawdza długość peselu
    else if(wrongLength($pesel) !== false){
        header('location: ../index.php?error=wrongLength');
        exit();
    }
}
if($result = true){
    //jesli wszystko dobrze zostało ogarniete, to przeniesie cie tutaj
    echo "<p>Ten Pesel jest poprawny : ".$pesel."</p>";
};