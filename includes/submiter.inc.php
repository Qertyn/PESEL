<?php
    if(isset($_POST['submit'])){
        $pesel = $_POST['pesel'];
        if(wrongInput($pesel) !== false){
            header('location: ../index.php?error=emptyinput');
            exit();
        }
    }