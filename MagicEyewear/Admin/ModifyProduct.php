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
<!DOCTYPE html>
<html>
<head>


<title> Add Products </title>

</head>

<body>


<div class="main-container">
		<div class="pd-ltr-20">
            <div > 
			
			<div class="row">
  <div class="col-sm-8"> </div>
  <div class="col-sm-3"></div>
</div>
<div class="row">
  <div class="col-12 col-md-8"><h2>Modify Products</h2></div>
  <div class="col-6 col-md-4"><div class="DivLink"><a class="Astyle" href="modifyfun.php">Modify Products</a></div></div>
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
    <td><input type="checkbox" name="name1" ></td>
	  
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
    <td><input type="checkbox" name="name1" ></td>

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
    <td><input type="checkbox" name="name1" ></td>

    </tr>
  </tbody>
</table>

</div>
</div>


</body>
</html>

