<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/store.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://kit.fontawesome.com/5894320815.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="main-nav">
              <img src="img/logo.png" class = "logo" alt="">
              <ul class = "nav-menu">
                  <li class = "nav-item active">
                      <a href="index.php">HOME</a>
                   </li>
                  <li class = "nav-item">
                      <a href="store.php" class = "active">STORE</a>
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
            <a href="index.php">HOME</a>
            <a href="store.php">STORE</a>
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
    
    <section class="Suggested-med">
        <h1>Suggested</h1>
        <div class="carousel" data-flickity='{ "groupCells": true}'>
          <div class="carousel-cell card">
              <div>
                  <img src="img/ak1.jfif" alt="Avatar" style="width:100%; height: 180px;">
                  <div class="container">
                    <h4><b>Augmentin 625 Duo Tablet</b></h4> 
                    <p>4.2 ⭐, 60mg</p> 
                    <p>RS 200</p>
                    <button class="med-btn">Buy</button>
                  </div>
              </div>
          </div>
          <div class="carousel-cell card">
              <div>
                  <img src="img/ak2.jfif" alt="Avatar" style="width:100%; height: 180px;">
                  <div class="container">
                    <h4><b>Aciloc 150 Tablet</b></h4> 
                    <p>4.5 ⭐, 65mg</p> 
                    <p>RS 245</p>
                    <button class="med-btn">Buy</button>
                  </div>
              </div>
          </div>
          <div class="carousel-cell card">
              <div>
                  <img src="img/ak3.jfif" alt="Avatar" style="width:100%; height: 180px;">
                  <div class="container">
                    <h4><b>Brilinta Tablet</b></h4> 
                    <p>3.8 ⭐, 90mg</p> 
                    <p>RS 450</p>
                    <button class="med-btn">Buy</button>
                  </div>
              </div>
          </div>
          <div class="carousel-cell card">
              <div>
                  <img src="img/ak4.jfif" alt="Avatar" style="width:100%; height: 180px;">
                  <div class="container">
                    <h4><b>Bilasiure Tablet</b></h4> 
                    <p>4.4 ⭐, 10mg</p> 
                    <p>RS 172</p>
                    <button class="med-btn">Buy</button>
                  </div>
              </div>
          </div>
          <div class="carousel-cell card">
              <div>
                  <img src="img/ak5.jfif" alt="Avatar" style="width:100%; height: 180px;">
                  <div class="container">
                    <h4><b>Candesartan</b></h4> 
                    <p>5 ⭐, 60mg</p> 
                    <p>RS 128</p>
                    <button class="med-btn">Buy</button>
                  </div>
              </div>
          </div>
          
        </div>
  
    </section>

    <section class="Explore-med">
        <h1>Explore</h1>
        <div class="carousel" data-flickity='{ "groupCells": true}'>
          <div class="carousel-cell card">
            <div>
                <img src="img/ak6.jfif" alt="Avatar" style="width:100%; height: 180px;">
                <div class="container">
                  <h4><b>Cinnarizine</b></h4> 
                  <p>4.9 ⭐, 50mg</p> 
                  <p>RS 400</p>
                  <button class="med-btn">Buy</button>
                </div>
            </div>
        </div>
        <div class="carousel-cell card">
            <div>
                <img src="img/ak11.jfif" alt="Avatar" style="width:100%; height: 180px;">
                <div class="container">
                  <h4><b>Digoxin</b></h4> 
                  <p>3.2 ⭐, 10mg</p> 
                  <p>RS 40</p>
                  <button class="med-btn">Buy</button>
                </div>
            </div>
        </div>
        <div class="carousel-cell card">
            <div>
                <img src="img/ak8.jfif" alt="Avatar" style="width:100%; height: 180px;">
                <div class="container">
                  <h4><b>Enalapril</b></h4> 
                  <p>4.4 ⭐, 36mg1</p> 
                  <p>RS 67</p>
                  <button class="med-btn">Buy</button>
                </div>
            </div>
        </div>
        <div class="carousel-cell card">
            <div>
                <img src="img/ak9.jfif" alt="Avatar" style="width:100%; height: 180px;">
                <div class="container">
                  <h4><b>Fentanyl</b></h4> 
                  <p>3.9 ⭐, 80mg</p> 
                  <p>RS 700</p>
                  <button class="med-btn">Buy</button>
                </div>
            </div>
        </div>
        <div class="carousel-cell card">
            <div>
                <img src="img/ak10.jfif" alt="Avatar" style="width:100%; height: 180px;">
                <div class="container">
                  <h4><b>Gabapentin</b></h4> 
                  <p>4.0 ⭐, 78mg</p> 
                  <p>RS 359</p>
                  <button class="med-btn">Buy</button>
                </div>
            </div>
        </div>
        <div class="carousel-cell card">
            <div>
                <img src="img/ak12.jfif" alt="Avatar" style="width:100%; height: 180px;">
                <div class="container">
                  <h4><b>Ibuprofen</b></h4> 
                  <p>3.3 ⭐, 57mg</p> 
                  <p>RS 33</p>
                  <button class="med-btn">Buy</button>
                </div>
            </div>
        </div>
        <div class="carousel-cell card">
            <div>
                <img src="img/ak7.jfif" alt="Avatar" style="width:100%; height: 180px;">
                <div class="container">
                  <h4><b>CROCIN ADVANCE, Relief Capsules</b></h4> 
                  <p>4.8 ⭐, 180mg</p> 
                  <p>RS 200</p>
                  <button class="med-btn">Buy</button>
                </div>  
            </div>
        </div>
    </section>
    
    
    <script src = "js/script.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
</html>