<?php
    $age = 19;
    $gender = 'Homme';
    
    if ($age >= 18 && $gender == 'Homme') {
        echo 'Vous êtes un homme et vous êtes majeur';
    } elseif ($age < 18 && $gender == 'Homme') {
        echo 'Vous êtes un homme et vous êtes mineur';
    } elseif ($age >= 18 && $gender == 'Femme') {
        echo 'Vous êtes une femme et vous êtes majeur';
    } else {
        echo 'Vous êtes une femme et vous êtes mineur';
    }
?>