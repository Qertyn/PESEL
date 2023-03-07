<?php
session_start();
include('functions.inc.php');

if(isset($_POST['submit']))
{
    $pesel = $_POST['pesel'];

    //sprawdza sume kontrolna
    if(!wrongPesel($pesel)){
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
    echo data($pesel);
//    else header('location: ../index.php?Git_pesel');
}
?>
<br><br>
<a href="../index.php">powrot</a>
