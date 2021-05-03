<?php
	/* Template Name: Home */
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;

}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo">Nicks Cabinet</a>
  <div class="header-right">
    <a href="home">Home</a>
    <a href="http://localhost/wordpress/index.php/about/">About</a>
    <a href="http://localhost/wordpress/?page_id=23">Shop</a>
    <a href="http://localhost/wordpress/product/">Product</a>
    <a href="http://localhost/wordpress/cart-2/">Cart</a>
    <a href="http://localhost/wordpress/checkout-2/">Checkout</a>
    <a href="http://localhost/wordpress/contact/">Contact</a>

  </div>
</div>
<style>
body, html {
  height: 100%;
  margin: 0;
}



.bg {
  /* The image used */
  background-image: url("img_girl.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<div style="padding-left:20px">

  <h1><center>WELCOME TO THE WORLD OF NICKS CABINET</center></h1>
</div>

<div class="container">
  <img src="http://localhost/wordpress/wp-content/uploads/2021/05/GettyImages-1209101210.jpg" alt="Snow" style="width:100%;">

  <h3><div class="centered">The world class quality of Nick's Cabinet comes to Cavite, bringing chic,<br>  ergonomic, contemporary kitchen design. Nick's Cabinet level of excellence<br>in quality and design conceptsconsistently raises the bar in the kitchen design<br>industry, setting a new standard of creativity, quality, and beauty.</div></h3>
</div>


<!DOCTYPE html>
<html>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

.column img {
  margin-top: 12px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<body>

<!-- Header -->
<div class="header">
  <h1>Our Work and Customer Customized</h1>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
 
  <img src="http://localhost/wordpress/wp-content/uploads/2021/05/1-Livingroom.jpg" style="width:100%">
  <img src="http://localhost/wordpress/wp-content/uploads/2021/05/10-Bedroom.jpg" style="width:100%">
  <img src="http://localhost/wordpress/wp-content/uploads/2021/05/20-Kitchen.jpg" style="width:100%">
  <img src="http://localhost/wordpress/wp-content/uploads/2021/05/30-Garage.jpg" style="width:100%">
  <img src="http://localhost/wordpress/wp-content/uploads/2021/05/70-Bathroom.jpg" style="width:100%">
</div>

  <div class="column">
  <img src="http://localhost/wordpress/wp-content/uploads/2021/05/90-Gate.jpg" style="width:100%">
  <img src="http://localhost/wordpress/wp-content/uploads/2021/05/100-Terrace.jpg" style="width:100%">
  <img src="http://localhost/wordpress/wp-content/uploads/2021/05/50-Windows.jpg" style="width:100%">
  <img src="http://localhost/wordpress/wp-content/uploads/2021/05/60-Tables.jpg" style="width:100%">
  <img src="http://localhost/wordpress/wp-content/uploads/2021/05/80-Wardrobe.jpg" style="width:100%">

  </div>  

</div>

</body>
</html>

</head>
<body>
<br>


<style>
.container {
  position: relative;
  text-align: center;
  color: white;
}

.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}

.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
</head>
<body>

<center><h1><p>OUR COMMITMENT</p></h1>

<div class="container">
  <img src="http://localhost/wordpress/wp-content/uploads/2021/05/CarpenterProfileCover-1536x864-1.jpg" alt="Snow" style="width:100%;">

  <h3><div class="centered">We are committed to upholding our most cherished values<br>in every project and task we take on.</div></h3>
</div>
</body>
</html>


<?php get_footer(); ?>