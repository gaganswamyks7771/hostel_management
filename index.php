
<?php 

session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<body style="background: #ffe6cc">

<div class="header">
	<!--<h2>Home Page</h2>-->
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['email'])) : ?>
    	<!--<p>Welcome <strong></strong></p>-->
    	<!--<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>-->
    <?php endif ?>
</div>


 <!--<div> <h1 style=" font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:3vw;">WELCOME TO BOYS HOSTEL <span style="  color: rgb(46, 240, 46);"><?php echo  $_SESSION['email']; ?></span></h1>
</div>
<div>
<h4 style="font-size:2vw;">TOTAL NUMBER OF ROOMS IN HOSTEL ARE : 150</h4>
<h4 style="font-size:2vw;">TOTAL NUMBER OF ROOMS AVAIL  ARE : 50</h4>
</div>-->
<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="margin-left :200px;" class="navbar-brand" href="#">BOYS HOSTEL</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="index.php?logout='1'" style="color: red; background:white;height:35px; border-radius: 6%; margin-top:5px;  padding-top:5px;">LOGOUT</a><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      
    </ul>
  </div>
</nav>
<div>
<div class="sidenav">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
  <button class="dropdown-btn">Dropdown 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <a href="#contact">Search</a>
</div>

<div class="main">
  <h2 style="font-size:3vw;font-weight: 700;font-family:'fantasy','cursive','monospace';">WELCOME TO BOYS HOSTEL <span style="font-size:1vw;color:green"> <?php echo $_SESSION['email'];  ?></span></h2>
 <h3 style="font-family:CURSIVE">TOTAL NUMBER OF <b>ROOMS </b> IN HOSTEL ARE <b>100</b></h3>
 <h3 style="font-family:CURSIVE">TOTAL NUMBER OF <b>STUDENTS </b>  IN HOSTEL ARE <b>100</b></h3>
 
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
</div>
  
<div class="container-fluid">
        <br>
        <br>
    <div  style="background:black;margin-left:20%;width: 300px; height: 150px;
     border-radius: 50%;"><br>
        <h3 style="margin-left:23%; font-family: cursive;color:white;">MY PROFILE</h3>
        
        <div >
        <h4 Style=" font-family: cursive;color:black; border: solid black; border-radius: 50%;background:white;">FULL DETAILS ~></h4>

        </div>
        

    </div>
    <br>
    <div  style="background:black;margin-left:20%;width: 300px; height: 150px;
     border-radius: 50% ;  margin-left:50%; margin-top:-11%"><br>
        <h3 style="margin-left:23%; font-family: cursive;color:white;">MY ROOM</h3>

        <div >
        <h4 Style=" font-family: cursive;color:black; border: solid black; border-radius: 50%;background:white;">FULL DETAILS ~></h4>

        </div>

    </div>
    
 
</div>
</div>


		
</body>
</html>