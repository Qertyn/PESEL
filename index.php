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
</head>
<body>
    <form class="box" action="includes/submiter.inc.php" method="POST"> <!-- //action do pliku subliter.inc.php -->
        <h1>PESEL CHECKER</h1>
        <input type="text" placeholder="Wpisz tu swój pesel" name="pesel"> <!-- //name pesel zczytuje wartość podaną przez usera-->
        <input type="submit" name="submit" value="Check"> <!-- name submit by sprawdzić czy funkcja została wywołana-->
    </form>

    <?php
        if(isset($_GET["error"])){   /// error checker
            if($_GET["error"] = "wronginput"){   ///jezeli funkcja wrongInput wykazała błąd pokaże się echo poniżej
                echo '<p name="r">Wypełnij pole PESEL!</p>';
            }
            else if($_GET["error"] = "wronglength"){
                echo '<p name="r">Nieprawidłowa długość numeru PESEL!</p>';
            }
            else if($_GET["error"] = "wrongpesel"){ ///jezeli funkcja wrongPesel wykazała błąd pokaże się echo poniżej
                echo '<p name="r">Nieprawidłowy PESEL!</p>';
            }
        }
    ?>
    <br><br><br>
    <a href="index.php"><input type="button" value="No error"></a>
</body>
</html>