<?php 

ob_start();

include('header.php');

     
include('movieclass.php');


?>
<!DOCTYPE html>
<html>
<head>
<title>
    Cinemahouse
</title>


<meta name='keyword' content=' cinema in lagos, cinema in Nigeria, films Nigeria, movie show time'>
<meta name='description' content=' Find out what movies are currently showing, book movie tickets, watch trailers, and many more.'>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

<link href='css/bootstrap.css' type='text/css' rel='stylesheet'>
<link href='fontawesome/css/all.css' type='text/css' rel='stylesheet'>
<link href='style/frontend.css' type='text/css' rel='stylesheet'>
<link href='css/animate4.min.css' type='text/css' rel='stylesheet'>

<link href='css/bootstrap.css' type='text/css' rel='stylesheet'>
<link href='fontawesome/css/all.css' type='text/css' rel='stylesheet'>
<link href='css/animate4.min.css' type='text/css' rel='stylesheet'>

  <style>

  .MovieGenre{width: 100%;
      border: 1px solid #ccc;
      background: #FFF;
      margin: 0 0 5px;
      padding: 10px;
      font-style: normal;
      font-variant-ligatures: normal;
      font-variant-caps: normal;
      font-variant-numeric: normal;
      font-weight: 400;
      font-stretch: normal;
      font-size: 12px;
      line-height: 16px;
      font-family: Roboto, Helvetica, Arial, sans-serif;
      
    }  



</style>


 
<script src='js/jquery.min.js' type='text/javascript'></script>
<script src='js/popper.min.js' type='text/javascript'></script>
<script src='js/bootstrap.js' type='text/javascript'></script>



<?php

if ($_SERVER['REQUEST_METHOD']=='POST' && $_POST['submit']=='send') {
    $errors = array();

          $movie_name=$_POST['moviename'];
          $movie_description=$_POST['moviedescription'];
          $movie_director=$_POST['moviedirector'];
          $movie_year=$_POST['movieyear'];
        

  // validate Movie name
    if(empty($_POST['moviename'])){
      $err_moviename = "<div class='err'>Movie name field cannot be empty</div>";
      $errors[] = $err_moviename;
  }
  

  // validate Movie description

    if (empty($_POST['moviedescription'])){

        $err_moviedescription = "<div class='err'>Movie description field cannot be empty</div>";
        $errors[] = $err_moviedescription;
    }
  

// validate Movie director

    if (empty($_POST['moviedirector'])){

        $err_moviedirector = "<div class='err'>movie director field cannot be empty</div>";
        $errors[] = $err_moviedirector;
    }
  

// validate Movie year

    if (empty($_POST['movieyear'])){

        $err_movieyear = "<div class='err'>movie year field cannot be empty</div>";
        $errors[] = $err_movieyear;
    }
  
    






      if (count($errors)==0) {
            //echo "successfully";
               
             
        $movie =new Movie;
         
 
$movies_id=$movie->Addmovie($_POST['moviename'],$_POST['moviedescription'],$_POST['moviedirector'],$_POST['movieyear'],$_POST['picture']);


           header('Location:addmovie.php?msg=successfully registered');

  }


}


?>
 
<body style=" background-image: url('project6/addMovieBackground.jpg');background-size: cover" >
  <?php

    if(isset($error)){


      foreach ($error as $key => $value) {
        
          echo $value;

      }


    }



  ?>

  

    <div class="container" style='margin-top: 30px' >

    <div class='row'> 
    <div class="col-md-6" style="max-width: 540px; margin:auto; background-color: #8FA4AF"> 
      <form id="contact" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
        <div style='color: yellow,'><?php echo !empty($_GET['msg'])?$_GET['msg']:''; ?></div> 
        
        <h2  style="text-align: center;    font-family: cursive"><b>Add Movie</b></h2>


        <div style='margin-top: 40px'>
        <input  class='form-control' name="moviename" placeholder="Movie Name" type="text" tabindex="1"  required autofocus value="<?php 
          if(isset($_POST['moviename'])){ 
            echo $_POST['moviename']; } 
          ?>">
        </div>
        <br>

          <?php

     if(isset($err_moviename)){

       echo $err_moviename;

         }

  ?>

  <div>
    <TEXTAREA class='form-control'  name="moviedescription" placeholder="description" type="textArea" tabindex="1"style='height: 150px' required><?php 
          if(isset($_POST['moviedescription'])){ 
            echo $_POST['moviedescription']; } 
          ?></TEXTAREA>

          <div>
            <br>

          <?php

     if(isset($err_moviedescription)){

       echo $err_moviedescription;

         }

  ?>

       
        <div>

        <input class='form-control'  name="moviedirector" placeholder="Director" type="text" tabindex="1" required value="<?php 
          if(isset($_POST['moviedirector'])){ 
            echo $_POST['moviedirector']; } 
          ?>">
        </div>
        <br>

          <?php

     if(isset($err_moviedirector)){

       echo $err_moviedirector;

         }

  ?>

        <div>

        <input class='form-control'  name="movieyear" placeholder="YY-MM-DD" type="date" tabindex="1" required value="<?php 
          if(isset($_POST['movieyear'])){ 
            echo $_POST['movieyear']; } 
          ?>">

        </div>
        <br>

          <?php

     if(isset($err_movieyear)){

       echo $err_movieyear;

         }

  ?>



       <input style="padding: 10px;" type="file" name="photo" required autofocus><br>



        <input style="font-size: larger;background-color: #c2fbb8;font-family: cursive;font-weight: bold;" 
        class="MovieGenre" type="submit" name="submit" value="send"> 
        <p class="copyright"></p>
        <p></p>


      </form>
    </div>
      
    </div>

  </div>
</body>
</html> 






















 