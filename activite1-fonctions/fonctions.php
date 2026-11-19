<?php
declare(strict_types=1);

// Étape 1 — Les quatre opérations
// fonction d'additioner
function additioner(float $a , float $b) : float {
    return $a + $b;
}

// fonction soustraire
function soustraire(float $a, float $b) : float {
    return $a - $b;
}

// fonction de multiplication
function multiplier(float $a, float $b) : float {
    return $a * $b;
}

// fonction diviser
function diviser(float $a, float $b) : float {
    $r = 0;
    try{
        if ($b == 0) throw new InvalidArgumentException("imposible de diviser a 0");
        $r = $a / $b;
    } catch(InvalidArgumentException $e){
        echo $e->getMessage();
    }
    return $r;
}


/// Étape 2 — Fonctions logiques 

// fonction estPair

