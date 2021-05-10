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
            <div > <h1>View Orders</h1> </div> 
			<table class="table">
  <thead>
    <tr>
      <th scope="col">Client Id</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Product id</th>
	  <th scope="col">Product name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Samia walid</td>
      <td>01123516448</td>
      <td>RB0PSUN</td>
	  <td>RayBan Sunglasses</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Omar Gamal</td>
      <td>01123111448</td>
      <td>NB2EYE</td>
	  <td>New Balance Eyeglasses</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Ramy Farid </td>
      <td>01003171948</td>
	  <td>RBSPR</td>
	  <td>RayBan Sports</td>
    </tr>
  </tbody>
</table>

</div>
</div>


</body>
</html>
