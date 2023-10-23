
<?php

$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach ($pronouns as $pronoun) {
    if ($pronoun == 'He/She') {
        echo $pronoun . ' codes<br>';
    } else {
        echo $pronoun . ' code<br>';
    }
}

// $number = 1;

// while ($number <= 120) {
//     echo $number . '<br>';
//     $number++;
// }

// for ($number = 1; $number <= 120; $number++) {
//     echo $number . '<br>';
// }

// $members = array (
//     "Alexandre Vandewiele",
//     "Antoine Lansman",
//     "Bastien Venturi",
//     "Carole Gerard",
//     "Dorian Vanden Eynde",
//     "Elisabeth Leyder",
//     "Elodie Ali",
//     "Justin Michel",
//     "Justine Frigo",
//     "Justine Leleu",
//     "Kimi Lefort",
//     "Layla",
//     "Lidwine Careme",
//     "Lucas Beauloi",
//     "Marie Tara",
//     "Mathias Barbier",
//     "Okly 2023",
//     "Pierre Marien",
//     "Robin Piot",
//     "Rosalie Boulard",
//     "Stephane Comblez",
//     "Tim Desmet",
//     "Toms",
//     "Valentin Lefort",
//     "Vens Alexandre",
//     "Virginie Dourson",
// );

// foreach ($members as $member) {
//     echo $member . '<br>';
// }

$pays = array(
    "BE" => "Belgique",
    "FR" => "France",
    "DE" => "Allemagne",
    "NL" => "Pays-Bas",
    "ES" => "Espagne",
    "IT" => "Italie",
    "PT" => "Portugal",
    "GB" => "Grande-Bretagne",
    "IE" => "Irlande",
    "LU" => "Luxembourg"
);

?>
<form>
    <select name="pays">
        <?php
        foreach ($pays as $key => $value) {
            echo '<option value="' . $key . '">' . $value . '</option>';
        }
        ?>
    </select>
</form>