<?php 

ob_start();

include('header2.php');

     
include('movieclass.php');



$logerr =array();





if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit']=='sign in'){

		$Username = $_POST['Username'];
		$password = $_POST['pswd'];


		//is variable email empty we are asking here, so we make use of an associative array
		//validate email field

		if(empty($Username)){

			//to check if this input really contains email if not display the error below

			$logerr['Username'] = "<div class='text-danger'>Username field is required!</div>";

			//if what we have here is not username display this error message below
		}



//validate password field

		if (empty($password)){

			$logerr['pswd'] = "<div class='text-danger'>Password field is required!</div>";

		}else if(strlen($password) < 6){

			$logerr['pswd'] = "<div class='text-danger'>our password is less than minimum number of 6 characters!</div>";
		}


//check if there is no any validation error
		if(count($logerr) == 0){

			// create object of authentication class

			$obj = new authentication;

			if($_POST['usertype']=='user'){

				$output =$obj->login($Username, $password);

			}elseif ($_POST['usertype']=='cinema') {
				
				$output =$obj->logincinema($Username, $password);

			}elseif ($_POST['usertype']=='admin') {

				$output =$obj->loginadmin($Username, $password);



		}



}

}


?>
<body style="background-image:url(project6/bg.jpg);background-repeat: no-repeat;background-size:cover; ">

	

<div class="wrapper" style='margin-top: 40px'>
  <div class="title">
  	<div style='font-size: 25; color: #511730'><?php echo !empty($_GET['msg'])?$_GET['msg']:''; ?></div> 
    <h1>Login form</h1>
  </div>
  <div class="Contact-form">
    <div class="input-fields">
	<?php

		if(isset($output)){

			echo $output;
		}

	?>

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
              
        <div class="form-group">


            <input type="text" class="input" name="Username" placeholder="Username">
        </div>

        <?php
        	if(isset($logerr['Username'])){
        		echo $logerr['Username'];
        	}

        ?>
        <div class="form-group">
            <input type="password" class="input" name="pswd" placeholder="Password">
        </div>
        <?php
        	if(isset($logerr['pswd'])){
        		echo $logerr['pswd'];
        	}

        ?>

        Select user type:<select name="usertype" class="input">
       <option value="user">User</option>

       <option value="cinema">Cinema</option>

         <option value="admin">Admin</option>
              
        </select>
       
    
            <input type="submit"  class="btn" id="login"  name="submit" value="sign in">

         <p>Sign up as:</p>

         <a class="btn btn-primary" href="regg-form.php" role="button">User</a>

	<a class="btn btn-primary" href="cinemareg-form.php" role="button">Cinema</a>
        
               
    </form>
  
</div>

</div>

</div>


<?php ob_end_flush(); ?>


