<?php 

session_start();

?>

<?php

function message($text) {
    $res =  "<div id='snackbar'>" . $text . "</div>" . 
    "<script type = 'text/javascript'> var x = document.getElementById('snackbar'); x.className = 'show'; 
    setTimeout(function(){ x.className = x.className.replace('show', ''); }, 3000);
    </script>
    </div>";
    return $res;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5894320815.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/auth.css">
    <title> Website 🚀</title>
</head>
<body>
    <nav>
        <div class="main-nav">
              <img src="img/logo.png" class = "logo" alt="">
              <ul class = "nav-menu">
                  <li class = "nav-item">
                      <a href="index.php">HOME</a>
                   </li>
                  <li class = "nav-item">
                      <a href="store.php">STORE</a>
                   </li>
                   <?php 
                        if(isset($_SESSION["useruid"])) {
                                echo "<li class = 'nav-item'><a href='profile.php'>PROFILE</a></li>";
                                echo "<li class = 'nav-item'><a href='includes/logout.inc.php'>LOGOUT</a></li>";
                        }
                        else {
                                echo "<li class = 'nav-item'><a href='signup.php'>SIGN UP</a></li>";
                                echo "<li class = 'nav-item'><a href='login.php' class = 'active'>LOGIN</a></li>";
                        }
                    ?>
              </ul>
              <div class="hamburger">
                
                <?php echo  '<i class="fas fa-bars fa-2x"></i>'; ?>
                
              </div>
        </div>

        <div class="Sidenav">
            <a href="javascript:void(0)" class="closebtn">&times;</a>
            <a href="index.html">HOME</a>
            <a href="store.html">STORE</a>
            <?php 
                        if(isset($_SESSION["useruid"])) {
                                echo "<a href='profile.php'>PROFILE</a>";
                                echo "<a href='includes/logout.inc.php'>LOGOUT</a>";
                        }
                        else {
                                echo "<a href='signup.php'>SIGN UP</a>";
                                echo "<a href = 'login.php'>LOG IN</a>";
                        }
            ?>
       </div>
    </nav>

<section class = "Login">
     <form class = "container"  action="includes/login.inc.php" method = "post">
            <h1>LOG IN</h1>
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Username/Email" name="name">
            </div>   
            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="Enter Password" name="pwd">
            </div>   
            <button type="submit" name = "submit" class="auth-btn" style="font-size: 20px; font-weight: 600;">Login</button>
            <?php 
                if(isset($_GET["error"])) {
                    if($_GET["error"] === "emptyinput") {
                       echo message("Fill in all fields!");
                    }
                    else if($_GET["error"] === "wronglogin") {
                        echo message("User doesn't exists");

                    }
                    else if($_GET["error"] === "incorrectpassword") {
                        echo message("Entered Incorrect Password !!");
                    }
                    
                }
               ?>
      </form>
<section>

<script src = "js/script.js"></script>
<script>
    
</script>
</body>
</html>


