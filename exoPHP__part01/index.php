<?php 
$nom = 'Nicolas';
$nombre = 1;
$equipe = array('benoit', 'sebastien', 'audrey');

// je suis le commentaire

//var_dump($equipe);

//echo "bonjour je m'appelle $nom je suis enchantée \n ";

$nombre++;
$nombre--;
//echo $nombre * 10;

$x = 5;
$y = 10;

//echo $x % $y;

/* 
opérateur d'affectation :
  = : affecte une valeur
 += : additionne une valeur a celle de base
 .= : ajoute sans additionné une valeur

opérateur arithmétique :
 + / - * correspondent aux valurs math de base
 $a ** $b : résultat de l'élévation de $a à la puissance $b
 $a % $b : Reste de $a divisé par $b.
 -$a :Négation,	Opposé de $a.
 +$a :Identité,	Conversion de $a vers int ou float, selon le plus approprié.
 */

//echo $equipe[0];

$team = [
    ['Mathilde', 'Guy', 'Rodrigo'],
    ['Pierre', 'Jorice', 'Norbert'],
];

//echo $team[0][1];

$profession = [
    ['nom' => 'Guy', 'profession' => 'Branleur'],
    ['nom' => 'Josée', 'profession' => 'Branlé'],
    ['nom' => 'Perlufion', 'profession' => 'Procureur Général de la défense Européène'],
];

//echo 'je m\'appelle ' . $profession[1]['nom'] . ' et je suis ' . $profession[1]['profession'];

// Pour debug on peu utiliser var_dump() qui va donner la valeur d'une ou plusieurs variable.

/*$valeur = 100;

if ($valeur > 100){
    echo 'votre nombr est supérieur a 100';
} elseif ( $valeur = 100) {
    echo 'votre nombre est égale a 100';
}else {
    echo ' votre nombre est inférieur a 100';
};*/

// opérateur de comparaison : if / else / else if / switch / case

/*
    opérateur logique :
        - $a and $b 	And (Et)	TRUE si $a ET $b valent TRUE.
        - $a or $b	Or (Ou)	TRUE si $a OU $b valent TRUE.

        - $a xor $b	XOR	TRUE si $a OU $b est TRUE, mais pas les deux en même temps.
        
        - ! $a	Not (Non)	TRUE si $a n'est pas TRUE.
        - $a && $b	And (Et)	TRUE si $a ET $b sont TRUE.
        - $a || $b	Or (Ou)	TRUE si $a OU $b est TRUE.
*/
$age = 2;
$poussin;
$cadet;
$minime;

/*if($age <= 3){
    echo 'Votre fils est minime';
}elseif ($age <= 6){
    echo 'Votre fils est cadet';
}elseif ($age <= 12){
    echo 'Votre fils est poussin';
}else {
    echo "Votre fils est trop vieux";
};*/


$profession2 = array(
    'guy' => 'branleur', 
    'josée' => 'Branlé', 
    'Perlufion' => 'Procureur Général de la défense Européène'
);


/*foreach ($profession2 as $key => $value) {
    echo 'Bonjour je m\'appel ' . $key . " et je suis " . $value . "\n";
}*/



/*function convert($a){  
    echo $a * 100 . 'cm';
};

convert(2);*/

/*$var = 25;
function change($var){
    echo $var = 28;
};
change($var);*/

function metier($profession2){
    echo $profession2['guy'] = 'prof';
};


//metier($profession2);

date_default_timezone_set('UTC');

//echo date('l jS \of F Y h:i:s A');

$new = htmlspecialchars("<a href='test'>Test</a>", ENT_HTML401);
//echo $new;

//echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);


$a = '1.234';
$b = '5';

//echo bcadd($a, $b);     // 6
//echo bcadd($a, $b, 4);  // 6.2340

//bcadd — Additionne deux nombres de grande taille

//var_dump(count($profession2));

//count — Compte tous les éléments d'un tableau ou quelque chose d'un objet


// echo abs(-4.2);

//abs — Valeur absolue
