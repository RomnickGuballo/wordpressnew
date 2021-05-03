<?php
	/* Template Name: Abouts */
	get_header();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>We have designed cabinets with care & love, basing on our long-term experience in building your dream cabinet for</p>
  <p>different households and businesses. Nick's Cabinet provides you with almost everything you could imagine,</p>
  <p>side cabinet, hanging cabinet, multi-purpose cabinets, living room cabinet, glass cabinet, etc..</p>
  <p>Just message us, and we will do our work just to serve you.</p>
</div>

<h1 style="text-align:center">Our Team</h1>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="http://localhost/wordpress/wp-content/uploads/2021/05/About-Nick.jpg" alt="Nick" style="width:100%">
      <div class="container">
        <center><h2>Romnick "Nick" Guballo</h2>
        <p class="title">Master Cabinet Carpenter</p>
        <p>I'm the one who works and design this system.</p>
        <p>romnickguballo@gmail.com</p></center>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="http://localhost/wordpress/wp-content/uploads/2021/05/About-Ambo.jpg" alt="Ambo" style="width:100%">
      <div class="container">
        <center><h2>Adrian Paolo "Bhobo" Ambo</h2>
        <p class="title">Web designer</p>
        <p>I'm the Best Web designer, I'm the mastermind.</p>
        <p>adrianpaoloambo@gmail.com</p></center>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="http://localhost/wordpress/wp-content/uploads/2021/05/About-Joshua.jpg" alt="Joshy" style="width:100%">
      <div class="container">
        <center><h2>John Joshua "Bhie" Aquilino</h2>
        <p class="title">Gamer</p>
        <p>I love to play "Valorant" and I love my Bhie.</p>
        <p>johnjoshuaaqulino@gmail.com</p></center>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<?php get_footer(); ?>