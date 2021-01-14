<?php

//start a session

session_start();

session_destroy();

header("Location: http://localhost/movie/login.php");

exit();

?>