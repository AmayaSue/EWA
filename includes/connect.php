<?php 
  // Connectionstrings (siehe PHPmyadmin von XAMPP)
  $db_host = "localhost";
  $db_user = "G08";
  $db_pass = "em33w";
  $db_database = "g08";

  // Connection aufbauen mit obrigen Werten
  $dbCon = mysqli_connect($db_host,$db_user,$db_pass,$db_database);
	
  // Falls Kaputt Fehler werfen
  if ($dbCon->connect_error) {
    die("Connection failed: " . $dbCon->connect_error);
  }
