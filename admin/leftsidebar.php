
<?php


?>

    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="../project6/cinema.jpg" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
      <a href="cinemadashboard.php"><i class="fas fa-cogs"></i><span>Cinema</span></a>
      <a href="movielistdashboard.php"><i class="fas fa-table"></i><span>Movies</span></a>
      <a href="showtimedashboard.php"><i class="fas fa-th"></i><span>Show Timings</span></a>
      <a href="../localhost/movie/index.php"><i class="fas fa-info-circle"></i><span>Home page</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Users</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Booking</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Update Password</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="../project6/cinema.jpg" class="profile_image" alt="">
        <h4> <?php

         echo $_SESSION['adminname']; ?></h4>
      </div>
      <a href="cinemadashboard.php"><i class="fas fa-cogs"></i><span>Cinema</span></a>
      <a href="movielistdashboard.php"><i class="fas fa-table"></i><span>Movies</span></a>
      <a href="showtimedashboard.php"><i class="fas fa-th"></i><span>Show Timings</span></a>
      <a href="../localhost/movie/index.php"><i class="fas fa-info-circle"></i><span>Home page</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Users</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Booking</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Update Password</span></a>
    </div>
    <!--sidebar end-->