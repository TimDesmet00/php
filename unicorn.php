
<?php

if (isset $_GET['race']){
    $race = $_GET['race'];
    $image = "";

    $image = ($race == "human") ? "human.gif" : ($race == "cat") ? "cat.gif" : ($race == "unicorn") "unicorn.gif";
}

?>

<form method="get" action="">
<label for="race">Are you a Human:</label>
    <input type="radio" name="race" id="race" value="human">
    <label for="race">a Cat:</label>
    <input type="radio" name="race" id="race" value="cat">
    <label for="race">a Unicorn</label>
    <input type="radio" name="race" id="race" value="unicorn">
    <label for="race">?</label>
</form>