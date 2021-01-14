<?php 

ob_start();

include('header2.php');

     
include('movieclass.php');

?>

<?php

if ($_SERVER['REQUEST_METHOD']=='POST' && $_POST['submit']=='send') {
    $errors = array();

          $cinema_name=$_POST['cinema_name'];
          $username=$_POST['username'];
          $password=$_POST['password'];
          $cinema_manager=$_POST['cinema_manager'];
          $cinema_address=$_POST['cinema_address'];



  // validate cinema name
    if(empty($_POST['cinema_name'])){
      $err_cinemaname = "<div class='err'>This field cannot be empty</div>";
      $errors[] = $err_cinemaname;
  }


// validate username
    if(empty($_POST['username'])){
      $err_username = "<div class='err'>username field cannot be empty</div>";
      $errors[] = $err_username;
  }


    // validate cinema_manager
    if(empty($_POST['cinema_manager'])){
      $err_cinemamanager = "<div class='err'>This field cannot be empty</div>";
      $errors[] = $err_cinemamanager;
  }else if (!preg_match("/^[a-zA-Z-' ]*$/",$cinema_manager)) {
      $err_cinemamanager = "<div class='err'>Only letters and white space allowed</div>";
       $errors[] = $err_cinemamanager;
    }


    // validate cinema address
    if(empty($_POST['cinema_address'])){
      $err_cinemaaddress = "<div class='err'>This field cannot be empty</div>";
      $errors[] = $err_cinemaaddress;
  }


  // validate cinema phone
    if(empty($_POST['cinema_phone'])){
      $err_cinemaphone = "<div class='err'>This field cannot be empty</div>";
      $errors[] = $err_cinemaphone;
  }


  // validate cinema phone
    if(empty($_POST['cinema_seat_capacity'])){
      $err_cinemaseatcapacity = "<div class='err'>This field cannot be empty</div>";
      $errors[] = $err_cinemaseatcapacity;
  }


  if($_POST['password'] != $_POST['confirm_password']){

  $err_password= "<div class='err'>Your password and confirm password do not match,please retry</div>";

  $errors[] = $err_password;

}else if (strlen($password) < 8){

  $err_password= "<div class='err'>Your password should not be less than 8 characters. please retry</div>";

  $errors[] = $err_password;

}


if (count($errors)==0) {
            //echo "successfully";
               
             
        $cinema=new authentication;
         
//md5 here encript our password 
$cinema_id=$cinema->registercinema($_POST['cinema_name'],$_POST['username'],$_POST['cinema_manager'],$_POST['cinema_address'],$_POST['cinema_phone'],$_POST['cinema_seat_capacity'],$_POST['cinema_other_details'],md5($_POST['password']));
  if(!empty($cinema_id)){
           header('Location:login.php?msg=successfully registered');
         }else{
          die("There is no Cinema ID");
         }

  }




}
?>


<body>

<div class="signup-form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <h2>Register</h2>
    <p class="hint-text">Create your account. It's free and only takes a minute.</p>
    <?php

    if(isset($error)){


      foreach ($error as $key => $value) {
        
          echo $value;

      }


    }

    ?>

        <div class="form-group">
        <input type="text" class="form-control" name="cinema_name" autocomplete="off" placeholder="cinema name" value="<?php 
          if(isset($_POST['cinema_name'])){ 
            echo $_POST['cinema_name']; } 
          ?>">
           <?php

              if(isset($err_cinemaname)){

              echo $err_cinemaname;

            }

          ?>
      </div>

     

      <div class="form-group">
        <input type="text" class="form-control" name="username" autocomplete="off" placeholder="username" value="<?php 
          if(isset($_POST['username'])){ 
            echo $_POST['username']; } 
          ?>">
          <?php

              if(isset($err_username)){

              echo $err_username;

            }

          ?>
      </div>

      

      <div class="form-group">
        <input type="text" class="form-control" name="cinema_manager" autocomplete="off" placeholder="cinema manager" value="<?php 
          if(isset($_POST['cinema_manager'])){ 
            echo $_POST['cinema_manager']; } 
          ?>">
          <?php

              if(isset($err_cinemamanager)){

              echo $err_cinemamanager;

            }

          ?>
      </div>

         

        <div class="form-group">
          <input type="text" class="form-control" name="cinema_address" autocomplete="off" placeholder="Cinema Address" value="<?php 
          if(isset($_POST['cinema_address'])){ 
            echo $_POST['cinema_address']; } 
          ?>">
          <?php

              if(isset($err_cinemaaddress)){

              echo $err_cinemaaddress;

            }

          ?>
        </div>
        
        <div class="form-group">
          <input type="number" class="form-control" name="cinema_phone" autocomplete="off" placeholder="Phone number" value="<?php 
          if(isset($_POST['cinema_phone'])){ 
            echo $_POST['cinema_phone']; } 
          ?>">
          <?php

              if(isset($err_cinemaphone)){

              echo $err_cinemaphone;

            }

          ?>
        </div>
        

    <div class="form-group" style="margin-top: 20px">
            <input type="text" class="form-control" name="cinema_seat_capacity" autocomplete="off" placeholder="Seat Capacity" value="<?php 
          if(isset($_POST['cinema_seat_capacity'])){ 
            echo $_POST['cinema_seat_capacity']; } 
          ?>">
          <?php

              if(isset($err_cinemaseatcapacity)){

              echo $err_cinemaseatcapacity;

            }

          ?>
        </div>
        
        <div class="form-group" style="margin-top: 20px">
            <textarea class='form-control' name='cinema_other_details'  autocomplete="off" placeholder="fill in  more details"></textarea>
        </div>
             
        <div class="form-group" style="margin-top: 20px">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <?php

              if(isset($err_password)){

              echo $err_password;

            }

          ?>
        </div>
        

    <div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
        </div>        
        <div class="form-group">
      <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
    </div>
    <div class="form-group">
             <input type="submit" class='btn btn-success btn-sm' name='submit' id='submit' value='send'>
        </div>
    </form>
  <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
</div>

</body>

    
   <?php ob_end_flush(); ?>           
        
  <?php include('footer.php') ?>





























 


