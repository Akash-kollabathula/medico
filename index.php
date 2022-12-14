<?php
  
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5894320815.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/auth.css">
    <link rel="stylesheet" href="css/style.css">
    <title> Website 🚀</title>
</head>
<body>
    <nav>
        <div class="main-nav">
              <img src="img/logo.png" class = "logo" alt="">
              <ul class = "nav-menu">
                  <li class = "nav-item active">
                      <a href="index.php" class = "active">HOME</a>
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
                                echo "<li class = 'nav-item'><a href='login.php'>LOGIN</a></li>";
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
                                echo '<script>alert("Successfully Logged in")</script>';
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
    <section class="Hero-Section">
        <div class = "Hero">
            <img src="img/hero.gif" class = "hero-logo"alt="">
            <div class = "logo-heading">
                <h1><span class = "main-color">Medi</span>tor</h1>
                <p>Your Health is our <span class = "main-color">Priority</span></p>
                <div class="wraphero-btns">
                    <button class = "hero-btn hero-btn1" ><a href="store.php" style = "color: #000000;">Store</a></button>
                    <!-- <button class = "hero-btn hero-btn2">Schedule </button> -->
                </div>
            </div>
        </div>
    </section>

    <div class ="features">
            <div class="feature-box">
              <i class="icon fas fa-eye fa-4x"></i>
              <h3 class = "feature-title">Monitor</h3>
              <p>24/7 monitors your health</p>
            </div>
  
            <div class="feature-box">
              <i class="icon fas fa-users fa-4x"></i>
              <h3 class = "feature-title">Feedback</h3>
              <p>Keeping track of patient health</p>
            </div>
  
            <div class="feature-box">
              <i class="icon fas fa-shopping-bag fa-4x"></i>
              <h3 class = "feature-title">Store</h3>
              <p>Prescribed medicines at low cost</p>
            </div>
        </div>


    <div class="moto">
        <h1>
            "Our main motto is to monitor his/her
            health from the time he/she first visits the
            hospital till he/she totally recovers."
        </h1>
    </div>
    <div class="test-sect">
        <div class="testimonials">
            <div class="inner">
            <h1>Testimonials</h1>
            <div class="border"></div>
    
            <div class="row">
                <div class="col">
                <div class="testimonial">
                    <img src="https://www.filmibeat.com/ph-big/2021/03/bhavana_16154521982.jpg" alt="">
                    <div class="name">Olivia</div>
                    <p>
                        The App really helped me to get recover.
                    </p>
                </div>
                </div>
    
                <div class="col">
                <div class="testimonial">
                    <img src="https://blog.hootsuite.com/wp-content/uploads/2021/07/free-stock-photos-03-scaled.jpeg" alt="">
                    <div class="name">Alexander</div>
    
                    <p>
                        It reminds me whenever I forget to have my pills
                    </p>
                </div>
                </div>
    
                <div class="col">
                <div class="testimonial">
                    <img src="https://st.depositphotos.com/1015583/2130/i/600/depositphotos_21307971-stock-photo-shining-girl.jpg" alt="">
                    <div class="name">Marvia</div>
    
                    <p>
                    Takes feedback at regular intervals and monitors my health all the day.
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script src = "js/script.js">
    </script>
</body>
</html>