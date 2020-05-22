<?php 
    $age = 21;
    $gender = 'Femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>Exercice 2 PHP</title>
</head>
<body>
    <p>Vous êtes un<?php
    if ($age >= 18 && $gender == 'Homme'){
        echo ' homme et vous êtes majeur';
    }
    elseif ($age < 18 && $gender == 'Homme'){
        echo ' homme et vous êtes mineur';
    }
    elseif ($age >= 18 && $gender == 'Femme'){
        echo 'e femme et vous êtes majeure';
    }
    elseif ($age < 18 && $gender == 'Femme'){
        echo 'e femme et vous êtes mineure';
    }
    else{
        echo 'e créature bizarre';
    }?></p>
</body>
</html>