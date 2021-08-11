<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDAz4w4QON-AzlKull2e7DoCNFo0OkooM4"></script>
    <link rel="stylesheet" href="login.css">
</head>
<body style="background-color: blueviolet;">
    <div class="container-fluid">
        <div id="div_id_navbar">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
                
                <ul class="navbar-nav  ">
                    <li class="nav-item color_hover">
                        <a class="nav-link" href="home_page.php">HOME   </a>
                    </li>
                  <li class="nav-item color_hover">
                    <a class="nav-link" href="aminites_page.php">AMINITIES   </a>
                  </li>
                  <li class="nav-item color_hover">
                    <a class="nav-link" href="contact_page.php">CONTACT    </a>
                  </li>
                  <li class="nav-item color_hover">
                    <a class="nav-link" href="feedback.php">FEEDBACK</a>
                  </li>
                  <li class="nav-item color_hover">
                    <a class="nav-link" href="#">LOGIN</a>
                  </li>
                  <li class="nav-item color_hover">
                    <a class="nav-link" href="signup.php">SIGN UP</a>
                  </li>
                </ul>
              </nav>
              <br>
              <br>
           </div>
          
           
          
           <div id="login_look" >
              <div id="hovrelook_image">
                
                <img id="img_sytle" src="login_image.jpg" alt="">
               </div>
            <h4 style="margin-left: 35%;padding-top: 5%; font-family: Georgia, 'Times New Roman', Times, serif;">USER LOGIN</h4>
            <form action="login.php" method="post">
               <?php include('errors.php'); ?>
         
                <label for="email"></label><input required name="email"  style="border-style: none;background-color:cyan;margin-top: 30px;margin-left: 80px;padding-left: 120px; padding-right: 80px;  padding-bottom: 20px;" type="email" placeholder="enter email">
                <hr style="width: 70%;margin-top: 5px; border-top: solid black;">
                <label for="password"></label><input required  name="password" style="border-style: none;background-color: cyan;margin-top: 30px;margin-left: 80px;padding-left: 120px; padding-right: 80px;  padding-bottom: 20px;" type="password" placeholder="enter password">
                <hr style="width: 70%;margin-top: 5px; border-top: solid black;">
                <button name="login_user" type="submit" id="sub">SUBMIT</button>
                
  	           	<h5 style="margin-left: 6%;margin-top: 2%;">Not yet a member? <a href="signup.php">SIGN UP</a></h5>
         	    
               
            </form>


           </div>
    </div>
    
</body>
</html>