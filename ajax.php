<!DOCTYPE html>
<html>
	
<head>
	
<title>
	
</title>

<meta name="keyword" content="">

<meta name="desc ription" content="">

<meta charset="utf-8">


<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

<link href='css/bootstrap.css' type='text/css' rel='stylesheet'>
<link href='fontawesome/css/all.css' type='text/css' rel='stylesheet'>
<link href='css/animate4.min.css' type='text/css' rel='stylesheet'>

<style type='text/css'>

 
</style>

<script src='js/jquery.min.js' type='text/javascript'></script>
<script src='js/popper.min.js' type='text/javascript'></script>
<script src='js/bootstrap.js' type='text/javascript'></script>



</head>

<body>

<div class="container pt-5 mt-5">
  
<div class='row'>

  <div class="col-6">This is a column<p><button class='btn btn-primary'

    id="loader">Load Content</button></p>

  </div>

<div class='col-6' id ="loaded-content"></div>

</div>

</div>  



<script src='js/jquery.min.js' type='text/javascript'>

</script>
<script type='text/javascript' language=' javascript'>

$("#loader").click(function(){

  
  $("#loaded-content").load('info.php',function(){
  alert("welcome");
  
  });
});

</script>


</body>





</html>




