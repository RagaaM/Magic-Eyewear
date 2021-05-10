<?php

	//header connection
	$path = $_SERVER['DOCUMENT_ROOT'];
   	$path .= "/MagicEyewear/Admin/Adminheader.php";
   	include ($path);

   	//database connection
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
		<div class="pd-ltr-20"><div > 
            
<div class="row">
  <div class="col-12 col-md-8"><h2>Add Products</h2></div>
  <div class="col-6 col-md-4"><div class="DivLink"><a class="Astyle" href="AddFunction.php">Add Products</a></div></div> 
</div>

			</div> 
			
<?php

$obj=new Database();
echo"<br>";
$obj->ViewProducts("frame");

?>
</div>
</div>


</body>
</html>
