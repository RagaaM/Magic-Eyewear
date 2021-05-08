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
<!DOCTYPE html>
<html>
<head>




<title> Add Products </title>


<style>

.view{
Background-color:#1899eb;
color:white;
Border-radius:10px; 
width:80px;
}
.add{
width:350px;
color:white;
background-color:#101a3b;	
}

.DivLink{
	width:350px;
	color:white;
	border-radius:10px;
	background-color:#101a3b;	
	text-decoration:none;
	position:absolute;
	
}
.Astyle{
	color:white;
	text-decoration:none;
  padding-left: 120px;
}

</style>

</head>

<body>


<div class="main-container">
		<div class="pd-ltr-20"><div > 
            
<div class="row">
  <div class="col-12 col-md-8"><h2>Add Products</h2></div>
  <div class="col-6 col-md-4"><div class="DivLink"><a class="Astyle" href="AddFun.php">Add Products</a></div></div>
</div>

			</div> 
			
<table class="table">
												
  <thead>
    <tr>
      <th >ID</th>
      <th >BrandName</th>
      <th >Code</th>
      <th >Size</th>
	  <th >Color</th>

	  <th >Rim</th>
      <th >Face shape</th>
      <th >Gender</th>
      <th >Category</th>
	  <th >Description</th>
	  <th >Image</th>
	  
	  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th >1</th>
      <td>RayBan</td>
      <td>RB0PSUN</td>
      <td>20</td>
	  <td>red</td>

	  <th>Full Rim</th>
	  <td>For Round face</td>
      <td>Men</td>
      <td>Sunglasses</td>
      <td>description</td>
	  <td><input class="view" type="submit" value="View"></button></td>
	  
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>RayBan Sports</td>
      <td>RBSPR</td>
      <td>20</td>
	  <td>black</td>

	  <th>Full Rim</th>
	  <td>For Oval face</td>
      <td>Women</td>
      <td>Sports</td>
      <td>description</td>
	  <td><input class="view" type="submit" value="View"></button></td>
	  

    </tr>
	<tr>
      <th scope="row">3</th>
      <td>New Balance</td>
      <td>NB2EYE</td>
      <td>20</td>
	  <td>white</td>

	  <th>Semi Rimless</th>
	  <td>For Rectangle face</td>
      <td>Men</td>
      <td>Eyeglasses</td>
      <td>description</td>
	  <td><input class="view" type="submit" value="View"></button></td>
	  
    </tr>
  </tbody>
</table>

</div>
</div>


</body>
</html>
