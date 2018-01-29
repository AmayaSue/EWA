<?php 
// Die MySQL Connection reinholen
  require '../includes/connect.php';

// Query zusammen bauen
  $sql = "SELECT Titel, PreisBrutto FROM buecher";
// Query ausführen
  $result = $dbCon->query($sql);

// Array zum ausgeben
  $books = [];
// Wenn Query ohne Fehler
  if ($result = $dbCon->query($sql)) {
    // Rückgabe assoziativ (statt array[0][0], array[0]['name'])
    while ($row = $result->fetch_assoc()) {
      //Datensatz in das Array speichern
      $books[] = $row;
    }
    // Resultset leeren
    $result->free();
  }

// Als JSON Ausgeben
echo json_encode($books);
// Verbindung schließen
$dbCon->close();