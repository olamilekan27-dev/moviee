
<?php 
if (!session_id()) {
# code...
  session_start();
} 
include 'movieclass.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>
    Cinemahouse
</title>


<meta name='keyword' content=' cinema in lagos, cinema in Nigeria, films Nigeria, movie show time'>
<meta name='description' content=' Find out what movies are currently showing, book movie tickets, watch trailers, and many more.'>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

<link href='css/bootstrap.css' type='text/css' rel='stylesheet'>
<link href='fontawesome/css/all.css' type='text/css' rel='stylesheet'>
<link href='style/frontend.css' type='text/css' rel='stylesheet'>
<link href='css/animate4.min.css' type='text/css' rel='stylesheet'>

<link href='css/bootstrap.css' type='text/css' rel='stylesheet'>
<link href='fontawesome/css/all.css' type='text/css' rel='stylesheet'>
<link href='css/animate4.min.css' type='text/css' rel='stylesheet'>
<link href='style/frontend.css' type='text/css' rel='stylesheet'>

<style type='text/css'>




</style>


 
<script src='js/jquery.min.js' type='text/javascript'></script>
<script src='js/popper.min.js' type='text/javascript'></script>
<script src='js/bootstrap.js' type='text/javascript'></script>




</head>


<body>

<div class='container-fluid' style='height: 620px; background-color: '>
  
<div class='row'>
          <div class="col">
              

              <nav class="navbar navbar-expand-lg">
                          

                          <a class="navbar-brand" href="#" style='color: white; font-family:Verdana;margin-left:70px; font-size: 25px'>Movies Date</a>
                           

                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                           
                           </button>
                          
                          <div class="collapse navbar-collapse justify-content-center"  id="navbarNavDropdown">
                                   

                                    <ul class="navbar-nav">
                                        

                                         <li class="nav-item active">
                                              
                                               <a class="nav-link" href="#" style='color: purple; font-family:Verdana; margin-right:45px;  font-size: 15px;'>HOME<span class="sr-only">(current)</span></a>
                                         </li>
                          
                                         <li class="nav-item navv">
                                               
                                               <a class="nav-link" href="#mov" style='font-family:Verdana; margin-right:45px; font-size: 15px'>MOVIES</a>
                                                                             </li>
     

                                         <li class="nav-item">
                                              
                                               <a class="nav-link" href="#go" style='font-family:Verdana; margin-right:45px; font-size: 15px'>CINEMA</a>
                                        

                                         </li>
                                          

                                           <li class="nav-item">
                                              
                                               <a class="nav-link" href="login.php" style='font-family:Verdana; margin-right:45px; font-size: 15px'>TICKET PRICES</a>
                                          </li>
     

                                         <li class="nav-item">
                                              
                                               <a class="nav-link" href="#" style='font-family:Verdana; margin-right:45px; font-size: 15px'>SELF HELP</a>
                                          
                                          </li>

                                          <li class="nav-item">
                                              
                                               <a class="nav-link" href="login.php" style='font-family:Verdana; margin-right:45px; font-size: 15px'>SIGN UP/LOGIN</a>
                                          </li>

                                          <li class="nav-item">
                                              
                                               <a class="nav-link" href="#for" style='font-family:Verdana; margin-left:70px; font-size: 15px'><i class='fa fa-search' style='color:purple'></i>    SEARCH</a>
                                          
                                          </li>
                                   </ul>
                     </div>
                 </nav>
         </div>
      </div>

<div id="slideshow">
 
    <img class="active" src="project6/Mulan1.jpg" alt="Slideshow Image 1"/>
    <img src="project6/tenet.jpeg" alt="Slideshow Image 2" />
    <img src="project6/banner1.jpg" alt="Slideshow Image 3" />
    
</div>

</div>



<div class='container-fluid' style='background-color: black;'>



  
  <div id='cog' class='col' style='height: 150px; text-align: center'>

    <button type="button" class='btn btn-dark' id='go' style=' margin-top: 5px; height: 120px; border: 4px solid purple'>
      
        <p>Choose your Prefered cinema</p>

        <select class='form-group showUser(this.value)' name="cinema_id" id='exam'>
       
      <option value="All Cinemas"  style='border: 0'>All Cinemas</option>

      <?php if(!empty($connect)){
                            foreach($connect as $id=>$name){
                                echo "<option value='$id'>$name</option>";
                            }
                        } 

                        ?>
      
    
    </select>


    </button>
  </div>

 <div class='container' style='margin-top: 40px'>

<div class='row'>

<div class='col-12 text-left p-2' style='background-color:purple'>
  
 <button class="btn btn-lg" style='margin-top: 5px; background-color: white; color: black;z-index: 10px' onclick="openCity('London')">Showing Now</button>

</div>
</div>
</div>


<div class='container'>




  <?php 

           $conn=new mysqli('localhost','root','','movieshowtimefounder');
          $res=$conn->query("select * from movies");

          while ($row=$res->fetch_object()) {
             // var_dump($row);exit();
              echo " <div class='container' style='margin-top: 40px'>


<div class='row' id='mov'>
  
<div class='col-md-2 col-12' style='height: 100px; text-align: right'>
  
<a href='' style='color: purple; text-decoration: none; font-size:25px; font-family: arial'><b></b></a>

</div>


<div class='col-md-2 col-12' style='margin-left: 10px; height: 150px;'>
  
  <img src='moviephotos/".$row->picture."' alt='' class='rounded' style='height:220px; width: 100%; margin-top:10px'>

</div>

<div class='col-md-7 col-12' style='height: 220px;'>

  

  <div>
  
<div style='height: 60px; width: 60%; margin-top: 10px'>


  <h3 href='' class='special-a' style='font-size: 30px; text-decoration: none; color: white; padding-top:0px'>".$row->movie_name ."</h3>
  
</div>

<div id='dad' style='float: right; height: 90px; width: 35%; margin-top: 10px; text-align: center;'>
  
  <form action='login.php' method='post'>
                <input type='hidden' name='movieId' value='".$row->movies_id."'>

                <input type='submit'  class='btn btn btn-xs btn-block' type='submit'  ' value='Details and Bookings' name='submit'>

</div>

</div>



<p style='color: #6B6865'>".$row->movie_description."</p>


<a href=''><i class='fa fa-play' style='color:purple'></i>  WATCH TRAILER</a>



</div>



</div>



</div> ";

            
            }

?>
</div>


    
<div><?php include('footer.php') ?></div>

</div>

















 