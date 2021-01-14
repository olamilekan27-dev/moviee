<?php

$host = "localhost";

$username ="root";

$password ="";

$dbname ="movieshowtimefounder";

//set data source

$dsn = "mysql:hos=".$host.";dbname=".$dbname;
//creating the pdo instance
$pdo = new pdo($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);















?>