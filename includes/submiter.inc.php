<?php
    session_start();
?>
<html>
<head>
    <link rel="stylesheet" src="submiter.css">
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
        echo "<div class='show' style='text-align:center;font-size:100px;'>".data($pesel)."</div>";
    }
    ?>
</head>
<body>
    <a href="../index.php" style="text-decoration:none;text-align:center;font-size:40px;">Powrot na strone główną</a>
</body>
</html>