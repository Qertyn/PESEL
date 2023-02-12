<?php
    if(isset($_POST['submit'])){
        $pesel = $_POST['pesel'];
        require_once 'functions.inc.php';
        if(wrongInput($pesel) !== false){
            header('location: ../index.php?error=wrongInput');
            exit();
        }
            else if(wrongLength($pesel) !== false){
                header('location: ../index.php?error=wrongLength');
                exit();
            }
                else if(peselSum($pesel) == true){
                    header('location: ../index.php?prawidlowo-dziala');
                    exit();
                }

        
    }