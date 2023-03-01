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
//Jesli wszystko zadziała poprawnie (nie wywali błędu) to tutaj jest wypisanie poprawnego peselu
echo "<p style='font-size:30px;font-weight:800;text-align:center;'>To jest dobry pesel : ".$pesel."</p>";