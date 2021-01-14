
<?php
Include_once("dbb.php");

session_start();

if (!$_GET['successfullypaid']){

	header("Location: ../payment2.php");
}else{

	$reference = $_GET["successfullypaid"];
}


$first_name = $_SESSION["first_name"];

$last_name = $_SESSION["last_name"];

$phone = $_SESSION["phone"];

$email = $_SESSION["email"];

$amount = $_SESSION["amount"];

$movie_name = $_SESSION['movie_name'];

$cinema =$_SESSION['cinema'];

//insert into the data base
$sql = "INSERT INTO payment (first_name,last_name,phone,email,movie_name,cinema_name,price,reference)

VALUES(:first_name, :last_name, :phone, :email, :movie_name, :cinema, :amount, :reference)";

if($stmt = $pdo->prepare($sql)){
//Bind parameter

	$stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);

	$stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);

	$stmt->bindParam(':phone', $phone, PDO::PARAM_STR);

	$stmt->bindParam(':email', $email, PDO::PARAM_STR);

	$stmt->bindParam(':movie_name', $movie_name, PDO::PARAM_STR);

	$stmt->bindParam(':cinema', $cinema, PDO::PARAM_STR);

	$stmt->bindParam(':amount', $amount, PDO::PARAM_STR);

	$stmt->bindParam(':reference', $reference, PDO::PARAM_STR);

	//attempt to execute

	if($stmt->execute()){

		echo"<script>alert('Your payment was successfull!')</script>";
		//prevent resubmission

		session_unset();
		session_destroy();
	}else{

		die('Sorry, something went wrong!');
	}

	unset($stmt);
	//close connection to database

	unset($pdo);

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

table{

	border-collapse: collapse;
	width: 100%;
	border: 2px solid red;
}

th,td{

	text-align: left;
	padding: 8px;
}

tr:nth child(even){

	background: #f2f2f2;

}

th{
	background:#4caf50;
	color: #fff;
}
</style>


 
<script src='js/jquery.min.js' type='text/javascript'></script>
<script src='js/popper.min.js' type='text/javascript'></script>
<script src='js/bootstrap.js' type='text/javascript'></script>




</head>

<body>

<div class="container">

<h2>Success, your payment went through, you can make more booking for different movies here</h2>

<table class="table table-striped">

	<tr>

		<th> Summary </th>
	<tr>

<tr>

	<td>First Name : <?php echo $first_name; ?></td>
</tr>

<tr>

	<td>Last Name : <?php echo $last_name; ?></td>
</tr>

<tr>

	<td>Email : <?php echo $email; ?></td>
</tr>

<tr>

	<td>Phone : <?php echo $phone; ?></td>
</tr>

<tr>

	<td>price : <?php echo $amount; ?></td>
</tr>

<tr>

	<td>movie Name :<?php echo $movie_name; ?></td>
</tr>

<tr>

	<td>cinema Name :<?php echo $cinema; ?></td>
</tr>


<tr>

	<td>Reference code :<?php echo $reference; ?></td>
</tr>

<tr>

	<td><a href="#">Make Another Booking</a></td>
</tr>


</Table>
</div>



      

<script src='js/jquery.min.js' type='text/javascript'>

</script>
<script type='text/javascript' language=' javascript'>

 




</script>

</body>


</html>



