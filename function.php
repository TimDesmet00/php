<?php
$nameInTiny = "emile";

function capitalize($name) {
    return ucfirst($name);
}
echo capitalize($nameInTiny);

echo date("Y");

echo date("Y-m-d-H-i-s");

$num1 = "salsifi";
$num2 = 10;

function sum($num1, $num2) {
    if(!is_numeric($num1) || !is_numeric($num2)) {
        return "Error: argument is the not a number";
    }
    return $num1 + $num2;
}

echo "<br>";
echo sum($num1, $num2);

function accronym($string) {
    $words = explode(" ", $string);
    $accronym = "";
    foreach($words as $word) {
        $accronym .= strtoupper($word[0]);
    }
    return $accronym;
}

echo "<br>";
echo accronym("Salut la compagnie, comment aller vous aujourd'hui ?");

function replaceAE($string){
    return str_replace(["ae"], "æ", $string);
}

echo "<br>";
echo replaceAE("caecotrophie, chaenichthys, microsphaera, sphaerotheca");

function normalReturn($string){
    return str_replace(["æ"], "ae", $string);
}

echo "<br>";
echo normalReturn("cæcotrophie, chænichthys, microsphæra, sphærotheca");

function feedback($message, $cssClass) {
    return "<div class=\"$cssClass\">$cssClass: $message.</div>";
}

echo feedback("Incorrect email address", "error");


function generateRandomWord() {
    $randonLengthWord = rand(1, 5);
    $randomLengthWord2 = rand(7, 15);

    $word = "";
    $word2 = "";

    for($i = 0; $i < $randonLengthWord; $i++) {
        $word .= chr(rand(97, 122));
    }
}