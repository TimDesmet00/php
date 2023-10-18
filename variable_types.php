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
    
</body>
</html>