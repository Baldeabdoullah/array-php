<?php
// les methodes des array

$fruits = ['annanas', 'orange', 'avocat', 'papaye', 'tomate'];

// $fruits1 = ['annanas', 'orange'];
// $fruits2 = ['avocat', 'papaye'];

// count() pour compter
// $nbr_el = count($fruits);
// echo $nbr_el;


// array_push() pour ajouter un ou plusieurs element dans l'array
// $na = array_push($fruits, 'pomme', 'goyave');
// $fruits[] = 'serise';
// var_dump($fruits);


// array_pop - Pop l'element de la fin du tableau
// print_r(array_pop($fruits));



// array_unshiftajoute un ou plusieurs element au debut du tableau
// array_unshift($fruits, 'tomate', 'goyave');

// print_r($fruits);


//array_map() applique le rappel  aux elements des tableaux donnees
// $newarr = array_map(function ($fruit) {
//     return $fruit . 'modifier';
// }, $fruits);

// print_r($newarr);


//array_merge fusionne plusieurs tableaux
// $fruits = array_merge($fruits1, $fruits2);
// var_dump($fruits);

// array rand - choisissez une ou plusieures cle aleatiores dans un tableaux
// print_r(array_rand($fruits, 3));

//array_search Recherche dans le tableau une valeure donnees et renvoie la cle premiere correspondante
// print_r(array_search('papaye', $fruits));

//array_key recupre la cle de l'element
