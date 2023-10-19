<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fake excuse generator</title>
    <link rel="stylesheet" href="style.css">
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
                <input type="radio" name="girl" id="girl" value="girl">
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
            $kidGender = $_GET['kid-name'];
            $teacherName = $_GET['teacher-name'];
            $reason = $_GET['reason'];

            $excuse = "";

            
        }
        ?>
    </main>
</body>
</html>