<!DOCTYPE html>

<html lang="en" dir="ltr">
<title>Cart</title>
<?php include "../Menu/menu.php" ?>
  <head>
      <link rel="stylesheet" href="../Cart/cart.css?v=<?php echo time(); ?>">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script defer src="https://friconix.com/cdn/friconix.js"> </script>

    <title>Cart</title>
  </head>
  <body>

    <div class="container bootstrap snippet" style="margin:auto;">
      <div class="row">

        <div class="col-sm-10">
            <br>
           <h2><i class="fi-xnsuxl-shopping-bag-solid"></i>Shopping Cart</h2>
        </div>
      </div>
      <div class="container0">

        <div class="labels">
          <div class="row">

            <div class="column left" >
               <br><br><br><br><br>
                 <img src="../Products/Images/Glasses1.png" alt="" class="productImage">
            </div>
                <div class="column middle" >
                  <br><br><br><br>
                  <h3>Armani Exchange</h3>
                  <br><br><p class="productPrice">Price: EGP</p>
                  <br>
                  <br><br><br><br><br> <input type="submit" name="remove" class="remove" value="Remove">
                  <i class="fi-xnsuxl-trash-bin"></i>

                </div>
                <div class="column right" >
                <br>
                <label for="qty">Quantity: </label>
                <select class="qty" name="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
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
<br>
      <div class="container0">

        <div class="labels">
          <div class="row">

            <div class="column left" >
               <br><br><br><br><br>
                 <img src="../Products/Images/Glasses2.png" alt="" class="productImage">
            </div>
                <div class="column middle" >
                  <br><br><br><br>
                  <h3>Ralph Lauren</h3>
                  <br><br><p class="productPrice">Price: EGP</p>
                  <br>
                  <br><br><br><br><br> <input type="submit" name="remove" class="remove" value="Remove">
                  <i class="fi-xnsuxl-trash-bin"></i>

                </div>
                <div class="column right" >
                <br>
                <label for="qty">Quantity: </label>
                <select class="qty" name="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
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

  </body>
  <?php include "../footer.php" ?>
</html>
