<?php 
declare(strict_types=1);
$notes   = [12, 15, 8, 17, 9, 14, 11]; 
$prenoms = ['Sara', 'Youssef', 'Imane', 'Omar', 'Khadija'];

// Exercice 2 — Manipuler les tableaux indexés

// Étape 1 — Lecture et parcours

$lastElement = array_pop($notes);
$firstElement = array_shift($notes);

// affichage de nombres des notes

$nombresNotes = count($notes);

// parcourir la list par forEach


    // foreach($notes as $index => $note) {
    //     echo " N $index  " . $note . ", ";
    // }


// parcourir la list par for loop
    // for($i = 0; $i < count($notes) ; $i++ ) {
    //     $n = $i + 1;
    //     echo "Note N {$n} $notes[$i], ";
    // }

// afficher prenons as 1. Sara ....
// foreach($prenoms as $i => $prenom) {
//     $n = $i + 1;
//     echo "$n. $prenom  ";
// }


// Étape 2 — Ajouter, retirer, insérer
// 1. array_push($notes, 16);

// $notes = [...$notes, 16] ;
// print_r($notes) ;

// 2. ajouter 10 au debut

// array_unshift($notes, 10);
// print_r($notes);

// 3. retirer la premiere et la derniere note
// array_shift($notes);
// array_pop($notes);
// print_r($notes);

// 4 insere 16
// array_splice($notes, 16, 2, 0);
// print_r($notes);

// Étape 3 — Recherche

// recherche un element
// echo in_array( 17, $notes);

// recherche l'indice
    // echo array_search(17, $notes);

// verifier si Omar est dans $prenons
// echo in_array("Omar", $prenoms);

// Étape 4 — Statistiques 
$notes = [12, 15, 8, 17, 9, 14, 11];

// 1. la somme, la moyenne (arrondie à 2 décimales), la note minimale et la note maximale ; 