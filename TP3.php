<?php
//Exercice 1
/*
Transformer une phrase composée de mots écrits dans des casses différentes 
afin que chaque mot ait son premier caractère en majuscule.
Exemple : bOnJoUr, jE sUiS UnE pHrAsE pOuR tEsTeR. 
*/

$phraseMystere = "bOnJoUr, jE sUiS UnE pHrAsE pOuR tEsTeR";
var_dump($phraseMystere);
$phraseLower = strtolower($phraseMystere);
var_dump($phraseLower);

$explodedLower = explode(" ", $phraseLower);
var_dump($explodedLower);
foreach($explodedLower as $key => $val):
    $explodedUcfirst[] = ucfirst($val);
    $explodedUcfirst[] = " ";
endforeach;
$implodedUcfirst = implode($explodedUcfirst);
var_dump($implodedUcfirst);

//Exercice 2
/*
Formater l’affichage d’une suite de chaînes contenant des noms et prénoms 
en respectant les critères suivants : 
un prénom et un nom par ligne, 
affichés sur 20 caractères chacun ; 
toutes les initiales des mots doivent être alignées verticalement. 
 */
$chainePrenoms = "Antoine Guillou Phileas Peron Clement Duval Olivier Billant";
var_dump($chainePrenoms);
$explodedchaine = explode(" ", $chainePrenoms);
$implodedChaine = implode($explodedchaine);
var_dump($implodedChaine);
$splitChaine = str_split($implodedChaine);
// var_dump($splitChaine);

for ($i = 0; $i < count($explodedchaine); $i+=2) {
    $prenoms[] = $explodedchaine[$i];
}
var_dump($prenoms);

for ($i = 1; $i < count($explodedchaine); $i+=2) {
    $noms[] = $explodedchaine[$i];
}
var_dump($noms);
// printf("%8.20s<br>",$chainePrenoms);

for ($i = 0; $i < count($prenoms); $i++){
    $nomComplet[] = $prenoms[$i]." ".$noms[$i];
}

var_dump($nomComplet);

echo "<pre>";
for ($i = 0; $i < count($prenoms); $i++){
    printf("%-20s %-20s<br>", $prenoms[$i], $noms[$i]);
}
echo "</pre>";