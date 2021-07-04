<?php

//database_connection.php

try {
    $connect = new PDO("mysql:host=localhost;dbname=crud_angular", "root", "");

    // echo 'Successfully connected to db';
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

?>


