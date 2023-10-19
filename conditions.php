
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

// 2. "Different greetings according to time" Exercise

$now = ; // How to get the current time in PHP ? Google is your friend ;-)

// Test the value of $now and display the right message according to the specifications.
if( condition){
} ...