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
      <h2> Choose Your Face Shape And We Will Tell You Which Glasses You Should Get</h2>
      <div class="face-shapes">
        <!-- First Row -->
          <div class="face-overlay">
            <div class=""
            <img src="/MagicEyewear/Discover/FramesGuide/Faces/FacesPics/Diamond-Shape.png" alt="diamond shape"/>
          </div>
          <div class="face-overlay">
            <img src="/MagicEyewear/Discover/FramesGuide/Faces/FacesPics/Heart-Shape.png" alt="heart shape"/>
          </div>
          <div class="face-overlay">
            <img src="/MagicEyewear/Discover/FramesGuide/Faces/FacesPics/Oval-Shape.png" alt="oval shape"/>
          </div>

        <!-- Second Row -->
        <div class="face-overlay">
          <img src="/MagicEyewear/Discover/FramesGuide/Faces/FacesPics/Round-Shape.png" alt="round shape"/>
        </div>
        <div class="face-overlay">
          <img src="/MagicEyewear/Discover/FramesGuide/Faces/FacesPics/Square-Shape.png" alt="square shape"/>
        </div>
        <div class="face-overlay">
          <img src="/MagicEyewear/Discover/FramesGuide/Faces/FacesPics/Triangle-Shape.png" alt="triangular shape"/>
        </div>

      </div>

</body>
</html>
