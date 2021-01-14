
<?php

session_start(); //

?>

<?php



    $connect=[];
    $conn=new mysqli('localhost','root','','movieshowtimefounder');

    $query="SELECT * FROM cinema";

    $qr=$conn->query($query);

    if($qr->num_rows > 0){
        while($row=$qr->fetch_assoc()){
            $connect[$row['cinema_id']]=$row['cinema_name'];
        }
    }

    //echo print_r($connect,1);





 $praise=[];
     $bonn= new mysqli('localhost','root','','movieshowtimefounder');
     $query ="SELECT * FROM movies";
    $sql=$bonn->query($query);

    if($sql->num_rows > 0){

       while ($row=$sql->fetch_assoc()) {

        $praise[$row['movies_id']]=$row['movie_name'];
      }
     }



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
                          

                          <a class="navbar-brand" href="#" style='color: purple; font-family:Verdana;margin-left:70px; font-size: 25px'>Movies Date</a>
                           

                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                           
                           </button>
                          
                          <div class="collapse navbar-collapse justify-content-center"  id="navbarNavDropdown">
                                   

                                    <ul class="navbar-nav">
                                        

                                         <li class="nav-item active">
                                              
                                               <a class="nav-link" href="index.php" style='color: purple; font-family:Verdana; margin-right:45px;  font-size: 15px;'>HOME<span class="sr-only">(current)</span></a>
                                         </li>
                          
                                         <li class="nav-item navv">
                                               
                                               <a class="nav-link" href="#mov" style='font-family:Verdana; margin-right:45px; font-size: 15px;color: purple'>MOVIES</a>
                                                                             </li>
     

                                         <li class="nav-item">
                                              
                                               <a class="nav-link" href="cinema.html" style='font-family:Verdana; margin-right:45px; font-size: 15px;color: purple'>CINEMA</a>
                                        

                                         </li>
                                          

                                           <li class="nav-item">
                                              
                                               <a class="nav-link" href="#bog" style='font-family:Verdana; margin-right:45px; font-size: 15px;color: purple'>TICKET PRICES</a>
                                          </li>
     

                                         <li class="nav-item">
                                              
                                               <a class="nav-link" href="#for" style='font-family:Verdana; margin-right:45px; font-size: 15px;color: purple'>SELF HELP</a>
                                          
                                          </li>

                                          

                                          <li class="nav-item">
                                              
                                               <a class="nav-link" href="#for" style='font-family:Verdana; margin-left:70px; font-size: 15px'><i class='fa fa-search' style='color:purple'></i>    SEARCH</a>
                                          
                                          </li>


                                           <li class="nav-item">
                                              
                                               <a class="nav-link" href="" style='font-family:Verdana; margin-right:45px; font-size: 15px;color: purple'>LOG IN</a>
                                          
                                          </li>
                                   </ul>
                     </div>
                 </nav>
         </div>
      </div>



