<?php

	//header connection
	$path = $_SERVER['DOCUMENT_ROOT'];
   	$path .= "/MagicEyewear/Adminheader.php";
   	include ($path);

   	//database connection
   	$path2 = $_SERVER['DOCUMENT_ROOT'];
   	$path2 .= "/MagicEyewear/database/DatabaseConnection.php";
   	include ($path2);

 ?>
 <html>
<head>

<title> Add  </title>

</head>
<body>

<div class="main-container">
<div class="pd-ltr-20"><div > 
<div class="row">
  <div class="col"><h2>Add Products</h2></div> 
</div>
<div class="row">
<form action="post">
<br>  Frame Code: <input type="text" name="FrameCode" >
<br> <br>   Brand Name: <input type="text" name="Bname">
<br> <br>  Size: <input type="text" name="size">
<br> <br>  Color: <input type="text" name="color">
<br> <br>  Rim: <input type="text" name="rim">
<br> <br>  Feature: <input type="text" name="feature">
<br> <br>  Material: <input type="text" name="material">
<br> <br>  Gender: <input type="text" name="gender">
<br> <br>  Category: <input type="text" name="category">


  </form>
</div>

</div>


</body>

</html>
