<?php 

if(isset($_POST["submit"])) {
   $username = $_POST["name"];
   $pwd = $_POST["pwd"];

   require_once 'dbh.inc.php';
   require_once 'functions.inc.php'; 

   if(emptyInputLogin($username, $pwd) !== false) {
       header("Location: https://tarmac-twine.000webhostapp.com/login.php?error=emptyinput");
       exit();
   }

   loginUser($conn, $username, $pwd);
}
else {
    header("Location: https://tarmac-twine.000webhostapp.com/signup.php?");
    // header("location: ../signup.php");
    exit();
}