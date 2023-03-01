<?php
include_once('functions.inc.php');
    if(isset($_POST['submit'])){
        $pesel = $_POST['pesel'];
        require_once 'functions.inc.php';
        if(wrongInput($pesel) !== false){
            header('location: ../index.php?error=wrongInput');
            echo "<p>Coś jest nie tak z twoim peselem!</p>";
            exit();
        }
            else if(wrongLength($pesel) !== false){
                header('location: ../index.php?error=wrongLength');
                echo "<p>Coś jest nie tak z dlugoscia twojego pesela!</p>";
                exit();
            }
                else if(peselSum($pesel) == true){
                    header('location: ../index.php?prawidlowo-dziala');
                    exit();
                }

        
    }