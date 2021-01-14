<?php 

ob_start();

include('adminheader.php');

$movieshowtime =new movieshowtime;

?>

<?php include('leftsidebar.php') ?>

<div class="content"style="background:#F3EFEE;height: 2500px">
      

  <table class="table table-striped">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Cinema name</th>
        <th>Movie Name</th>
        <th>Show Start Date</th>
        <th>Show End date</th>
        <th>Weekdays</th>
        <th>Weekend</th>
        <th>Bluckbluster</th>
        <th>3D Movies</th>
        <th>Action</th>
      </tr>
    </thead>
    
    <tbody>
      <?php


          $columbia = 1;
          foreach($movieshowtime->getMovieshowingAssoc() as $key => $value){
            

        ?>
      <tr>
        <td><?php echo $columbia++; ?></td>
      
        <td><?php echo $value['cinema_name'];?></td>
        <td><?php echo $value['movie_name'];?></td>
        <td><?php echo $value['show_start_date'];?></td>
        <td><?php echo $value['show_end_date'];?></td>
        <td><?php echo $value['weekdays'];?></td>
        <td><?php echo $value['weekend'];?></td>
        <td><?php echo $value['bluckbluster'];?></td>
        <td><?php echo $value['movies3d'];?></td>
        <td>
        <a href="edit.php?id=<?php echo $value['movie_showing_id'];?>">Edit details</a>
        <a href="">Delete</a>
        </td>
      </tr>
      <?php

          }
        ?>
     </tbody>
  </table>

  

        </div>

  <?php include('adminscript.php') ?>