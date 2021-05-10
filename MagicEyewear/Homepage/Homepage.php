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

<!-- Slider -->
<div class="banner">
	<!-- start slider -->
       <div id="fwslider">
         <div class="slider_container">
            <div class="slide">
                <!-- Slide image -->
               <img src="/MagicEyewear/rayban2.jpg" class="img-responsive" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                	<!--
                    <div class="slide_content_wrap">
                         Text title 
                        <h1 class="title">Run Over<br>Everything</h1>
                        <!- /Text title 
                        <div class="button"><a href="#">See Details</a></div>
                    </div>
                -->
                </div>
               <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
               <img src="/MagicEyewear/123.jpg" class="img-responsive" alt=""/>
             <!--   < <div class="slide_content">
                   <div class="slide_content_wrap">
                        <h1 class="title"><br>Everything</h1>
                       	<div class="button"><a href="#">See Details</a></div>
                    </div>
                </div>
            </div>
            <!-/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
       </div>
       
      </div>
<!--/slider -->
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
