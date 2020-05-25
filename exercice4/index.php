<?php 
    $age = 18;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>Exercice 4 PHP</title>
</head>
<body>
<p><?php
    if($age >= 18){
        echo 'Tu es majeur';
    }
    else{
        echo 'Tu n\'es pas majeur';
    }
?></p>
</body>
</html>