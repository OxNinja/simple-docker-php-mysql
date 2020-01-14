<?php
require_once("includes/config.php");
require_once("includes/functions.php");
?>

<?php include("includes/header.php"); ?>

<?php

# Connect to the database
$db = connect_db();

# Create an SQL query
$query = "SELECT * FROM users";

# Make the query
$result = query_db($db, $query);

# Fetch the result only if some found
# Custom function to list users
fetch_result_users($result);

?>

<p>Make custom query :</p>
<form method="post">
    <input type="text" name="query" placeholder="SELECT * FROM users WHERE...">
    <input type="submit" name="submit">
</form>

<?php

if(isset($_POST["submit"]) && isset($_POST["query"])){

    $db = connect_db();

    # OK this is obviously vulnerable to SQLi on purpose for testing
    $query = $_POST["query"];
    
    $result = query_db($db, $query);

    fetch_result($result);
}

?>

<?php include("includes/footer.php"); ?>
