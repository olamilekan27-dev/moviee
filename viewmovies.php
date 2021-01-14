<?php 

ob_start();

include('header.php');

     
include('movieclass.php');

$movie =new Movie;

?>



<table class="table table-striped">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Movie name</th>
        <th>Movie description</th>
        <th>Movie director</th>
        <th>movie year</th>
        <th>Picture</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php


					$columbia = 1;
					foreach($movie->getMovieAssoc() as $key => $value){

				?>
      <tr>
        <td><?php echo $columbia++; ?></td>
        <td><?php echo $value['movie_name'];?></td>
        <td><?php echo $value['movie_description'];?></td>
        <td><?php echo $value['movie_director'];?></td>
        <td><?php echo $value['movie_year'];?></td>
        <td><img src="moviephotos/<?php echo $value['picture'];?>" style="width: 150px; height: 150px"></td>
        <td>
        <a href="edit.php?id=<?php echo $value['movies_id'];?>">Edit details</a>
        <a href="">Delete</a>
        </td>
      </tr>
      <?php

					}
				?>
      
    </tbody>
  </table>