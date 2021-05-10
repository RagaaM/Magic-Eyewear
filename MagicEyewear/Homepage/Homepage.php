<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/MagicEyewear/Menu/Menu.php";
   include ($path);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="/MagicEyewear/Layout/homepage-style.css">
</head>
<body>

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
    <h3>We Sell Solutions Not Products</h3>
  </div>
    </div>
 <!-- second slide -->
    <div class="carousel-item">
      <img class="d-block w-100" src="/MagicEyewear/images/vto2.gif" alt="Second slide">
	  <div class="carousel-caption d-none d-md-block">
	  <h3>Meet Our Virtual Mirror</h3>
	  <h5> First Virtual Try-On Software in Egypt! </h5>
  </div>
    </div>
 <!-- third slide -->
    <div class="carousel-item">
      <img class="d-block w-100" src="/MagicEyewear/images/faceshapes.jpg" alt="Third slide">
	  <div class="carousel-caption d-none d-md-block">
	  <h3>Discover the Best Eyewear for Your Face Shape</h3>
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
<h2> Shop By Age Group </h2>

<div style="clear: both">
    <h3 style="float: left">Adults</h3>
    <h3 style="float: right">Kids</h3>
</div>


<br>
<br>

<!--
<div class="col1">
  <img src="/MagicEyewear/images/women.jpg" alt="women" style="width:50%">
  <button class="btn">Button</button>
</div>
<div class="col1">
  <img src="/MagicEyewear/images/girls.jpg" alt="girls" style="width:50%">
  <button class="btn">Button</button>
</div>


<div class="col1">
  <img src="/MagicEyewear/images/men.jpg" alt="men" style="width:50%">
  <button class="btn">Button</button>
</div>
<div class="col1">
  <img src="/MagicEyewear/images/boys.jpg" alt="boys" style="width:50%">
  <button class="btn">Button</button>
</div> 
-->


<div class="btn_group">	
  <button class="btn-change" id="women" style=" width:50%; height:250px">Women</button>
  <button class="btn-change" id="girls" style="width:50%; height:250px">Girls</button>
</div>
<div class="btn_group">	
  <button class="btn-change" id="men" style=" width:50%; height:250px">Men</button>
  <button class="btn-change" id="boys" style="width:50%; height:250px">Boys</button>
</div>

<!--
<div class="row1" style="clear:both;">
<div class = "box1">
         <img src = "/MagicEyewear/images/women.jpg" style=" width:50%" alt = "women">
         <button class = "btn">women</button>
      </div>
	  <div class = "box2">
         <img src = "/MagicEyewear/images/women.jpg" style=" width:50%" alt = "women">
         <button class = "btn">women</button>
      </div>
</div>

<div class="row2">

	  <div class = "box3">
         <img src = "/MagicEyewear/images/women.jpg" style=" width:50%" alt = "women">
         <button class = "btn">women</button>
      </div>
	  <div class = "box4">
         <img src = "/MagicEyewear/images/women.jpg" style=" width:50%" alt = "women">
         <button class = "btn">women</button>
      </div>
	  </div>
-->





<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/MagicEyewear/footer.php";
   include ($path);
?>


</body>
</html>
