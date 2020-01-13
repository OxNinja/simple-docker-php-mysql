<?php

# Connect to the database using config settings
function connect_db(){
	$db = new mysqli(Config::$db_host, Config::$db_user, Config::$db_pass, Config::$db_db);
	if($db->connect_error){
		die($db->connect_error);
	}
	return $db;
}

# Make a query to the database
function query_db($db, $query){
	$r = $db->query($query);
	$db->close();
    echo "\nQuery : <pre>" . $query . "</pre>\n";
	return $r;
}

# Fetching the results
function fetch_result($res){
    if($res->num_rows > 0){
        echo "\nResults :\n"; 
        echo "<pre>\n";

		while($r = $res->fetch_assoc()){
            # Note : only applies for the default database
			echo $r['id'].":".$r['username'].":".$r['password']."\n";
        }

        echo "</pre>\n";

	} else {
		echo "No result.";
	}
}

?>
