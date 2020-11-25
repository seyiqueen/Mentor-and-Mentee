<?php

 $servername = "sql302.epizy.com";
    $username = "epiz_27305513";
    $password = "5ShAa81GuskcB";
    $dbname = "epiz_27305513_mentor_mentee";
session_start();
if(session_destroy()) {
 header("location: login.php");
}
?>