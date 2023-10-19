<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $myName = "Tim";?>
    <p>Salut. Je m'appelle <?php echo $myName; ?></p>
    <?php $myAge = 42; ?>
    <p>J'ai plus de <?php echo $myAge ?>ans</p>
    <?php $myColorEyes = "brun"; ?>
    <p>Mes yeux sont <?php echo $myColorEyes?>.</p>
    <?php $myFamily = array(
        0 => "Guy",
        1 => "Lutgarde",
        2 => "Yann",
        3 => "Joeri",
        4 => "Willy",
        5 => "Josette",
        6 => "Michel",
        7 => "Stefan" ); ?>
    <p>La première personne de ma famille, c'est <?php echo $myFamily[0]; ?>.</p>
    <?php $hungry = true; ?>

    <?php
        $temperature = 14;
        if( $temperature >= 15 ) {
        // code to execute if the condition results TRUE
            $clothes = "T-shirt";
            $should_i_wear_a_scarf = false;
        } else {
        // code to execute if the condition results FALSE
            $clothes = "Pull-over";
            $should_i_wear_a_scarf = true;
        }
        
        if ($should_i_wear_a_scarf == true){
            // this is a "fake" function for the sake of the example 
            // that function is only executed in the condition is true
            // grab_scarf_from_door_hanger();
        }
        // The following function will be executed everytime, 
        // but its $clothes argument changes according to the result
        // of our previous conditional structure
        // cover_my_chest_with($clothes);
        echo $clothes;
    ?>
    
</body>
</html>