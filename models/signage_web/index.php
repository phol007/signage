<!Doctype>
<html>
<head>

	<title>index</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script>
		$(document).ready(function() {
// Create two variables with names of months and days of the week in the array
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

// Create an object newDate()
var newDate = new Date();
// Retrieve the current date from the Date object
newDate.setDate(newDate.getDate());
// At the output of the day, date, month and year    
$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

setInterval( function() {
    // Create an object newDate () and extract the second of the current time
    var seconds = new Date().getSeconds();
    // Add a leading zero to the value of seconds
    $("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
    },1000);
    
setInterval( function() {
    // Create an object newDate () and extract the minutes of the current time
    var minutes = new Date().getMinutes();
    // Add a leading zero to the minutes
    $("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
    
setInterval( function() {
    // Create an object newDate () and extract the clock from the current time
    var hours = new Date().getHours();
    // Add a leading zero to the value of hours
    $("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);
    
}); 
	</script>
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>

<body>
<!-- =========================================== HEADER =================================================== -->
<div class="navbar navbar-fixed-top">
 <div class="container-fluid">
   <div class="navbar-header">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
     </button>     
    <a href="setting.php"><img src="images/logo.jpeg" width="150"></a>
 </div>      
 </div>
</div>
<div id='header'></div>
<!-- ========================================================================================================= -->


<div id='navmenu' >

	<div class='time'>

		<div class="clock">
		    <div id="Date"></div>
			    <ul>
			        <li id="hours"></li>
			        <li id="point">:</li>
			        <li id="min"></li>
			        <li id="point">:</li>
			        <li id="sec"></li>
			    </ul>
			</div>
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

	</div>

	<div class='pic'>
		<img src="images/1.jpg" width='90%' height='90' class="img-rounded" alt="Cinque Terre" data-slide-to="0" class="active" data-target="#myCarousel">
	</div>

	<div class='pic'>
		<img src="images/2.jpg" width='90%' height='90' class="img-rounded" alt="Cinque Terre"  data-slide-to="1" data-target="#myCarousel">
	</div>

	<div class='pic'>
		<img src="images/3.jpg" width='90%' height='90' class="img-rounded" alt="Cinque Terre"  data-slide-to="2" data-target="#myCarousel">
	</div>

	<div class='pic'>
		<img src="images/4.jpg" width='90%' height='90' class="img-rounded" alt="Cinque Terre"  data-slide-to="3" data-target="#myCarousel">
	</div> 

	<div class='pic'>
		<img src="images/5.jpg" width='90%' height='90' class="img-rounded" alt="Cinque Terre"  data-slide-to="4" data-target="#myCarousel">
	</div>
</div>

<div id='picslide'>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/1.jpg" width='100%' >
      </div>

      <div class="item">
        <img src="images/2.jpg" width='100%' >
      </div>
    
      <div class="item">
        <img src="images/3.jpg" width='100%' >
      </div>

      <div class="item">
        <img src="images/4.jpg" width='100%' >
      </div>

      <div class="item">
        <img src="images/5.jpg" width='100%' >
      </div>

    </div>


  </div>
</div>

<div id='footer'>
<marquee>************Test text*****************************</marquee>
</div>

</body>
</html>
<script>
    $(document).ready(function(){
      $('.slider').slick({
       		dots: true, // Add Dots to Bottom of Slide
			    autoplay: true, // Makes Slide Auto-Slide
          autoplaySpeed: 5000, // Controls Speed of Autoplay Slides
			
      });
    });

</script>