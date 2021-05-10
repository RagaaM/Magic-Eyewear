<?php

	//header connection
	$path = $_SERVER['DOCUMENT_ROOT'];
   	$path .= "/MagicEyewear/Admin/Adminheader.php";
   	include ($path);

	 //Admin database connection
	 $path2 = $_SERVER['DOCUMENT_ROOT'];
	 $path2 .= "/MagicEyewear/Admin/database/Admindb.php";
	 include ($path2);

 ?>
 <html>
<head>

<title> Add  </title>

<?php  

 $obj = new Database();  
 
 if(isset($_POST["Submit"]))  
 {  
      $insert_data = array(  
           'FrameCode'     =>     mysqli_real_escape_string($obj->conn, $_POST["FrameCode"]),  
           'BrandName'          =>     mysqli_real_escape_string($obj->conn, $_POST["Bname"]),
		   'Size'          =>     mysqli_real_escape_string($obj->conn, $_POST["size"]),
		   'color'          =>     mysqli_real_escape_string($obj->conn, $_POST["color"]), 
		   'Rim'          =>     mysqli_real_escape_string($obj->conn, $_POST["rim"]),
		   'Feature'          =>     mysqli_real_escape_string($obj->conn, $_POST["feature"]),  
		   'Material'          =>     mysqli_real_escape_string($obj->conn, $_POST["material"]),  
		   'Gender'          =>     mysqli_real_escape_string($obj->conn, $_POST["gender"]),
		   'Category'          =>     mysqli_real_escape_string($obj->conn, $_POST["category"]),  
		   'Description'          =>     mysqli_real_escape_string($obj->conn, $_POST["desc"])
      );  
          
 } 

 ?> 

</head>
<body>

<div class="main-container">

<div class="row">
  <div class="col"><h2>Add Products</h2></div> 
</div>
<div class="row">
<form method="post">
<br>  Frame Code: <input class="text" type="text" name="FrameCode" >
<br> <br>   Brand Name: <input class="text" type="text" name="Bname">
<br> <br>  Size: <input class="text" type="text" name="size">
<br> <br>  Color: <input class="text" type="text" name="color">
<br> <br>  Rim: <input class="text" type="text" name="rim">
<br> <br>  Feature: <input class="text" type="text" name="feature">
<br> <br>  Material: <input class="text" type="text" name="material">
<br> <br>  Gender: <input class="text" type="text" name="gender">
<br> <br>  Category: <input class="text" type="text" name="category">
<br> <br>  description: <input class="text" type="text" name="desc">
<br> <br> <input class="formBtn" style="width:150px;" type="Submit" name="Submit" > 
<!--<br> <br><prev>
<?php //print_r($_POST); ?>
</prev> -->

  </form>
</div>


</div>


</body>

</html>
