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
        body{
            text-align:center;
            font-family:sans-serif;
            color:#B22813 ;
            background-color:#FFEFE5;
        }
        #bonus_bobra{
            background-color:#fcbb90;
            width:40%;
            margin-top: 50px;
            margin-left:30%;
            height:200px;
            border-radius:15px;
            position: absolute;
            box-shadow: 15px 15px 20px black;
        }
        input[type="button"],[type="submit"]{
            background-color:#FF4225;
            border-radius:4px;
            width:150px;
            height:40px;
            color:#8D1E0D;
            border: solid 2px #B22813;
        }
        input[type="text"]{
            background-color:#FF6851;
            border: solid 2px #B22813;
            border-radius:4px;
            height: 35px;
        }
        input[type="button"]:hover,[type="submit"]:hover{
            background-color:#FF7D68;
        }
    </style>
</head>
<body>
    <div id= "bonus_bobra">
    <form class="box" action="includes/submiter.inc.php" method="POST"> <!--action do pliku subliter.inc.php-->
        <h1>PESEL CHECKER</h1>

        <!--name 'pesel' zczytuje wartość podaną przez usera-->
        <input type="text" placeholder="Wpisz tu swój pesel" name="pesel"  > 

        <!--name 'submit' by sprawdzić czy funkcja została wywołana-->
        <input type="submit" name="submit" value="Sprawdź pesel"> 
    </form>
    <?php
    // error checker
        if(isset($_GET["error"])){   

            ///jezeli funkcja wrongPesel wykazała błąd pokaże się echo poniżej
            if($_GET["error"] = "wrongPesel"){ 
                echo '<p class="r">Nieprawidłowy PESEL!</p>';
            }
            else if($_GET["error"] = "wrongLength"){
                echo '<p class="r">Nieprawidłowa długość numeru PESEL!</p>';
            }
            ///jezeli funkcja wrongPesel wykazała błąd pokaże się echo poniżej
            else if($_GET["error"] = "wrongInput"){   
                echo '<p class="r">Wypełnij pole PESEL!</p>';
            }
        }
    ?>
    <br>
    <a href="index.php"><input type="button" value="Likwidacja błędów" ></a>
    <a href="testowa 2.png"><input type="button" value="Zobacz kod" ></a>
    </div>
</body>
</html>