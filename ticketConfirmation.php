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
	$date=$_POST['date'];
	$time=$_POST['timeSlot'];
	$theater=$_POST['cinema'];
	$ticket=$_POST['ticket'];

	


	


$sql= "INSERT INTO showorder (showorder_id,date,timeslot,cinema,movie_name,ticket,seat)
VALUES ('','".$date."','". $time. "','".$theater."','".$movieName."','".$ticket."',".'50'.");"


?>






<div class='container'>
	<div class="card mb-3" style="max-width: 540px; margin:auto">
  <div class="card-body" style="background-color: #D9EDF7">
    <?php 


							//$_SESSION['movieId']="";

						echo "".$movieName;
						?>
  </div>


	<div class="card mb-3" style="max-width: 540px; margin:auto">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img alt="User Pic" src=<?php echo '"moviephotos/'.$row->picture.'"';?> class=" img-responsive card-img">
    </div>
    <div class="col-md-8">
    	
      <div class="card-body">
      	<form action="payment2.php" method="post" >
        <table class="table table-user-information">

        			<tbody>

									<tr>
										<td><strong>Date </strong></td>
										<td><?php echo "".$date ?> </td>
									</tr>
									<tr>
										<td><strong>Movie Name </strong></td>
										<td><?php echo "".$row->movie_name;?> </td>
									</tr>
									<tr>
										<td><strong>Time </strong></td>
										<td><?php echo "". $_POST['timeSlot']?> </td>
									</tr>
									<tr>
										<td><strong>Cinema name</strong></td>
										<td><?php echo "". $_POST['cinema']?> </td>
										
									</tr>
									<tr>
										<td><strong>Ticket Price </strong></td>
										<td><?php echo "". $_POST['ticket']?></td>
									</tr>


							<td colspan="2" width="100%">


												<button class="btn btn-primary btn-xs btn-block" type="submit" name="submit" value=""><a href="payment2.php">CONFIRM TICKET</a></button>
											</td>

						</tbody>

					</form>

					</table>
      </div>
    </div>
  </div>
</div>
</div>

</div>


