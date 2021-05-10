<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/MagicEyewear/Menu/Menu.php";
   include ($path);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
-->


	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
	<link href="maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="code.jquery.com/jquery-1.11.1.min.js"></script>
<style>

.btn_group{
	display: flex;
	
}
.btn-change{
    
    background: lightseagreen;
    margin: 20px;
    float: left;
    box-shadow: 0 0 1px #ccc;
    -webkit-transition: all 0.5s ease-in-out;
    border: 0px;
    color: #fff;
}
.btn-change:hover{
    -webkit-transform: scale(1.1);
    background: #31708f;
}
</style>
</head>
<body>
<h1>Homepage</h1>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <!-- first slide -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/MagicEyewear/images/DIVA rosa.jpg" alt="First slide">
	  <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
    </div>
 <!-- second slide -->
    <div class="carousel-item">
      <img class="d-block w-100" src="/MagicEyewear/images/vto2.gif" alt="Second slide">
	  <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
    </div>
 <!-- third slide -->
    <div class="carousel-item">
      <img class="d-block w-100" src="/MagicEyewear/images/faceshapes.jpg" alt="Third slide">
	  <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
    </div>

  </div>


  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<br>

<div class="btn_group">	
  <button class="btn-change" style=" width:50%; height:250px">Women</button>
  <button class="btn-change" style="width:50%; height:250px">Men</button>
</div>
<div class="btn_group">	
  <button class="btn-change" style=" width:50%; height:250px">Kids</button>
  <button class="btn-change" style="width:50%; height:250px">Guide</button>
</div>



<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/MagicEyewear/footer.php";
   include ($path);
?>


</body>
</html>
