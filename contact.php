<html>
<head>
<title>Contact</title>
 <link href="contactstyle.css" rel="stylesheet" type="text/css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="https://fonts.googleapis.com/css?family=Niconne|Montserrat|Podkova|Oleo+Script+Swash+Caps|Pacifico|Prosto+One|Handlee|Sacramento|Tangerine:700|Source+Code+Pro:300" rel="stylesheet">
 </head>
<body>
<header>

<div id="navbar">
  <a class="active" href="">Contact Us</a>
  <a href="javascript:void(0)">About</a>
  <a href="javascript:void(0)">Team</a>
  <a href="reservations.php">Reservations</a>
  <a href="index.php">Home</a>
   
</div>
<div id="map"></div>
<div class="headings">
<div style=" margin-top:-35px; font-size:60px; color:#FFEFD5; font-weight:500; margin-left:450px;">Get To Us</div>
<br>Address:<br>
</div>
<div class="sub">
Fresh Eats, 607, 25th ST,<br>
Asthalakshmi Nagar, Alapakkam,<br>
Porur, Chennai-600116.
</div>
<div class="headings" style="margin-top:30px;">Call us at:</div>
<div class="sub"> +919087340306</div>
<div class="headings" style="margin-top:30px;">Email us:</div>
<div class="sub"> headmanager@fresheats.in</div>

<div class="social">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-pinterest"></a>


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
      function initMap() {
        var uluru = {lat: 13.047604, lng: 80.166691};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src=
"https://maps.googleapis.com/maps/api/js?key=
AIzaSyB2bXKNDezDf6YNVc-SauobynNHPo4RJb8&callback=initMap">
    </script>
</body>

</html>