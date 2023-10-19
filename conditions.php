
<?php
// exercice php sur les structures conditionnelles

// 1.1 clean your room Exercice
/*
$room_is_filthy = false;

if( $room_is_filthy == false ){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

function cleanup_room(){
    $room_is_filthy = false;
}
*/
/*
// 1.2 clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[4]; 

if( $room_filthiness == "health hazard" ){
	echo "yuck, the room is disgusting! Put on a gas mask to clean it!";
} else if( $room_filthiness == "filthy" ){
	echo "yuck, the room is dirty: let’s put on gloves and let’s clean it!";
} else if( $room_filthiness == "dirty" ){
    echo "Yuk, Room is dirty : let's clean it up !";
} else if( $room_filthiness == "clean" ){
    echo "The room is clean: but there is still a bit of mess!";
} else {
	echo "Nothing to do, room is neat.";
}
*/
/*
// 2. "Different greetings according to time" Exercise

$now = date('H:i'); // How to get the current time in PHP ? Google is your friend ;-)

// Test the value of $now and display the right message according to the specifications.
if ($now >= '05:00' and $now <= '09:00' or $now >= '09:01' and $now <= '12:00') {
    echo "Bonjour";
} elseif ($now >= '12:01' && $now <= '16:00') {
    echo "Bon après-midi";
} elseif ($now >= '16:01' && $now <= '21:00') {
    echo "Bonne soirée";
} else {
    echo "Bonne nuit";
}
*/

// 3. 4. "Different greetings according to age" Exercise

if (isset($_GET['age']) and isset($_GET['gender'])){
	// Form processing
    $age = $_GET['age'];
    $gender = $_GET['gender'];

    if ($age < 12) {
        if($gender == "woman"){
            echo "Hello Miss Kiddo!";
        }else{
            echo "Hello Mister Kiddo!";
        }

    } elseif ($age > 12 and $age < 18) {
        if($gender == "woman"){
            echo "Hello Miss Teenager!";
        }else{
            echo "Hello Mister Teenager!";
        }

    } elseif ($age >= 18 and $age < 115) {
        if($gender == "woman"){
            echo "Hello Miss Adult!";
        }else{
            echo "Hello Mister Adult!";
        }

    } else {
        echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";
    }
}
// Form (incomplete)
?>
<form method="get" action="">
	<label for="age">What is your age?</label>
	<input type="number" name="age">
    <label for="woman">Woman:</label>
    <input type="radio" name="gender" id="woman" value="woman">
    <label for="man">Man:</label>
    <input type="radio" name="gender" id="man" value="man">
	<input type="submit" name="submit" value="Greet me now">
</form>


