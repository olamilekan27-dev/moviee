
<?php 

include 'movieclass.php';

include('header2.php');
?>

<?php


	$movieId=$_SESSION['movieId'];
	$_SESSION['movieId']=$movieId;



	$conn=new mysqli('localhost','root','','movieshowtimefounder');
	$movieIdentity=$conn->query("select * from movies where movies_id=$movieId;");

	$row=$movieIdentity->fetch_object();



	$movieName=$row->movie_name;
	
	



?>

<!DOCTYPE html>
<html>
<head>
  <title>
    payment
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

<div class='container">
<img src='src=<?php echo '"moviephotos/'.$row->picture.'"';?>'>

<label>Price</label>
<input type="text" name="price" value=1500>




<form action="payy.php" method="POST">


<label>Movie name</label>
<input type="text" name="movie_name" value="<?php echo "".$row->movie_name;?>" ...">


<label>First name</label>
<input type="text" name="first_name" placeholder="First Name....">



<label>Last Name</label>
<input type="text" name="last_name" placeholder="Last Name....">


<label>Email</label>
<input type="email" name="email" placeholder="Email....">


<label>Phone Number</label>
<input type="tel" name="phone" placeholder="Phone Number..">


<label>Cinema Name</label>
<select name="cinema" class="boxStyle" style="width:150px"> 
<?php 
$conn=new mysqli('localhost','root','','movieshowtimefounder');
$resourse=$conn->query("select cinema_name from cinema"); 
while ($cinema=$resourse->fetch_object()) {

echo " <option value='".$cinema->cinema_name."'>". $cinema->cinema_name."</option>";} ?>
</select> 
<button name="sub">Pay</button>
</form>
</div>




      

<script src='js/jquery.min.js' type='text/javascript'>

</script>
<script type='text/javascript' language=' javascript'>

 




</script>

</body>


</html>



