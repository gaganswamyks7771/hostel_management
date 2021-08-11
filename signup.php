<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signUp</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDAz4w4QON-AzlKull2e7DoCNFo0OkooM4"></script>
    <link rel="stylesheet" href="signup.css">
</head>
<body  style="background-color: rgb(70, 29, 109);">
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
                    <a class="nav-link" href="login.php">LOGIN</a>
                  </li>
                  <li class="nav-item color_hover">
                    <a class="nav-link" href="#">SIGN UP</a>
                  </li>
                </ul>
              </nav>
              <br>
              <br>
           </div>
           <div id="signup1">
               
               <h4>REGESTRATION</h4>
               <div id="inputs" class="container-fluid">
                <form action="signup.php" method="post">
                <?php include('errors.php');?>
                <input name="student_id"  required class="input1" type="text" placeholder="STUDENT ID NO">
                <input name="sname"       required class="input2" type="text" placeholder="YOUR NAME"><div style="margin-left: 36%;margin-top: 20px;margin-bottom: -45px;"> <span id="dob">DATE OF BIRTH</span></div>
                <input name="college_name"  required style="margin-left: -6%;" class="input1" type="text" placeholder="COLLEGE NAME">
                <input name="date_of_birth"  required class="input2"type="date"> <br>
                <input name="cont_number"    required class="input1" type="text"  pattern="[0-9]{10}" placeholder="CONTACT NUMBER">
                <input name="email"          required class="input2" type="text" placeholder="EMAIL"><br>
                <input name="password"       required  class="input1" type="password" placeholder="PASSWORD">
                <input name="confirm_password" required class="input2" type="password" placeholder=" CONFIRM PASSWORD"><br>
                <button name="reg_user" id="inputbutton" type="submit" >SUBMIT</button>
                </form>


               </div>
           </div>
           <h5 style="color:white;margin-left: 20%; margin-top:-3%">Already a user <a href="login.php">LOGIN</a> </h5>
   
    </div>
    
</body>
</html>