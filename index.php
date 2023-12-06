<?php
    $nombreMin = intval(readline("Veuillez saisir un nombre minimum :"));
    $nombreMax = intval(readline("Veuillez saisir un nombre maximum :"));
    
    $nombreRandom = rand($nombreMin, $nombreMax);

    $essaisMax = intval(readline("En combien d'essais voulez-vous trouver la solution ?"));

    $nombreSaisi = intval(readline("Veuillez saisir un nombre entre $nombreMin et $nombreMax :"));

    if ($nombreSaisi < $nombreMin || $nombreSaisi > $nombreMax) {
        $nombreSaisi = intval(readline("Nombre invalide, veuillez réessayer :"));
    }

    $essais = 1;

    for ($essais = 1; $essais <= $essaisMax; $essais++) {
        if ($nombreSaisi < $nombreRandom) {
            $nombreSaisi = intval(readline("Le nombre cherché est plus grand ! Essaie encore :"));
        } else if ($nombreSaisi > $nombreRandom) {
            $nombreSaisi = intval(readline("Le nombre cherché est plus petit ! Essaie encore :"));
        } else if ($nombreSaisi === $nombreRandom) {
            echo "Vous avez gagné ! Le nombre mystère était bien $nombreRandom. Vous l'avez trouvé en $essais essai(s). Félicitations !";
            break;
        }
    }

    if ($nombreSaisi !== $nombreRandom) {
        echo "Vous avez perdu ! Le nombre mystère était $nombreRandom. Essayez encore !";
    }
?>
