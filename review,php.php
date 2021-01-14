<?php 
if (!session_id()) {
	session_start();
} 
include 'db.php';
include_once 'header.php'; 





?>
<!DOCTYPE html>
<html>
<head>
	<title>Ticket</title>
	<link rel="stylesheet" type="text/css" href="css/customerPanel.css">
	<link href="bootstrap/bootstrap.min.css" rel='stylesheet' type='text/css' />

	<style type="text/css">
		.boxStyle{width: 100%;
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

</head>
<body>

	<?php 
	$movieId=$_SESSION['movieId'];

	$movieIdentity=$conn->query("select * from movies where movieId=$movieId;");
	$row=$movieIdentity->fetch_object();







	$movieName=$row->movie_name;
	$date=$_POST['date'];
	$time=$_POST['timeSlot'];
	$theater=$_POST['cinema'];
	$ticket=$_POST['ticket'];
	
	
	$showorder="";//id of reducing seat
	$seatCount="";//seat counting


//Cheaking Date if it exist;
	$resourse=$conn->query("select date from showorder;");
	$dateExists=false;
	while ($rw=$resourse->fetch_object()) {
		if ($rw->date===$date) {
			$dateExists=true;
			break;
		}
	}


	$seatCount="";
//First input in database table
	if (!$dateExists) {
		$sql="INSERT INTO showorder(showorder_id,date,timeslot,cinema,movie_name,ticket,seat)  VALUES ('','".$date."','". $time. "','".$theater."','".$movieName."','". $ticket. "',".'50'.");";



		if ($conn->query($sql) === TRUE) {
			$result=$conn->query("select showorder_id from showorder where date='".$date."' and timeslot='".$time."' and cinema='".$theater."' and movie_name='".$movieName ."' and ticket='".$ticket."';");

			$r=$result->fetch_object();

			$showorder=$r->showorder_id;//we will use this id to reduce seat

			$result=$conn->query("select seat from showorder where showorder_id='".$showorder."';");
			
			$r=$result->fetch_object();

			$seatCount=$r->seat;
			
		}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

//There is an input in the date field
	//checking timeSlot
	else{
		$resourse=$conn->query("select timeslot from showorder where date='".$date."';");
		$timeExist=false;
		while ($rw=$resourse->fetch_object()) {
			if ($rw->timeslot===$time) {
				$timeExist=true;
				break;
			}
		}
		if (!$timeExist) {
			$sql="INSERT INTO showorder(showorder_id,date,timeslot,cinema,movie_name,ticket,seat)  VALUES ('','".$date."','". $time. "','".$theater."','".$movieName."','". $ticket. "',".'50'.");";




			if ($conn->query($sql) === TRUE) {
				$result=$conn->query("select showorder_id from showorder where date='".$date."' and timeslot='".$time."' and cinema='".$theater."' and movie_name='".$movieName ."' and ticket='".$ticket."';");

				$r=$result->fetch_object();

				$showorder=$r->showorder_id;//we will use this id to reduce seat

				$result=$conn->query("select seat from showorder where showorder_id='".$showorder."';");

				$r=$result->fetch_object();

				$seatCount=$r->seat;
			//echo "".$seatCount;
			}else{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}else{

//there is an input date anad timeSlot field
//theater Checking
			$resourse=$conn->query("select cinema from showorder where date='".$date."' and timeslot='".$time."';");
			$theaterExist=false;
			while ($rw=$resourse->fetch_object()) {
				if ($rw->theater===$theater) {
					$theaterExist=true;
					break;
				}
			}

			if (!$theaterExist) {
				$sql="INSERT INTO showorder(showorder_id,date,timeslot,cinema,movie_name,ticket,seat)  VALUES ('','".$date."','". $time. "','".$theater."','".$movieName."','". $ticket. "',".'50'.");";


				if ($conn->query($sql) === TRUE) {
					$result=$conn->query("select showOrder_id from showorder where date='".$date."' and timeslot='".$time."' and cinema='".$theater."' and movie_name='".$movieName ."'and ticket='".$ticket."' ;");

					$r=$result->fetch_object();

				$showorder=$r->showorder_id;//we will use this id to reduce seat

				$result=$conn->query("select seat from showorder where showorder_id='".$showorder."';");

				$r=$result->fetch_object();

				$seatCount=$r->seat;
			}

		}
		else{
// database e date time theater sob e ase , ekhon movie ase kina check korbo.

			$resourse=$conn->query("select movie_name from showorder where date='".$date."' and timeslot='".$time."' and cinema='".$theater."';");
			$movieExist=false;
			while ($rw=$resourse->fetch_object()) {
				if ($rw->movie_name===$movieName) {
					$movieExist=true;
					break;
				}
			}
			if (!$movieExist) {
				$sql="INSERT INTO showorder(showorder_id,date,timeslot,cinema,movie_name,ticket,seat)  VALUES ('','".$date."','". $time. "','".$theater."','".$movieName."','". $ticket. "',".'50'.");";


				if ($conn->query($sql) === TRUE) {
					$result=$conn->query("select showorder_id from showorder where date='".$date."' and timeslot='".$time."' and cinema='".$theater."' and movie_name='".$movieName ."' and ticket='".$ticket."' ;");

					$r=$result->fetch_object();

				$showorder=$r->showorder_id;//we will use this id to reduce seat

				$result=$conn->query("select seat from showorder where showorder_id='".$showorder."';");

				$r=$result->fetch_object();

				$seatCount=$r->seat;
			}
		}

		else{

//sob kichur input dewa ase,ekhon seat shudhu kombe
			$result=$conn->query("select showorder_id from showorder where date='".$date."' and timeslot='".$time."' and cinema='".$theater."';");

			$r=$result->fetch_object();

				$showorder=$r->showorder_id;//we will use this id to reduce seat

				$result=$conn->query("select seat from showorder where showorder_id='".$showorder."';");

				$r=$result->fetch_object();

				$seatCount=$r->seat;
			//echo "seat kombe";
			}
		}

	}
}


?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">
						<?php 


							//$_SESSION['movieId']="";

						echo "".$movieName;
						?>

					</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4 col-lg-4 " align="center">
							<img alt="User Pic" src=<?php echo '"uploadimages/'.$row->image.'"';?> class=" img-responsive"> 
						</div>
						<div class=" col-md-8 col-lg-8 "> 
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
									<form action="seatReducing.php" method="post">
										<input type="hidden" name="showorder_id" value=<?php echo '"'.$showorder.'"'; ?>>

										<input type="hidden" name="date" value=<?php echo '"'.$date.'"'; ?>>

										<input type="hidden" name="time" value=<?php echo '"'.$time.'"'; ?>>

										<input type="hidden" name="cinema" value=<?php echo '"'.$theater.'"'; ?>>

										<input type="hidden" name="seat" value=<?php echo '"'.$seatCount.'"'; ?>>

										<tr>
											<td colspan="2" width="100%">
												<input class="btn btn-primary btn-xs btn-block" type="submit" name="submit" value="Confirm Ticket">
											</td>
										</td>
									</form>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>

</html>
