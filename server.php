<?php
session_start();
$student_id="";
$sname="";
$coll_name="";
$dob="";
$cont_number="";
$cpassword="";
$encp_password ="";


// initializing variables
$email= "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'new_hostel');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $student_id=mysqli_real_escape_string($db,$_POST['student_id']);
  $sname=mysqli_real_escape_string($db,$_POST['sname']);
  $coll_name=mysqli_real_escape_string($db,$_POST['college_name']);
  $dob=mysqli_real_escape_string($db,$_POST['date_of_birth']);
  $cont_number=mysqli_real_escape_string($db,$_POST['cont_number']);
  $email=mysqli_real_escape_string($db,$_POST['email']);
  $password=mysqli_real_escape_string($db,$_POST['password']);
  $cpassword=mysqli_real_escape_string($db,$_POST['confirm_password']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
   // by adding (array_push()) corresponding error unto $errors array
   if(empty($student_id)){array_push($error,"student id is required");}
   if(empty($coll_name)){array_push($error,"college name is required");}
   if(empty($dob)){array_push($error,"date of birth  is required");}
   if(empty($cont_number)){array_push($error,"contact number is required");}
   if(empty($email)){array_push($error,"email is required");}
   if (empty($sname)) { array_push($errors, "Username is required"); }
   if (empty($email)) { array_push($errors, "Email is required"); }
   if (empty($password)) { array_push($errors, "Password is required"); }
   if ($password != $cpassword) {
     array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM hosteluser WHERE  email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
   
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$encp_password = md5($password_1);//encrypt the password before saving in the database

  	$query ="INSERT INTO hosteluser(student_id,sname,college_name,date_of_birth,cont_number,email,password,confirm_password) VALUES('$student_id','$sname','$coll_name','$dob','$cont_number','$email','$encp_password','$cpassword')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
    $_SESSION['sname']=$sname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        
       // $password = md5($password);
        $query = "SELECT email,confirm_password FROM hosteluser WHERE email='$email' AND confirm_password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['email']=$email;
         
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }

    }
  }
  
  ?>
