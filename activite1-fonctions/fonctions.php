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
function estPair(int $a) : string {
    if ($a % 2 == 0) return $a . "est Pair";
    return $a + " est impair"; 
}

// fonction estPositif
function estPositif(float $a) : bool {
    if ($a * -1 > 0) return false;
    if ($a * -1 < 0) return true;
}

// fonction maximum sans utiliser max()

function maximum(float $a, float $b, float $c) : float {
    $max = $a;
    if ($b > $a) $max = $b;
    if ($c > $a) $max = $c;

    return $max;
}

// fonction maximum with max 

function maximumWithMax(float $a, float $b, float $c) : float {
    return max($a, $b, $c);
}

// fonction estPremier 

function estPremier(int $a) : bool {
    for($i = 2; $i < $a; $i++) {
        $r = $a % $i;
        if($r == 0) return false;
    }
    return true;
}

// Étape 3 — Calculs commerciaux
// fonction calcul TTC 
function calculerTTC(float $ht, float $tva = 20.0): float {
    return ($ht * $tva) / 100;
}

// fonction calcul le prix apres le remise
function calculerRemise(float $prix, float $pourcentage) : float {
    $total = $prix - ($prix * $pourcentage) / 100;
    return $total;
}

// fonction calculer facture
function calculerFacture(float $prixUnitaire, int $quantite, float $remise , float $tva) : string {
    $prixTotal = ($prixUnitaire * $quantite);
    $ttc = calculerTTC($prixTotal,$tva);
    $remise = calculerRemise($prixUnitaire, $remise);
    $total = $remise + $ttc;
    return number_format($total, 2, ",", " ") . " MAD";
}


// Étape 4 — Statistiques et géométrie 

// fonction caluler moyenne
function calculerMoy(float ...$notes) : float {
    $total = 0;
    foreach($notes as $note) {
        $total += $note;
    }

    $moy = $total / count($notes);

    return $moy;
}

