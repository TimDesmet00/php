<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excuse generator</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="icon" type="image/png" href="favicon.png">
</head>
<body>
    <header>
        <h1>Fake Excuse Generator</h1>
        <p>Generate a fake excuse for your absence</p>
        <form method="get" action="">
            <p>
                <label for="kid-name">Name of your child:</label>
                <input type="text" name="kid-name" id="kid-name">
            </p>
            <p>
                <label for="kid-gender">Gender of your child: Boy:</label>
                <input type="radio" name="gender" id="boy" value="boy">
                <label for="kid-gender">Girl:</label>
                <input type="radio" name="gender" id="girl" value="girl">
            </p>
            <p>
                <label for="teacher-name">Name of the teacher:</label>
                <input type="text" name="teacher-name" id="teacher-name">
            </p>
            <p><label for="reason">A reason for the absence to be chosen among options:</label></p>

            <p><label for="reason">Illness:</label>
            <input type="radio" name="reason" id="illness" value="illness">
            </p>
            <p>
                <label for="reason">Death of the pet:</label>
                <input type="radio" name="reason" id="death" Value="death">
            </p>
            <p>
                <label for="reason">Significant extra-curricular activity:</label>
                <input type="radio" name="reason" id="activity" value="activity">
            </p>
            <p>
                <label for="reason">Transportation issues</label>
                <input type="radio" name="reason" id="transportation" value="transportation">
            </p>
            <p>
            <input type="submit" name="submit" value="Generate excuse">
            </p>
        </form>
    </header>
    <main>
        <?php
        if (isset($_GET['kid-name']) and isset($_GET['kid-gender']) and isset($_GET['teacher-name']) and isset($_GET['reason'])){
            $kidName = $_GET['kid-name'];
            $kidGender = $_GET['kid-gender'];
            $teacherName = $_GET['teacher-name'];
            $reason = $_GET['reason'];
            
            $kidGender = ($kidGender == "boy") ? "My son" : "My daughter";

            $politeIntro = "Dear mister/miss";
            $politeEnding = "Thank you for your understanding. Sincerely, " . $kidName . "'s parents.";

            $excuse = "";

            $excusesForIllness = array("My child has caught the flu and cannot go to school.", " My child has a headache and cannot go to school.", "My child has a runny nose and cannot go to school.", "My child has a toothache and cannot go to school.", "My child has a broken finger and cannot go to school.");
            $excusesForDeath = array("My child's tortoise has died and my child is too sad to go to school.", "My child's cat has died and my child is too sad to go to school.", "My child's dog has died and my child is too sad to go to school.", "My child's hamster has died and my child is too sad to go to school.", "My child's goldfish has died and my child is too sad to go to school.");
            $excusesForActivity = array("my child has an exceptional aqua pony class that he cannot miss", "my child has an exceptional piano class that he cannot miss", "my child has an exceptional ballet class that she cannot miss", "my child has an exceptional karate class that he cannot miss", "my child has an exceptional soccer class that he cannot miss");
            $excusesForTransportation = array("we had an accident on the way to school, luckily we are okay.", "public transport was once again on strike.", "the car broke down on the way to school.", "the car was stolen on the way to school.", "the helicopter runs out of battery.");

            $currentDate = date('l, j F Y');

            switch ($reason){
                case "illness":
                    $excuse = $excusesForIllness[array_rand($excusesForIllness)];
                    break;
                case "death":
                    $excuse = $excusesForDeath[array_rand($excusesForDeath)];
                    break;
                case "activity":
                    $excuse = $excusesForActivity[array_rand($excusesForActivity)];
                    break;
                case "transportation":
                    $excuse = $excusesForTransportation[array_rand($excusesForTransportation)];
                    break;
                default:
                    $excuse = "Please select a reason for the absence";
                    break;
            }

            echo "<p>" . $politeIntro . " " . $teacherName . ",</p>";
            echo "<div>please excuse the absence of, " . $kidGender . " " . $kidName . "for the" . $currentDate . "</div>";
            echo "<div>" . $kidGender . " " . $excuse . "</div>";
            echo "<p>" . $politeEnding . "</p>";
        }
        echo "<p>" . $politeIntro . " " . $teacherName . ",</p>";
        ?>

        
        
    </main>
</body>
</html>