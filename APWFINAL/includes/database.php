<?php

/**
*Get the database connection_aborted
*
*@return object Connection to a MYSQL server
*/

function getDB(){
	
	$db_host = "localhost";
	$db_name = "biacan36";
	$db_user = "biacan36";
	$db_pass = "1BlUe3LiON!";
	
	
	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	
	if(mysqli_connect_error()){
		echo mysqli_connect_error();
		exit;
	}
	return $conn;
}

	