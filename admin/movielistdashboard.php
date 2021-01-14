<?php

include('adminheader.php');


$movie =new Movie;

?>


<?php include('leftsidebar.php') ?>

 <div class="content"style="background:#F3EFEE;height: 2500px">
      <div class='container-fluid'>
      <div class="row">
        <div class="col-md-6">
          
          <Span style="font-size: 30px">Movie List</Span>
          
        </div>

        <div class="col-md-6" style="text-align: right; margin-top: 20px">
          <a href="dashboard.html"><i class="fas fa-home"></i> <span style="color: black">Home</span></a><br>

        </div>

      </div>

      <div class="container" style="background-color: white; margin-top: 10px">

         <div class="row mb-3">
      
        <div class="col-md-6">
          
          <Span style="font-size: 20px">Movie List</Span>
          
        </div>

        <div class="col-md-6 button" style="text-align: right; margin-top: 20px">
         
          <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal"><a href="../addmovie.php">Add Movies</a></button>
    </div>
  </div>
    
    
     
      
    </div>
  </div>
  

        


  <table class="table table-striped">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Movie Name</th>
        <th>Movie Description</th>
        <th>Movie Director</th>
        <th>Movie Year</th>
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
         <td><img src="../moviephotos/<?php echo $value['picture'];?>" style="width: 150px; height: 150px"></td>
        <td>
        <a href="../edit.php?id=<?php echo $value['movies_id'];?>">Edit details</a>
        <a href="">Delete</a>
        </td>
      </tr>
          <?php

           }
           ?>
     </tbody>
  </table>


  <br><br>

  <div style='text-align: right;'>
   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Delete Selected</button>
 </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
                
                
                
            </div>

          </div>

        </div>

  <?php include('adminscript.php') ?>