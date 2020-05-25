<?php 
    $gender = 'Homme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>Exercice 3 PHP</title>
</head>
<body>
<p><?php
    if($gender == 'Homme'){
        echo 'C\'est un développeur !!!';
    }
    else{
        echo 'C\'est une développeuse !!!';
    }
?></p>
</body>
</html>