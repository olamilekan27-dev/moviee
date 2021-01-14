<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold" style="margin-top: 40px; font-size: 30px; color: white">Movies Date</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p style="color: #6B6865">© 2020 Movies Date Website.
          All rights reserved.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold" style="color: white">COMPANY</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!" style="color: #6B6865">About Us</a>
        </p>
        <p>
          <a href="#!" style="color: #6B6865">Cinema</a>
        </p>
        <p>
          <a href="#!" style="color: #6B6865">Ticket Prices</a>
        </p>
        <p>
          <a href="#!" style="color: #6B6865">Experiences</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold" style="color: white">TERMS & CONDITIONS</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!" style="color: #6B6865">General</a>
        </p>
        <p>
          <a href="#!" style="color: #6B6865">Ticket Sales</a>
        </p>
        <p>
          <a href="#!" style="color: #6B6865">Online Booking</a>
        </p>
        <p>
          <a href="#!" style="color: #6B6865">MoviesDate Club</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold"  style="color: white">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
           <a href="#!" style="color: #6B6865">Self Help</a>
        <p>
          <a href="#!" style="color: #6B6865">Contact Us</a>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  

</footer>
<!-- Footer -->


  
</div>



			

<script src='js/jquery.min.js' type='text/javascript'>

</script>
<script type='text/javascript' language=' javascript'>

 function slideSwitch() {
    var $active = $('#slideshow IMG.active');
  
    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');
  
    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');
  
    // uncomment the 3 lines below to pull the images in random order
  
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );
  
    $active.addClass('last-active');
  
    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}
  
$(function() {
    setInterval( "slideSwitch()", 5000 );
});


$('#def').mouseover(function(){

  $('#hah').show();


})

$('#def').mouseout(function(){

  $('#hah').hide();

})


$('#pep').mouseover(function(){

  $('#man').show();


})

$('#pep').mouseout(function(){

  $('#man').hide();

})

$('#dad').mouseover(function(){

  $('#yet').show();


})

$('#dad').mouseout(function(){

  $('#yet').hide();


})


$('#last').mouseover(function(){

  $('#best').show();


})



$('#last').mouseout(function(){

  $('#best').hide();


})


function showmovie(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","index.php?q="+str,true);
    xmlhttp.send();
  }
}



function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(London).style.display = "block";
}


function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}


</script>

</body>


</html>