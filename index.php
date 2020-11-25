<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/register.css">
  
    
    <title>Sign Up - Mentor Mentee</title>
    
    
  </head>
  <body id="body">

    

   <section class="material-half-bg">
      <div class="cover"></div>
    </section>
	<section class="login-content">
    
      <header class="app-header"><a class="app-header__logo" href="index.php"><p style="float:left">MENTOR MENTEE</p> <p style="float:right"></p></a>
      <a href="Login.php"><p style="margin:50px; color:white; float:right">SIGN IN</p></a>
      
    </header>
    
     <div class="login-box">

    

     <form  action="insert.php"  method="post">

         <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN UP</h3>
		
         <div style="margin-left:400px;" class="form-group " style="margin-left:100px;margin-top:20px;" >
            
            <label class="control-label">SURNAME</label>
           
            <input class="form-controls" type="text" placeholder="Surname" name="surname" autofocus>
            
          </div>
          <div style="margin-left: 400px;" class="form-group ">
          
            <label class="control-label" >FIRST NAME</label>
            
            <input  class="form-controls"type="text" placeholder="First Name" name="firstname"  >
           
          </div>
          
		  <div style="margin-left:400px;" class="form-group">
          
            <label class="control-label">OTHER NAME</label>
            
            <input class="form-controls" type="text" placeholder="Other Name" name="othername" >
            
          </div>
		  
      
          <div style="margin-left:400px;" class="form-group">
          
          <label class="control-label">ROLE</label>
          <br/>
          <input class="form-controls" type="radio"  name="role" value="Mentor" checked>Mentor<br>
          <input class="form-controls" type="radio"  name="role" value="Mentee" >Mentee
          
        </div>
          
          <div style="margin-left:400px;" class="form-group">
          
              <label class="control-label">E-MAIL ADDRESS</label>
              
              <input class="form-controls" type="email" placeholder="E-mail Address" name="email">
              
            </div>
            
          <div style="margin-left:400px;" class="form-group">
          
          <label class="control-label">PASSWORD</label>
          
          <input class="form-controls" type="password" placeholder="Password" name="password">
          
        </div>

        <div style="margin-left:400px;margin-top:0px;" class="form-group">
          
              <label class="control-label">CONFIRM PASSWORD</label>
              
              <input class="form-controls" type="password" placeholder="Confirm Password" name="confirmpassword">
              
            </div>
		  
		      <div class="form-group btn-container" style="margin-right:30px;width:1000px;">
            <button style="text-align: center;"name="add" type="submit" id="add" class="btn btn-primary btn-blocks"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN UP</button>
            <p id="demo"></p>
          </div>
		 
        </form>
      </div>
	 </div>
	 
	</section>
   

	 <!-- Essential javascripts for application to work-->
     <script>


     </script>
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