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
fetch_result($result);

?>

<?php include("includes/footer.php"); ?>
