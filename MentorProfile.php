<!DOCTYPE html>
<html lang="en">
  <head>
<title>Mentor Mentee - Mentor Profile</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body class="app sidebar-mini rtl">

<?php

include('session.php');

?>


  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="HomePageAdmin.php"><p style="float:left">Mentor Mentee</p></a>
    
    
     
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
      <br>
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name"><?php echo $loggedin_session;  ?></p>
          <p class="app-sidebar__user-designation">Mentor</p>
        </div>
      </div>
      <ul class="app-menu">
            <li><a class="app-menu__item active" href="MentorProfile.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Profile</span></a></li>
         
            
      </ul>
    </aside>
  <main class="app-content">
    <br>
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Mentor Profile</h1>
        
      </div>
      
    </div>

    <div id="center">
<div id="center-set"> 
<h1 align='center'>Welcome <?php echo $loggedin_session; ?>,</h1>
You are now logged in. you can logout by clicking on signout link given below.
<div id="contentbox">
<?php
$sql="SELECT * FROM mentor where mentorID=$loggedin_id";
$result=mysqli_query($conn,$sql);

while($rows=mysqli_fetch_array($result)){

echo '<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Your Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Mentor ID:</div> </td>
<td class="tl-4">'.$rows['mentorID'].' </td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email:</div></td>
<td class="tl-4">'.$rows['email'].'</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
<td class="tl-4">'.$rows['surname']. ' '.$rows['firstname'].'  '. $rows['othername'].'</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Password</div></td>
<td class="tl-4">'. $rows['password'] .'</td>
</tr>
</table>
<div id="reg-bottom" class="btmrg">Copyright &copy; 2020 MentorMentee</div>
</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>

</div>
</div>';
 
// close while loop 
}

?>
</div>
</div>
</div>
</br>
<div id="footer"><p> Copyright &copy; 2020 MentorMentee </p></div>        
     
        
  </main>
  <!-- Essential javascripts for application to work-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="js/plugins/pace.min.js"></script>
  
 
</body>
</html>