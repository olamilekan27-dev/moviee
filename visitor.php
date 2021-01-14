

<?php include('header.php') ?>

<?php 
if (!session_id()) {
# code...
  session_start();
} 
include 'movieclass.php';
?>


<div id="slideshow">
 
    <img class="active" src="project6/story.jpg" alt="Slideshow Image 1"/>
    <img src="project6/tenet.jpeg" alt="Slideshow Image 2" />
    <img src="project6/banner1.jpg" alt="Slideshow Image 3" />
    
</div>


</div>





<div class='container-fluid' style='background-color: black; margin-top:'>



  
  <div id='man' class='col' style='height: 150px; text-align: center'>

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

              echo " <div class='container' style='margin-top: 40px'>


<div class='row' id='pro'>
  
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
  
  <form action='ticketProcessing.php' method='post' >
                <input type='hidden' name='movieId' value='".$row->movies_id."'>
                <input type='submit'  class='btn btn btn-xs btn-block' type='submit' style='background-color:purple' value='Details and Bookings' name='submit'>
  </form>

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










