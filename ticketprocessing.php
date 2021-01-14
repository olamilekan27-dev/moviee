<?php 
     
include('movieclass.php');

include('header2.php');

?>



<div class='container' style='margin-top: 40px'>

<div class='row'>

<div class='col-12 text-left p-2' style='background-color:#D9EDF7'>
  
		<h3 class="panel-title">
							<?php 
//for time slot
							//$timeSlot=$conn->query("select time from timeslot");	

//movie details
							$movieId=$_POST['movieId'];

							echo("$movieId");
							$_SESSION['movieId']=$movieId;
							 $conn=new mysqli('localhost','root','','movieshowtimefounder');
							$res=$conn->query("select * from movies where movies_id=$movieId");
							$row=$res->fetch_object();
							

			 				echo "".$row->movie_name;?>
			</h3>


</div>
</div>
</div>

		


<div class='container'>

<div class='row bg-white text-left' style='border:1px solid #D9EDF7 '>
	<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src=<?php echo '"moviephotos/'.$row->picture.'"';?> class="card-img" alt="..." style='height: 300px'>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <table class="table table-user-information">
									<tbody>
										<tr>
											<td><strong>Movie Name </strong></td>
											<td><?php echo "".$row->movie_name;?> </td>
										</tr>
										
										<tr>
											<td><strong>Director</strong></td>
											<td><?php echo "".$row->movie_director;?> </td>
										</tr>
										<tr>
											<tr>
												<td><strong>Description</strong></td>
												<td><?php echo "".$row->movie_description;	?> </td>
											</tr>
										</tr>

										<form action="ticketConfirmation.php" method="post" >

												<tr>
													<td><strong>Date</strong></td>
													<td><input class="boxStyle" type="date" name="date"></td>
												</tr>
												<tr>

													<td><strong>Show Time</strong></td>
													<td>  <select name="timeSlot" class="boxStyle"> 
														<?php
														$conn=new mysqli('localhost','root','','movieshowtimefounder'); 
														$timeSlot=$conn->query("select time from timeslot"); 
														while ($showTime=$timeSlot->fetch_object()) {

															echo " <option value='".$showTime->time."'>". $showTime->time."</option>
															";
														} ?> 
													</select></td>
												</tr>
												<tr>
													<td><strong>Cinema</strong></td>
													<td>
														<select name="cinema" class="boxStyle"> 
															<?php 
															$conn=new mysqli('localhost','root','','movieshowtimefounder');
															$resourse=$conn->query("select cinema_name from cinema"); 
															while ($cinema=$resourse->fetch_object()) {

																echo " <option value='".$cinema->cinema_name."'>". $cinema->cinema_name."</option>
																";
															} ?>
															</select> 
														</td>
													</tr>
													<tr>
														<td><strong>Ticket</strong></td>
														<td>
															<select name="ticket" class="boxStyle">
															<?php 
															$conn=new mysqli('localhost','root','','movieshowtimefounder');
															$resourse=$conn->query("select ticket_name from ticket"); 
															while ($ticket=$resourse->fetch_object()) {

																echo " <option value='".$ticket->ticket_name."'>". $ticket->ticket_name."</option>
																";
															} ?>
														</select>
													</td>
													</tr>	
													<tr>									
														<td colspan="2" width="100%">
															<input class="btn btn-primary btn-xs btn-block" type="submit" name="submit" value="Request For Ticket">
														</td>
													</tr>
												</form>


									</tbody>
								</table>

      </div>
    </div>
  </div>
</div>



</div>
</div>




