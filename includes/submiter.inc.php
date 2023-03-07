<?php
    session_start();
?>
<html>
<head>
    <style>

         body{
            text-align:center;
            font-family:sans-serif;
            color:#B22813 ;
            background-color:#FFEFE5;
        }
        a{
            color:#B22813 ;
            border: solid 2px #B22813;
            border-radius:6px;
            background-color:#D57667;
        }
        a:hover{
            background-color:#E2AFA7;
        }
    </style>
    <link rel="icon" href="../pesel.png">
    <title>PESEL Checker - wynik</title>
    <?php
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
        echo "<br><br><br>";
        echo "<div class='show' style='text-align:center;font-size:40px;'>Pesel jest Prawidłowy</div>";
        echo "<br><br><br>";
        echo "<div class='show' style='text-align:center;font-size:30px;'>".data($pesel)."</div>";
        echo "<br>";
        echo "<div class='show' style='text-align:center;font-size:30px;'>".plec($pesel)."</div>";
    }
    ?>
</head>
<body>
    <p style="text-align:center;">
        <a href="../index.php" style="text-decoration:none;font-size:25px;">Powrot na strone główną</a>
    </p>
</body>
</html>