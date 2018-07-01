<html>
<head>
    <title>Reservation</title>
    <link href="resstyle.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lobster+Two|Oleo+Script+Swash+Caps|Pacifico|Prosto+One|Rochester|Rokkitt:300|Source+Code+Pro:300|Ubuntu" rel="stylesheet">
</head> 
<body>
  
<div id="navbar">
  <a href="contact.php">Contact Us</a>
  <a href="javascript:void(0)">About</a>
  <a href="javascript:void(0)">Team</a>
  <a class="active" href="reservations.php">Reservations</a>
  <a href="index.php">Home</a>
   
</div>
<div class="parallax">
<div class="cname">
Reservations
</div>
<div class="book">
BOOK A TABLE
</div>

<header>
<div class="hero">
<div class="reserv" >
Make Reservations
</div>
<form action="form.php" method="post">
  <div class="data">
  Date: <input id="date" name="resdate" type="date" >
  <div style="margin-top:-35px; margin-left:300px;">Session:
  <select name="session">
    <option value="7:00AM">7:00AM - 8:00AM</option>
	<option value="8:00AM">8:00AM - 9:00AM</option>
    <option value="9:00AM">9:00AM - 10:00AM</option>
    <option value="10:00AM">10:00AM - 11:00AM</option>
	<option value="11:00AM">11:00AM - 12:00PM</option>
	<option value="12:00PM">12:00PM - 13:30PM</option>
    <option value=":13:30PM">13:30PM - 15:00PM</option>
    <option value="15:00PM">15:00PM - 16:30:PM</option>
    <option value="18:00PMM">18:00PM - 20:00PM</option>
	<option value="20:00PM">20:00PM - 22:00PM</option>
    <option value="22:00am">22:00PM - 23:00PM</option>
  </select>
  </div>
  
 <div style="margin-top:-39px; margin-left:740px;">
  Table Number:<select name="tableno">
    <option value="1">T-01</option>
	<option value="2">T-02</option>
    <option value="3">T-03</option>
    <option value="4">T-04</option>
	<option value="5">T-05</option>
	<option value="6">T-06</option>
    <option value="7">T-07</option>
    <option value="8">T-08</option>
    <option value="9">T-09</option>
	<option value="10">T-10</option>
    <option value="11">T-11</option>
	<option value="12">T-12</option>
    <option value="13">T-13</option>
    <option value="14">T-14</option>
	<option value="15">T-15</option>
	<option value="16">T-16</option>
    <option value="17">T-17</option>
    <option value="18">T-18</option>
    <option value="19">T-19</option>
	<option value="20">T-20</option>
	<option value="21">T-21</option>
	<option value="22">T-22</option>
    <option value="23">T-23</option>
    <option value="24">T-24</option>
	<option value="25">T-25</option>
	<option value="26">T-26</option>
    <option value="27">T-27</option>
    <option value="28">T-28</option>
    <option value="29">T-29</option>
	<option value="30">T-30</option>
  </select>
  </div>
 <img id="myImg" src="hotelview.png" alt="Table View" style="width:130px;max-width:200px">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<div style="position:static; margin-top:35px; margin-left:0px;" class="wrap"><input  name="firstname" type="text" placeholder="First Name"></div>
<div style="position:static; margin-top:-58px; margin-left:550px;" class="wrap"><input  name="lastname" type="text" placeholder="Last Name"></div><br>
<div class="wrap" style="margin-left:0px;"><input  name="phoneno" type="text" placeholder="Mobile No."></div>
<div class="wrap" style="margin-top:-58px; margin-left:550px;"><input  name="emailid" type="text" placeholder="Email Id"></div>
 <div class="poss"id="redi" style="margin-left:30px;"><button name="viewButton">View Table Availability</button></div>
<div class="poss"id="redi" style="margin-top:-120px; margin-left:700px;"><button name="bookButton">Book Table</button></div><br><br>
  

</form>
</div>
</div>

</header> 
<?php
  if ( isset($_GET['status']) && $_GET['status'] == "fail" )
{
     // treat the succes case ex:
     echo "<p class='error'>**Sorry, The Table is already booked. Please choose another table to continue your Reservation.**</p>";
}
	else if(isset($_GET['status']) && $_GET['status'] == "pass")
	{
		echo "<p class='success'>Reservation done successfully.</p>";
	}

	?>
<script>
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>