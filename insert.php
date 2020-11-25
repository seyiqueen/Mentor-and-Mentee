<?php

	$MentorID;
    $MenteeID;
    $MentorrID;
   $surname=$_POST["surname"];
   $firstname=$_POST["firstname"];
   $othername=$_POST["othername"];
   $role = $_POST['role'];
   $email=$_POST["email"];
   $password = $_POST["password"];
   $confirmpassword = $_POST["confirmpassword"];

   if(!empty($surname)  && !empty($firstname) && !empty($othername) && !empty($role) && !empty($email) && !empty($password) && !empty($confirmpassword) && $password == $confirmpassword){
    $servername = "sql302.epizy.com";
    $username = "epiz_27305513";
    $password = "5ShAa81GuskcB";
    $dbname = "epiz_27305513_mentor_mentee";
    
        session_start(); 
    
         // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else if($role == 'Mentor'){
			
                $SELECT = "select email from mentor where email = ? limit 1";
                $INSERT = "insert into mentor (mentorID,surname,firstname,othername,email,password) values(?,?,?,?,?,?)";

                $stmt = $conn->prepare($SELECT);
                $stmt->bind_param("s",$email);
                $stmt->execute();
                $stmt->bind_result($email);
                $stmt->store_result();
                $stmt->store_result();
                $stmt->fetch();
                $rnum = $stmt->num_rows;
                if($rnum==0){
                    $stmt->close();
                    $stmt = $conn->prepare($INSERT);
                    $stmt->bind_param("isssss",$MentorID,$_POST["surname"],$_POST["firstname"], 
                    $_POST["othername"], $_POST["email"],$_POST["password"]);
                    $stmt->execute();

                    echo"Registration Successful";
                }else{
                    echo "somebody already registered using this email";
                }
                $stmt->close();
				$conn->close();
        }
		else if($role == 'Mentee'){
			
                $SELECT1 = "select email from mentee where email = ? limit 1";
                $INSERT1 = "insert into mentee (menteeID,surname,firstname,othername,email,password,mentorID) values(?,?,?,?,?,?,?)";

                $stmt1 = $conn->prepare($SELECT1);
                $stmt1->bind_param("s",$email);
                $stmt1->execute();
                $stmt1->bind_result($email);
                $stmt1->store_result();
                $stmt1->store_result();
                $stmt1->fetch();
                $rnum1 = $stmt1->num_rows;
                if($rnum1==0){
                    $stmt1->close();
                    $stmt1 = $conn->prepare($INSERT1);
                    $stmt1->bind_param("isssssi",$MenteeID,$_POST["surname"],$_POST["firstname"], 
                    $_POST["othername"], $_POST["email"],$_POST["password"],$MentorrID);
                    $stmt1->execute();

                    echo"Registration Successful";
                }else{
                    echo "somebody already registered using this email";
                }
                $stmt1->close();
				$conn->close();
        }
   }
   else{
	   echo "All field are required or passwords do not match";
	   die();
   }
      

        
       
        
    
            
           

           
           
   ?>     