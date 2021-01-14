
<?php 

ob_start();

include('header.php');

     
include('movieclass.php');


?>


<?php

if($_SERVER['REQUEST_METHOD']=='POST' && $_POST['submit']=='Add'){

      $error = array();

          $select_cinema=$_POST['selectcinema'];
          $select_movie=$_POST['selectmovie'];
          $showstartdate=$_POST['showstart'];
          $showendstart=$_POST['showend'];
          $weekdays=$_POST['weekdays'];
          $weekend=$_POST['weekend'];
          $bluckbluster=$_POST['bluckbluster'];
          $movies3d=$_POST['movies3d'];


  //validation for selectcinema

        if(empty($_POST['selectcinema'])){

            $err_selectcinema= "<div class='err'>You have to select your cinema name</div>";
            $error[] = $err_selectcinema;

        }

   //validation for selectmovie     


        if(empty($_POST['selectmovie'])){

            $err_selectmovie = "<div class='err'>You have to select a movie</div>";

            $error[] = $err_selectmovie;


        }


//validation for showstart

        if(empty($_POST['showstart'])){

          $err_showstart= "<div class='err'>Movie start date is not selected</div>";

          $eror[] = $err_showstart;
        }




//validation for showend

      if(empty($_POST['showend'])){

        $err_showend= "<div class='err'>Movie end date is not selected</div>";
          $error[] = $err_showend;
      }


//validation for weekdays price
      if(empty($_POST['weekdays'])){

        $err_weekdays="<div class='err'>You are yet to Select a price for this category</div>";

          $error[] = $err_weekdays;


      }



       if(empty($_POST['weekend'])){

        $err_weekend="<div class='err'>You are yet to Select a price for this category</div>";

          $error[] = $err_weekend;


      }


if(empty($_POST['bluckbluster'])){

        $err_bluckbluster="<div class='err'>You are yet to Select a price for this category</div>";

          $error[] = $err_bluckbluster;


      }

if(empty($_POST['movies3d'])){

        $err_movies3d="<div class='err'>You are yet to Select a price for this category</div>";

          $error[] = $err_movies3d;


      }


    if (count($error)==0) {
            //echo "successfully";
               
             
        $movieshowtime =new  movieshowtime;

 
      $movie_showing_id=$movieshowtime->Adddetails($_POST['selectcinema'],$_POST['selectmovie'],$_POST['selectcinema'],$_POST['selectmovie'],$_POST['showstart'],$_POST['showend'],$_POST['weekdays'],$_POST['weekend'],$_POST['bluckbluster'],$_POST['movies3d']);
  //        var_dump($_POST['']);
//exit();

           header('Location: admin/showtimedashboard.php?msg=successfully registered');

  }



}


?>











<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
 
  <div class="form-group" style='text-align: center'>
    <label for="exampleFormControlSelect1">Select Cinema </label>
    <select class="form-control" name='selectcinema' id="exampleFormControlSelect1">
     <option value="1" style='border: 0'>All Cinemas</option>

      <?php if(!empty($connect)){
        //var_dump($connect);
        //exit();
                            foreach($connect as $id=>$name){
                                echo "<option value='$id'>$name</option>";
                            }
                        } 

                        ?>
    </select>
  </div>
  <div class="form-group" style='text-align: center'>
    <label for="exampleFormControlSelect1">Select Movie</label>
    <select class="form-control" name='selectmovie' id="exampleFormControlSelect1">

      <option value='1' style='border:0'>Select Movie</option>
      <?php

          if(!empty($praise)){

                  foreach ($praise as $key => $value) {

                    echo "<option value='$key'>$value</option>";
                  }

          }

      ?>
     
    </select>
  </div>
   
  <div class="form-group" style='text-align: center'>
    <div class='row'>
      <div class='col-md-5'>
    <label for="exampleFormControlSelect1">Show Start Date/Time</label>
    <input type="datetime-local" name='showstart' value="">
  </div>
   <div class='col-md-5'>
    <label for="exampleFormControlSelect1">Show End Date/Time</label>
    <input type="datetime-local" name='showend' value="">
  </div>  
  </div>
</div>
<p style='text-align: center'>Select Prices</p>
<div class="form-group" style='text-align: center'>
    <div class='row' style='text-align: center'>
      <div class='col-md-3'>
    <label for="exampleFormControlSelect1">Weekdays Ticket Prices</label>
    <input type="number" name='weekdays' value="">
  </div>
   <div class='col-md-3'>
    <label for="exampleFormControlSelect1">Weekend Ticket Prices</label>
    <input type="number" name='weekend' value="">
  </div>
  <div class='col-md-3'>
    <label for="exampleFormControlSelect1">Blockbluster Movies Prices</label>
    <input type="number" name='bluckbluster' value="">
  </div>
  <div class='col-md-3'>
    <label for="exampleFormControlSelect1">Movies in 3D</label>
    <input type="number" name='movies3d' value="">
  </div>

  </div>
</div>
<div class="form-group" style='text-align: center'>
<input type="submit" class='btn btn-success btn-lg' name='submit' id='submit' value='Add'>

  </div>


</div>