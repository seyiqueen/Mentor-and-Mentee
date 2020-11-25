<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
    
    <title>Login - Mentor Mentee</title>
  </head>
  <body>
  <?php
   $servername = "sql302.epizy.com";
   $username1 = "epiz_27305513";
   $password = "5ShAa81GuskcB";
   $dbname = "epiz_27305513_mentor_mentee";
    
    // Create connection
    $conn = new mysqli($servername, $username1, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   session_start();
      // define variables and set to empty values
$user = $pass =  "";
$userErr = $passErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $userErr = "username is required";
  } else {
    $user = test_input($_POST["username"]);
  }

  if (empty($_POST["password"])) {
    $passErr = "password is required";
  } else {
    $pass = test_input($_POST["password"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
      $error = '';
     
      
      
      // User is logging in
      if (isset($_POST["submit"]))
      {
        if (empty ($_POST["username"])) //if username field is empty echo below statement
         {
          $error =  "<font color='red'>***You must enter your unique username (email).***</font><br/><br/>";
    
         }
         if (empty ($_POST["password"])) //if password field is empty echo below statement
         {
          $error = "<font color='red'>***You must enter your unique password.***</font><br/><br/>";
         }
    
         $username = mysqli_real_escape_string($conn, $_POST["username"]);
      $password = mysqli_real_escape_string($conn, $_POST["password"]);
      //Mentor
      $result = mysqli_query($conn,"select * from mentor");
      $c_rows = mysqli_num_rows($result);
      if($c_rows != $username) {
        header("location:Login.php?remark_login=failed");
      }
      $sql = "select mentorID from mentor where email = '$username' and password = '$password'";
      $result=mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      $active = $row['active'];
      $count=mysqli_num_rows($result);
      if($count==1) {
          $_SESSION['login_user']=$username;
          header("location: MentorProfile.php");
      }
        // Mentee
		 $username2 = mysqli_real_escape_string($conn, $_POST["username"]);
      $password2 = mysqli_real_escape_string($conn, $_POST["password"]);
      $result1 = mysqli_query($conn,"select * from mentee");
      $c_rows1 = mysqli_num_rows($result1);
      if($c_rows1 != $username2) {
        header("location:Login.php?remark_login=failed");
      }
      $sql1 = "select menteeID from mentee where email = '$username2' and password = '$password2'";
      $result1=mysqli_query($conn,$sql1);
      $row1 = mysqli_fetch_array($result1);
      $active1 = $row['active'];
      $count1=mysqli_num_rows($result1);
      if($count1==1) {
          $_SESSION['login_user']=$username2;
          header("location: MenteeProfile.php");
      }
         
     }
     
   
  
    
?>

    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
    
      <header class="app-header"><a class="app-header__logo" href="Login.php"><p style="float:left">MENTOR MENTEE</p></a>
      <a href="index.php"><p style="margin:50px; color:white; float:right">SIGN UP</p></a>
      
    </header>
    
      <div class="login-box">
      
        <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
          <h3 class="login-heads"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" placeholder="Email" name="username" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            
            <input class="form-control" type="password" placeholder="Password" name="password">
            <p style="display: none">Incorrect username or password</p>
          </div>
          
        
          <div class="form-group btn-container">
            <button type="submit" id="error"  name = "submit" value="login" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
       
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>