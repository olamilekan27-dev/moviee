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
                                              
                                               <a class="nav-link" href="#success" style='color: purple; font-family:Verdana; margin-right:45px;  font-size: 15px;'>HOME<span class="sr-only">(current)</span></a>
                                         </li>
                          
                                         <li class="nav-item navv">
                                               
                                               <a class="nav-link" href="#pro" style='font-family:Verdana; margin-right:45px; font-size: 15px'>MOVIES</a>
                                                                             </li>
     

                                         <li class="nav-item">
                                              
                                               <a class="nav-link" href="cinema.html" style='font-family:Verdana; margin-right:45px; font-size: 15px'>CINEMA</a>
                                        

                                         </li>
                                          

                                           <li class="nav-item">
                                              
                                               <a class="nav-link" href="#bog" style='font-family:Verdana; margin-right:45px; font-size: 15px'>TICKET PRICES</a>
                                          </li>
     

                                         <li class="nav-item">
                                              
                                               <a class="nav-link" href="#for" style='font-family:Verdana; margin-right:45px; font-size: 15px'>SELF HELP</a>
                                          
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



<div class='container-fluid' style='background-color: black; min-height: 2000px'>


<div  class='row' style='height: 150px'>
  
  <div id='cog' class='col' style='height: 150px; text-align: center'>

    <button type="button" class='btn btn-dark' style=' margin-top: 5px; height: 120px; border: 4px solid purple'>
      
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

 <div class='container' style='margin-top: 40px'>

<div class='row'>

<div class='col-12 text-left p-2' style='background-color:purple'>
  
 <button class="btn btn-lg" style='margin-top: 5px; background-color: white; color: black;z-index: 10px' onclick="openCity('London')">Showing Now</button>

</div>
</div>
</div>
<div class='container'>

<div class='row bg-white text-left' style='border:1px solid purple'>


  <?php 

           $conn=new mysqli('localhost','root','','movieshowtimefounder');
          $res=$conn->query("select * from movies");
          while ($row=$res->fetch_object()) {

             echo "<div class='card col-sm-4' style='width: 18rem; margin-top:40px;'>
              <img src='moviephotos/".$row->picture."' class='card-img-top' alt='...' style='height:200px'>
              <div class='card-body'>
                <h4 class='çard-title'>".$row->movie_name ."</h4>
                <p class='card-text'><b>Director: </b>".$row->movie_director."</p>
                <p class='card-text'><b>Description: </b>".$row->movie_description."</p>
                
                </div>
                <div class='card-footer bg-white'>
                  <form action='ticketProcessing.php' method='post' >
                <input type='hidden' name='movieId' value='".$row->movies_id."'>
                <input type='submit'  class='btn btn-primary btn-xs btn-block' type='submit' value='Showtime and Details' name='submit'>
                </form>
                </div>
              </div>";
            }

?>
</div>
</div>
 </div>

    

  </div>

</div>










</div>

<?php include('footer.php') ?>







