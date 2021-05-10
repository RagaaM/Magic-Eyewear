<?php include "../../Menu/menu.php" ?>
<!DOCTYPE html>
<html>
<title>Product</title>
<head>
    <link rel="stylesheet" href="../../Products/Product/SingleProductPage.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script defer src="https://friconix.com/cdn/friconix.js"> </script>

  <title>Cart</title>
</head>
<body>
  <div class="container bootstrap snippet" style="margin:auto;">
  <div class="container0">

    <div class="labels">
      <div class="row">

        <div class="column left" >
           <br><br><br>
             <img src="../../Products/Images/Glasses1.png" alt="" class="productImage" style="width:400px;
             height:400px;
             border-radius: 5px;
             padding-left: 10px;
             border-style:solid;
             border-width: thin;
             ">
        </div>
            <div class="column right" style="padding-left:50px;" >
              <br><br><br>
              <h3 style="font-family: Tahoma, Verdana, Segoe, sans-serif;
              font-weight: bold;
              color: #032443;
              font-size:40px;
              " >Armani Exchange</h3>
              <p class="productPrice" style="font-style:italic;">Model: 5242/S</p>

              <p style="font-weight:bold;">Description:</p>
              <br><br><br><br><br><br>
              <form class="" action="../../Products/Product/TryOnPage.php" method="post">
                <input type="submit" name="tryOn" class="try-on" value="Try-On" style="width:500px;height:50px;
                font-size: 25px;
                border-radius: 8px;
                ">
              </form>

            <form class="" action="../../Cart/cart.php" method="post">
              <input type="submit" name="addToCart"  value="Add To Cart" style="width:500px;height:50px;
              background-color: #1C2645;
              color: white;
              font-size: 25px;
              border-radius: 8px;
              ">
            </form>



            </div>

      </div>
    </div>


    <div class="container4">

      <div class="row">

        <div class="col-sm-4" >
          <br>
        </div>
            <div class="col-sm-4" >
              <br>
            </div>
            <div class="col-sm-3" >
            <br>
            </div>
      </div>
    </div>
  </div>
</div>
<br>
</body>
      <?php include "../../footer.php" ?>
</html>
