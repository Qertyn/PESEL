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
        }
        a{
            color:#B22813 ;
            border: solid 2px #B22813;
            border-radius:6px;
            background-color:#D57667;
            padding: 15px;
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
        echo "<br><br><br><div class='main_show' 
        style='border-radius:20px;
        background-color:#fcbb90;
        border:1px solid black;
        width:40%;
        padding-top:20px;
        padding-bottom:35px;
        box-shadow: 15px 15px 20px black;
        margin:auto;'>";
        echo "<div class='show' style='text-align:center;font-size:40px;'>Pesel jest Prawidłowy</div>";
        echo "<br><br>";
        echo "<div class='show' style='text-align:center;font-size:30px;'>".data($pesel)."</div>";
        echo "<br>";
        echo "<div class='show' style='text-align:center;font-size:30px;'>".plec($pesel)."</div>";
        echo "<br><br>";
        echo "<a href='../index.php' 
            style='text-decoration:none;
            background-color:#FF4225;
            border-radius:4px;
            width:150px;
            height:40px;
            color:#8D1E0D;
            border: solid 2px #B22813;
            '>Powrot na strone główną</a></div>";
    }
    ?>
</head>
<body>
</body>
</html>