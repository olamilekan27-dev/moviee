<?php 

ob_start();

include('header.php');

     
include('movieclass.php');

?>

<?php

if ($_SERVER['REQUEST_METHOD']=='POST' && $_POST['submit']=='send') {
    $errors = array();

          $customer_firstname=$_POST['customer_firstname'];
          $customer_lastname=$_POST['customer_lastname'];
          $username=$_POST['username'];
          $password=$_POST['password'];
        

  // validate firstname
    if(empty($_POST['customer_firstname'])){
      $err_firstname = "<div class='err'>Firstname field cannot be empty</div>";
      $errors[] = $err_firstname;
  }else if (!preg_match("/^[a-zA-Z-' ]*$/",$customer_firstname)) {
      $err_firstname = "<div class='err'>Only letters and white space allowed</div>";
       $errors[] = $err_firstname;
    }
  

  // validate lastname

    if (empty($_POST['customer_lastname'])){

        $err_lastname = "<div class='err'>Lastname field cannot be empty</div>";
        $errors[] = $err_lastname;
    }else if (!preg_match("/^[a-zA-Z-' ]*$/",$customer_lastname)) {
      $err_lastname = "<div class='err'>Only letters and white space allowed</div>";
       $errors[] = $err_lastname;
    }
  

// validate username

    if (empty($_POST['username'])){

        $err_username = "<div class='err'>username field cannot be empty</div>";
        $errors[] = $err_username;
    }else if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
      $err_username = "<div class='err'>Only letters and white space allowed</div>";
       $errors[] = $err_username;
    }
  


    // validate email
    global $err_emailaddress;
    if(empty($_POST['emailaddress'])){
       $err_emailaddress = "<div class='err'>Email Address field cannot be empty</div>";
      $errors[] = $err_emailaddress;
    }else if(!filter_var($_POST['emailaddress'], FILTER_VALIDATE_EMAIL)){       

      $errors[] = $err_emailaddress;
    }

    if (empty($_POST["gender"])) {

    $err_gender = "<div class='err'>Gender field cannot be empty</div>";
     $errors[] = $err_gender; 
  }


    if(empty($_POST['customer_phone_number'])){
      $err_phone = "<div class='err'>Phone number is required</div>";
      $errors[] = $err_phone;
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
               
             
        $customer=new authentication;
         
//md5 here encript our password 
$customer_id=$customer->register($_POST['customer_firstname'],$_POST['customer_lastname'],$_POST['username'],$_POST['emailaddress'],$_POST['gender'],$_POST['customer_phone_number'],md5($_POST['password']));


           header('Location:login.php?msg=successfully registered, pls log in');

          

  }


}


?>

<div class="signup-form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <h2>Register</h2>
    <p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
          <?php

    if(isset($error)){


      foreach ($error as $key => $value) {
        
          echo $value;

      }


    }



  ?>
      <div class="row">
        <div class="col"><input type="text" class="form-control" name="customer_firstname" autocomplete="off" placeholder="First Name" value="<?php 
          if(isset($_POST['customer_firstname'])){ 
            echo $_POST['customer_firstname']; } 
          ?>"></div>
          <?php

              if(isset($err_firstname)){

              echo $err_firstname;

            }

          ?>
        <div class="col"><input type="text" class="form-control" name="customer_lastname" autocomplete="off" placeholder="Last Name" value="<?php 
          if(isset($_POST['customer_lastname'])){ 
            echo $_POST['customer_lastname']; } 
          ?>"></div>
          <?php

            if(isset($err_lastname)){

            echo $err_lastname;

            }


          ?>
      </div>
      <br> 
        <div class="form-group">
          <input type="text" class="form-control" name="username" autocomplete="off" placeholder="Username" value="<?php 
          if(isset($_POST['username'])){ 
            echo $_POST['username']; } 
          ?>">
        </div> 
            <?php

            if(isset($err_username)){

            echo $err_username;

              }


              ?>                                                                                                                                                                                                                                                    

            
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="emailaddress" autocomplete="off" placeholder="Email Address" value="<?php 
          if(isset($_POST['emailaddress'])){ 
            echo $_POST['emailaddress']; } 
          ?>">
        </div>

        <?php

            if(isset($err_emailaddress)){

            echo $err_emailaddress;

              }


              ?>    

       

        Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
 <br><br>

           <?php

            if(isset($err_gender)){

            echo $err_gender;

            }


          ?>
  
        
        <div class="form-group">
          <input type="number" class="form-control" name="customer_phone_number" autocomplete="off" placeholder="Phone number" value="<?php 
          if(isset($_POST['customer_phone_number'])){ 
            echo $_POST['customer_phone_number']; } 
          ?>">
        </div>

        <?php

            if(isset($err_phone)){

            echo $err_phone;

            }


          ?>



    <div class="form-group" style="margin-top: 20px">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <?php

            if(isset($err_password)){

            echo $err_password;

            }


          ?>


    <div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
        </div>        
        <div class="form-group">
      <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
    </div>
    <input type="submit" class='btn btn-success btn-sm' name='submit' id='submit' value='send'>

    </form>
  <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
</div>

</body>


 <?php ob_end_flush(); ?>
             
        






























 

