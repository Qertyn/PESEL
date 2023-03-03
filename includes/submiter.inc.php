<?php
session_start();
include('functions.inc.php');

if(isset($_POST['submit']))
{
    $pesel = $_POST['pesel'];

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
//jesli wszystko dobrze zostało ogarniete, to przeniesie cie tutaj
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PESEL Checker</title>
    <link rel="icon" href="../pesel.png">
    <style>
        p.first{
            font-size: 20px;
            font-weight: 700;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        echo "<p class='first'>To jest dobry pesel : ".$pesel."</p><br>";
        require_once 'functions.inc.php';

    ?>
</body>
</html>