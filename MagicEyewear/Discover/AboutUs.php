<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/MagicEyewear/Menu/Menu.php";
   include ($path);
?>
<!DOCTYPE html>
<html>
<style>
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900);


header {
  background:
    linear-gradient(
      rgba(0, 0, 0, 0.5),
      rgba(0, 0, 0, 0.5)
    ),
    url(background-glasses.jpg);
  background-size: cover;
  height: 100vh;
}

.title {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  text-align: center;
}
h1 {
  font-family: 'Source Sans Pro', sans-serif;

  text-transform: uppercase;
  margin: 0;
  font-size: 3rem;
  white-space: nowrap;
}
h2 {
  font-family: 'Source Sans Pro', sans-serif;

  font-size: 2rem;
}
p {  font-family: 'Source Sans Pro', sans-serif;

  margin: 0;
  font-size: 1.3rem;

}

main {
  font-family: 'Source Sans Pro', sans-serif;

  text-align:center;
  column-count: 2;
	column-gap:10px;
  margin: 40px;
}
</style>
<body>
  <header>
  <div class="title">
    <h1>Providing Solutions</h1>
    <p>Not Just Frames!</p>
  </div>
</header>
<main>
  <h2>Our Mission</h2>
  <p>We aim to provide our customers with an easy and affordable shopping experience.</p>
  <h2>Our Vision</h2>
  <p>We hope to expand our branches to reach more individuals looking for high-quality, inexpensive glasses </p>
</main>
</body>
</html>
