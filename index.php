<html>
<head>
    <title>Fresh Eats</title>
    <link href="index.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Aladin|Montserrat|Oleo+Script+Swash+Caps|Pacifico|Prosto+One|Share|Source+Code+Pro:300" rel="stylesheet">
</head> 
<body>
  <header>
<div id="navbar">
  <a href="contact.php">Contact Us</a>
  <a href="javascript:void(0)">About</a>
  <a href="javascript:void(0)">Team</a>
  <a href="reservations.php">Reservations</a>
  <a class="active" href="javascript:void(0)">Home</a>
  
  
</div>
<div class="hero">
	<div class="div1">
	<div class="cname">
	 Fresh Eats
	 </div>
	 <div class="cuisine">
	 LOCAL CUISINE
	 </div>
		<div class="button">
		
			<a href="reservations.php" class="link" >
				Make Reservations
			</a>
		</div>
</div>
</div>
  </header>
<script>
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