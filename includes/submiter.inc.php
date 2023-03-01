<?php
include_once('functions.inc.php');

if(isset($_POST['submit']))
{
    $pesel = $_POST['pesel'];
    require_once 'functions.inc.php';

    if(wrongPesel($pesel) == false){
        header('location: ../index.php?error=wrongPesel');
        exit();
    }else if(wrongInput($pesel) !== false){
        header('location: ../index.php?error=wrongInput');
        exit();
    }else if(wrongLength($pesel) !== false){
        header('location: ../index.php?error=wrongLength');
        exit();
    }
}
echo "<p style='font-size:30px;font-weight:800;text-align:center;'>To jest dobry pesel : ".$pesel."</p>";