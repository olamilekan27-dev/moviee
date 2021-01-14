<?php

include('adminheader.php');

?>


<?php include('leftsidebar.php') ?>

  <div class="content"style="background:#F3EFEE" >
      <div class='container-fluid'>
      <div class="row">
        <div class="col-md-6">
          
          <Span style="font-size: 30px">Cinema List</Span>
          
        </div>

        <div class="col-md-6" style="text-align: right; margin-top: 20px">
          <a href="dashboard.html"><i class="fas fa-home"></i> <span style="color: black">Home</span></a><br>

        </div>

      </div>

      <div class="container" style="background-color: white; margin-top: 10px">

         <div class="row mb-3">
      
        <div class="col-md-6">
          
          <Span style="font-size: 20px">Cinema List</Span>
          
        </div>

        <div class="col-md-6" style="text-align: right; margin-top: 20px">
          <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal"><a href="../selectmovie.php">Select Movies</a></button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
     
      
    </div>
  </div>

  <br><br>


   <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">Delete Movies</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
    
     
      
    </div>
  </div>
  

        </div>


  <table class="table table-striped">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Cinema Name</th>
        <th>Image</th>
        <th>Delete</th>
        <th>Modify</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>FilmHouse Dugbe</td>
        <td><div></div></td>
        <td><input type="checkbox" name=""></td>
        <td><a href="">Edit</a></td>
      </tr>
      <tr>
        <td>2</td>
        <td>FilmHouse Benin</td>
        <td><div></div></td>
        <td><input type="checkbox" name=""></td>
        <td><a href="">Edit</a></td>
      </tr>
      
    </tbody>
  </table>
                
                
                
            </div>

          </div>

          </div>
      
    </div>


  <?php include('adminscript.php') ?>