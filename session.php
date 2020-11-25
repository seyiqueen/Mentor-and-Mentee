<?php
    $servername = "sql302.epizy.com";
    $username = "epiz_27305513";
    $password = "5ShAa81GuskcB";
    $dbname = "epiz_27305513_mentor_mentee";
       
       // Create connection
       $conn = new mysqli($servername, $username, $password, $dbname);
       // Check connection
       if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
       }
       session_start();
       //mentor
       $user_check=$_SESSION['login_user'];
       $ses_sql=mysqli_query($conn,"select email, mentorID from mentor where email = '$user_check'");
       
       $row=mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
      
       $loggedin_session=$row['email'];
       $loggedin_id=$row['mentorID'];
       

       if(!isset($loggedin_session) || $loggedin_session ==NULL){
           echo "Go Back";
           header("Location: Login.php");
       }
       
?>