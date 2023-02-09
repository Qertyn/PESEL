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
    <form class="box" action="includes/submiter.inc.php" method="POST">
        <h1>PESEL CHECKER</h1>
        <input type="text" placeholder="Wpisz tu swój pesel" name="pesel">
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] = "wronginput"){
                echo '<p>Wypełnij pole PESEL!</p>';
            }
            else if($_GET["error"] = "wrongpesel"){
                echo '<p>Nieprawidłowy PESEL!</p>';
            }
        }
    ?>
</body>
</html>