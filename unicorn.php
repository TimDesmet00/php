
<?php

if (isset ($_GET['race'])){
    $race = $_GET['race'];
    $image = "";

    $image = ($race == "human") ? "human.gif" : (($race == "cat") ? "cat.gif" : (($race == "unicorn") ? "unicorn.gif" : ""));

    echo "<img src='$image' alt='image' />";
}

?>

<form method="get" action="">
<label for="race">Are you a Human:</label>
    <input type="radio" name="race" id="human" value="human">
    <label for="race">a Cat:</label>
    <input type="radio" name="race" id="cat" value="cat">
    <label for="race">a Unicorn</label>
    <input type="radio" name="race" id="unicorn" value="unicorn">
    <label for="race">?</label>
    <input type="submit" name="submit" value="Greet me now">
</form>