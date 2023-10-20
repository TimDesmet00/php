<?php

$family = array("Guy", "Lutgarde", "Yann", "Joeri", "Willy", "Josette", "Stefan", "Michel", "Tim");

print_r($family);
echo "<br>";
$favoriteRecette = array("blanquette de veau", "pizza", "ragout de boeuf", "poulet au curry vert", "chili con carne");

print_r($favoriteRecette);
echo "<br>";

$favoriteFilm = array("Le seigneur des anneaux", "Le parrain", "Le bon, la brute et le truand", "Le silence des agneaux", "Pulp fiction");

print_r($favoriteFilm[0]);
echo "<br>";

$me = array(
    "firstName" => "Tim",
    "lastName" => "Desmet",
    "age" => 42,
    "favoriteSeason" => "autumn",
    "football" => false,
    "favoriteFilm" => array("Le seigneur des anneaux", "Le parrain", "Le bon, la brute et le truand", "Pulp fiction")

);

print_r($me);

$me['hobbies'] = array("Jeu vidéo", "jeu de rôle", "Animé");
echo "<br>";
print_r($me);

$mother = array(
    "firstName" => "Lutgarde",
    "lastName" => "Schueremans",
    "age" => 70,
    "favoriteSeason" => "summer",
    "football" => false,
    "favoriteFilm" => array("La boom", "Pulp fiction"),
    "hobbies" => array("jardinage", "lecture", "cuisine")
);
echo "<br>";
$me['mother'] = $mother;

echo '<pre>';
print_r($me);
echo '</pre>';

echo "<br>";

$countMotherHobbies = count($me['mother']['hobbies']);
echo "My mother hobbies count = " . $countMotherHobbies;

echo "<br>";

$countMeHobbies = count($me['hobbies']);
echo "Me count Hobbies = " . $countMeHobbies;

echo "<br>";

echo "$countMotherHobbies + $countMeHobbies = " . ($countMotherHobbies + $countMeHobbies);

echo "<br>";

$me['hobbies'][] = "taxidermie";

echo '<pre>';
print_r($me);
echo '</pre>';

$me['lastName'] = 'Durand';

echo '<br>';
echo '<pre>';
print_r($me);
echo '</pre>';

$soulmate = array(
    "firstName" => "",
    "lastName" => "",
    "age" => 38,
    "favoriteSeason" => "spring",
    "football" => false,
    "favoriteFilm" => array("Titanic", "Braveheart"),
    "hobbies" => array("Jeu vidéo", "Le ménage", "Animé")
);

$intersectHobbies = array_intersect($me['hobbies'], $soulmate['hobbies']);

echo '<br>';

print_r($intersectHobbies);


$fusionHobbies = array_merge($me['hobbies'], $soulmate['hobbies']);

echo '<br>';

print_r($fusionHobbies);

$web_development = array(
    "frontend" => array(),
    "backend" => array()
);

$web_development['frontend'][] = "xhtml";
$web_development['backend'][] = "Ruby on Rails";
$web_development['frontend'][] = "CSS";
$web_development['frontend'][] = "Flash";
$web_development['frontend'][] = "Javascript";
$web_development['frontend'][0] = "html";
unset($web_development['frontend'][2]);


echo '<br>';
echo '<pre>';
print_r($web_development);
echo '</pre>';
echo '<pre>';
var_dump($web_development);
echo '</pre>';