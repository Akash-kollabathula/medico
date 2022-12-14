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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile.css">
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
                                echo "<li class = 'nav-item'><a href='profile.php' class = 'active'>PROFILE</a></li>";
                                echo "<li class = 'nav-item'><a href='includes/logout.inc.php'>LOGOUT</a></li>";
                        }
                        else {
                                echo "<li class = 'nav-item'><a href='signup.php' class = 'active'>SIGN UP</a></li>";
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

<div class="user-profile">
      <img src="img/user.jpg" class = "profile-img"alt="">
      <div class="userinfo">
          <h1>
           <?php echo $_SESSION["useruid"]; ?>
          </h1>
          <p>
              Patient ID - 1234 6789 1111 9999
          </p>
          <p>
              Status - Monitor
          </p>
          <p>
              Issue - Fever
          </p>
          <button class = "feedback-btn">
            <i class="fas fa-phone-alt" style = "color: #fff;"></i> Emergency
          </button>
          <button class = "feedback-btn" style = "background-color: #33cc33;">
            Feedback
          </button>
      </div>
</div>

<div class="user-nav">
    <a class = "current today">
        Today
    </a>

    <a class = "tomorrow">
        Tomorrow
   </a>
</div>

<div class = "today-tasks">
    <ul class = "tasks">
        <li class = "text">1. DOLO 650<button class = "buy"><a href="store.html" style = "color: #fff">buy</a></button> <button class = "remained"><a href="https://www.google.com/calendar/render?action=TEMPLATE&text=DOLO+650&dates=20220121T224000Z/20220122T221500Z&details=Can+set+your+prior+time&location=Waldorf+Astoria,+301+Park+Ave+,+New+York,+NY+10022&sf=true&output=xml" target = "_blank" style = "color:#fff">remind</a></button> <button class = "done">done</button></li>
        <li class = "text">2. Crocin<button class = "buy"><a href="store.html" style = "color: #fff">buy</a></button> <button class = "remained"><a href="https://www.google.com/calendar/render?action=TEMPLATE&text=Crocin&dates=20220121T224000Z/20220122T221500Z&details=Can+set+your+prior+time&location=Waldorf+Astoria,+301+Park+Ave+,+New+York,+NY+10022&sf=true&output=xml" target = "_blank" style = "color:#fff">remind</a></button> <button class = "done">done</button></li>
        <li class = "text">3. Cough Syrup <button class = "buy"><a href="store.html" style = "color: #fff">buy</a></button> <button class = "remained"><a href="https://www.google.com/calendar/render?action=TEMPLATE&text=Cough+Syrup&dates=20220121T224000Z/20220122T221500Z&details=Can+set+your+prior+time&location=Waldorf+Astoria,+301+Park+Ave+,+New+York,+NY+10022&sf=true&output=xml" target = "_blank" style = "color:#fff">remind</a></button> <button class = "done">done</button></li>
    </ul>
</div>

<div class="tomorrow-tasks">
    <ul class = "tasks">
        <li class = "text">1. DOLO 650<button class = "buy"><a href="store.html" style = "color: #fff">buy</a></button> <button class = "remained"><a href="https://www.google.com/calendar/render?action=TEMPLATE&text=DOLO+650&dates=20220121T224000Z/20220122T221500Z&details=Can+set+your+prior+time&location=Waldorf+Astoria,+301+Park+Ave+,+New+York,+NY+10022&sf=true&output=xml" target = "_blank" style = "color:#fff">remind</a></button> <button class = "done">done</button></li>
        <li class = "text">2. Crocin<button class = "buy"><a href="store.html" style = "color: #fff">buy</a></button> <button class = "remained"><a href="https://www.google.com/calendar/render?action=TEMPLATE&text=Crocin&dates=20220121T224000Z/20220122T221500Z&details=Can+set+your+prior+time&location=Waldorf+Astoria,+301+Park+Ave+,+New+York,+NY+10022&sf=true&output=xml" target = "_blank" style = "color:#fff">remind</a></button> <button class = "done">done</button></li>
        <li class = "text">3. Cough Syrup <button class = "buy"><a href="store.html"  style = "color: #fff">buy</a></button> <button class = "remained"><a href="https://www.google.com/calendar/render?action=TEMPLATE&text=Cough+Syrup&dates=20220121T224000Z/20220122T221500Z&details=Can+set+your+prior+time&location=Waldorf+Astoria,+301+Park+Ave+,+New+York,+NY+10022&sf=true&output=xml" target = "_blank" style = "color:#fff">remind</a></button> <button class = "done">done</button></li> 
        <li class = "text">4. Eye drops <button class = "buy"><a href="store.html" style = "color: #fff">buy</a></button> <button class = "remained"><a href="https://www.google.com/calendar/render?action=TEMPLATE&text=Eye+drops&dates=20220121T224000Z/20220122T221500Z&details=Can+set+your+prior+time&location=Waldorf+Astoria,+301+Park+Ave+,+New+York,+NY+10022&sf=true&output=xml" target = "_blank" style = "color:#fff">remind</a></button> <button class = "done">done</button></li>
    </ul>
</div>



<script>
    const closebtns = document.getElementsByClassName('done');
    for(let i = 0; i < closebtns.length; ++i) {
    closebtns[i].addEventListener("click", function(){
        this.parentElement.style.display = "none";
     })
    }

    const today = document.querySelector('.today');
    const tomorrow = document.querySelector('.tomorrow');
    const todayTasks = document.querySelector('.today-tasks');
    const tomorrowTasks = document.querySelector('.tomorrow-tasks');

    today.addEventListener("click", function() {
       today.classList.remove('current');
       tomorrow.classList.remove('current');
       todayTasks.style.display = 'block';
       tomorrowTasks.style.display = 'none';

       today.classList.add('current');
    });

    tomorrow.addEventListener("click", function() {
       today.classList.remove('current');
       tomorrow.classList.remove('current');
       todayTasks.style.display = 'none';
       tomorrowTasks.style.display = 'block';

       tomorrow.classList.add('current');
    });

</script>

<script src = "js/script.js"></script>
</body>
</html>
<!-- 
https://www.google.com/calendar/render?action=TEMPLATE&text=Crocin&dates=20220121T224000Z/20220122T221500Z&details=For+details,+link+here:+http://www.example.com&location=Waldorf+Astoria,+301+Park+Ave+,+New+York,+NY+10022&sf=true&output=xml



 -->