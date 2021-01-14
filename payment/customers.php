
<?php
Include_once("db.php");
$sql ="SELECT * FROM payment";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$ebooks =$stmt->fetchall();
?>


<!DOCTYPE html>
<html>
<head>
  <title>
    Customers
  </title>


<meta name='keyword' content=' cinema in lagos, cinema in Nigeria, films Nigeria, movie show time'>
<meta name='description' content=' Find out what movies are currently showing, book movie tickets, watch trailers, and many more.'>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

<link href='css/bootstrap.css' type='text/css' rel='stylesheet'>
<link href='fontawesome/css/all.css' type='text/css' rel='stylesheet'>
<link href='css/animate4.min.css' type='text/css' rel='stylesheet'>
<link href='stop/style.css' type='text/css' rel='stylesheet'>




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

<h2>My Custoners</h2>

<table class="table table-striped">

	<tr>

		<th>First name</th>
		<th>last name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Price</th>
		<th>Product Name</th>
		<th>Reference</th>
	<tr>
<?php foreach($ebooks as $ebook): ?>
<tr>

	<td><?= $ebook->first_name; ?></td>
	<td><?= $ebook->last_name; ?></td>
	<td><?= $ebook->email; ?></td>
	<td><?= $ebook->phone; ?></td>
	<td><?= $ebook->price; ?></td>
	<td><?= $ebook->product_name; ?></td>
	<td><?= $ebook->reference; ?></td>
</tr>

<?php endforeach; ?>


</Table>
</div>



      

<script src='js/jquery.min.js' type='text/javascript'>

</script>
<script type='text/javascript' language=' javascript'>

 




</script>

</body>


</html>



