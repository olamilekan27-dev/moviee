<?php 

include('header.php');
include('movieclass.php');

$movie=new Movie("localhost","root","","movieshowtimefounder");
$userdetail=$movie->get_movie_by_id($_GET['id']);

	

?>



<body style="background-image:url(project6/bg.jpg);">

<div class="wrapper">
  <div class="title">
    <h1>Edit form</h1>
  </div>
  <div class="contact-form">
    <div class="input-fields">
    	<form action="update.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" class="input" value="<?php echo $_GET['id']; ?>">
      <input type="text" class="input" name="moviename" placeholder="Movie name" value="<?php echo $userdetail['movie_name'];?>">
      <input type="text" class="input" name="moviedirector" placeholder="Movie director" value="<?php echo $userdetail['movie_director'];?>">
      <input type="date" class="input" name="movieyear" placeholder="YY-MM-DD" value="<?php echo $userdetail['movie_year'];?>">
      <input type="file" class="input" placeholder="Upload Movie picture" name="photo" id="fileToUpload">
    </div><br>
    <div class="msg">
    <textarea name="moviedescription" placeholder="Movie description" class="form-control"><?php echo $userdetail['movie_description'];?></textarea>
      <div>

      	<input type="submit" class='btn' name='submit' id='submit' value='send'>

      </div>
  </div>
</form>
    </div>
  </div>
</div>

