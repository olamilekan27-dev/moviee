<?php

$amount= 150000;

//sanwish form inputs from users

$sanitizer = filter_var_array($_POST, FILTER_SANITIZE_STRING);

//Collect user's inputs from the form regular variable
$first_name = $sanitizer['first_name'];
$last_name =  $sanitizer['last_name'];
$phone = $sanitizer['phone'];
$email = $sanitizer['email'];

$movie_name = "Movie ticket";
$cinema = $sanitizer['cinema'];
$email = $sanitizer['email'];
//Make sure all fields are filled in

if(empty($first_name) || empty($last_name) || empty($phone) || empty($email) || empty($cinema)){

  header("Location: ../payment2.php?error");

}else{

  session_start();
  $_SESSION['first_name']=$first_name;
 $_SESSION['last_name']=$last_name;
 $_SESSION['phone']=$phone;
 $_SESSION['email']=$email;
  $_SESSION['movie_name']=$movie_name;
 $_SESSION['cinema']=$cinema;
 $_SESSION['amount']=$amount;



}


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
<link href='css/animate4.min.css' type='text/css' rel='stylesheet'>
<link href='payment/stop/style.css' type='text/css' rel='stylesheet'>




<style type='text/css'>


</style>


 
<script src='js/jquery.min.js' type='text/javascript'></script>
<script src='js/popper.min.js' type='text/javascript'></script>
<script src='js/bootstrap.js' type='text/javascript'></script>




</head>

<body>

<div class="container">

	<h1>Hi, <?php echo $email; ?></h1>

	<form >
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <button type="button" class='btn btn btn-xs btn-block' style='background-color:purple' onclick="payWithPaystack()"> Pay </button> 
</form>
 
<script>
  function payWithPaystack(){
    const api= "pk_test_c1f794a6c4f1315dec2d55e892f73f797cfd3740";
    var handler = PaystackPop.setup({
      key: api,
      email: '<?php echo $email; ?>',
      amount: '<?php echo $amount; ?>',
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // 
      firstname: '<?php echo $first_name; ?>',
      lastname: "<?php echo $last_name; ?>",
      
      metadata: {
         custom_fields: [
            {
                display_name: "<?php echo $first_name; ?>",
                variable_name: "<?php echo $last_name; ?>",
                value: "<?php echo $phone; ?>",
            }
         ]
      },
      callback: function(response){
          const referenced = response.reference;
          window.location.href='success2.php?successfullypaid='+referenced;
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>
	
</div>


 



</body>


</html>



