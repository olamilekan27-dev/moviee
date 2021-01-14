<?php session_start();

include('movieclass.php');

$movie = new Movie;

// die(print_r($_POST));

echo $movie->updatemovie($_POST['moviename'],$_POST['moviedescription'],$_POST['moviedirector'],$_POST['movieyear'],$_POST['id']);




?>