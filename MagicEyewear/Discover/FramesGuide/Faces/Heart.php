<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/MagicEyewear/Menu/Menu.php";
   include ($path);
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="/MagicEyewear/Layout/guide.css?v=<?php echo time(); ?>">

</head>
<body>

<h3 class="m_2">So Your Face is Heart-Shaped, Now What?</h3>

<div class="polaroid">
  <div class="features">
    <h4 style="column-span: 1;">Heart-Shaped Face Features</h4>
      <p>Broad forehead</p>
      <p>High and defined cheekbones</p>
      <p>Small chin</p>
    <h4 style="column-span: 1;">Recommended Frame Characteristics</h4>
      <p>A little wider than the forehead</p>
      <p>Have an exaggerated browline</p>
  </div>
  <div class="frame-recommendation">
      <h3 style="padding-top:23px;">Frame Style Recommendation:</h3>
      <p style="font-size:20px;">Cat-Eye</p><br>
      <button class="shop_btn_frame_rec"><span>Show Me!</span></button>
  </div>
  <img src="FacesPics/Heart-Shape.png" alt="heart-shaped">
  <div class="containerP">
    <p>Heart-Shaped Face</p>
  </div>
</div>

</body>
</html>
