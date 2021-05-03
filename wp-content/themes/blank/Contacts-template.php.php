<?php
	/* Template Name: Contacts */
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<br>
<h2>Do you have any comment?</h2>
<p>Feel free to ask we are here to serve you.</p>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>We are here for you, always at your service:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="http://localhost/wordpress/wp-content/uploads/2021/05/Map.png" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Email</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="Australia">Australia</option>
          <option value="Canada">Canada</option>
          <option value="Afghanistan">Afghanistan</option>
          <option value="Belgium">Belgium</option>
          <option value="Cambodia">Cambodia</option>
          <option value="Denmark">Denmark</option>
          <option value="Egypt">Egypt</option>
          <option value="France">France</option>
          <option value="Germany">Germany</option>
          <option value="Hawaii">Hawaii</option>
          <option value="Israel">Israel</option>
          <option value="Japan">Japan</option>
          <option value="Korea">Korea</option>
          <option value="Libya">Libya</option>
          <option value="Mexico">Mexico</option>
          <option value="Nepal">Nepal</option>
          <option value="Oman">Oman</option>
          <option value="Philippines">Philippines</option>
          <option value="Qatar">Qatar</option>
          <option value="Russia">Russia</option>
          <option value="Singapore">Singapore</option>
          <option value="Turkey">Turkey</option>
          <option value="United Arab Emirates">United Arab Emirates</option>
          <option value="Venezuela">Venezuela</option>
          <option value="Württemberg">Württemberg</option>
          <option value="Yemen">Yemen</option>
          <option value="Zimbabwe">Zimbabwe</option>


        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>


