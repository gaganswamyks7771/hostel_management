<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="feedback.css">
    
<body>
    <div class="container-fluid">
        <div>
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
                    <a class="nav-link" href="#">FEEDBACK</a>
                  </li>
                  <li class="nav-item color_hover">
                    <a class="nav-link" href="login.php">LOGIN</a>
                  </li>
                  <li class="nav-item color_hover">
                    <a class="nav-link" href="signup.php">SIGN UP</a>
                  </li>
                </ul>
              </nav>
            </div>
            <br>
            <br>
            <br>
        </div>
        <div id="feedback1">
            <form action="">
            <div>
                <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;padding-left: 37%;"> FEEDBACK FORM</h3>
            </div>
            <div>
                <label style="padding-left: 10%; padding-top: 5%;" for="NAME">NAME:</label> <input type="text" placeholder="enter your name" style="width: 80%;border: solid greenyellow;">
            </div>
            <div>
                <label style="padding-left: 10%; padding-top: 3%;" for="email">EMAIL:</label> <input type="text" placeholder="enter your email" style="width: 80%;border: solid greenyellow;">
            </div>
            <div >
                <div style="padding-left: 10%;">
                    <label  for="feedback">ENTER FEEDBACK:</label><br>

                </div>
                <div style="padding-left: 15%;">
                    <textarea name="message" id="" cols="30" rows="8" placeholder="enter your feedback" style="width: 94%;border: solid greenyellow;padding-left: 50px;"></textarea>
                

                </div>
               
               
            </div>

            <button id="bu" type="submit"> SUBMIT</button>
        </form>


        </div>
    </div>          
</body>
</html>