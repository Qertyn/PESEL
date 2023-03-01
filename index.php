<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PESEL Checker</title>
    <link rel="icon" href="pesel.png">  
    <style>
        p.r{
            color: red;
        }
    </style>
</head>
<body>
    <form class="box" action="includes/submiter.inc.php" method="POST"> <!-- //action do pliku subliter.inc.php -->
        <h1>PESEL CHECKER</h1>

        <!-- name pesel zczytuje wartość podaną przez usera-->
        <input type="text" placeholder="Wpisz tu swój pesel" name="pesel"> 

        <!-- name submit by sprawdzić czy funkcja została wywołana-->
        <input type="submit" name="submit" value="Sprawdź pesel"> 
    </form>

    <?php
    /// error checker
        if(isset($_GET["error"])){   

            ///jezeli funkcja wrongInput wykazała błąd pokaże się echo poniżej
            if($_GET["error"] = "wrongInput"){   
                echo '<p class="r">Wypełnij pole PESEL!</p>';
            }
            else if($_GET["error"] = "wrongLength"){
                echo '<p class="r">Nieprawidłowa długość numeru PESEL!</p>';
            }
            ///jezeli funkcja wrongPesel wykazała błąd pokaże się echo poniżej
            else if($_GET["error"] = "wrongPesel"){ 
                echo '<p class="r">Nieprawidłowy PESEL!</p>';
            }
        }
    ?>
    <br><br>
    <a href="index.php"><input type="button" value="Likwidacja błędów"></a>
</body>
</html>