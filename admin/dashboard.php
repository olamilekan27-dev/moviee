<?php

include('adminheader.php');

?>


<?php include('leftsidebar.php') ?>

 <div class="content"style="background:#F3EFEE" >
      <div class='container-fluid'>
      <div class="row">
        <div class="col-md-6">
          
          <Span style="font-size: 30px">Dashboard</Span>
          <a href="#"><span>Control panel</span></a>


        </div>

        <div class="col-md-6" style="text-align: right; margin-top: 20px">
          <a href="dashboard.html"><i class="fas fa-home"></i> <span style="color: black">Home</span></a><br>

        </div>

      </div>

      <div class="container" style="background-color: white">

      <div class="row mb-3">
                <div class="col-xl-3 col-sm-6 py-2" id=''>
                    <div class="card bg-success text-white h-100">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-user fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Users</h6>
                            <h1 class="display-4">134</h1>
                            <div style="text-align: center;">
                              <a href="#" class="card-link" style='color: white'>Moreinfo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Cinema</h6>
                            <h1 class="display-4">4</h1>
                            <div style="text-align: center;">
                              <a href="#" class="card-link" style='color: white'>Moreinfo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-info h-100">
                        <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-twitter fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Movies</h6>
                            <h1 class="display-4">125</h1>
                            <div style="text-align: center;">
                              <a href="#" class="card-link" style='color: white'>Moreinfo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-warning h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Bookings</h6>
                            <h1 class="display-4">36</h1>
                            <div style="text-align: center;">
                              <a href="#" class="card-link" style='color: white'>Moreinfo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>

          </div>
      
    </div>


  <?php include('adminscript.php') ?>