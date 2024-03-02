<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style1.css">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9371976363197718"
     crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
  <title>Log In</title>
</head>
<body>
  
   <header class="header">
    <a class="logo">LOG IN</a>
  
  <!--
    <input type="checkbox" name="" id="check">
    <label for="check" class="icon">
      <img srcset="" src="img/menu.png" alt="menu" width="45px" id="menu">
      <img srcset="" src="img/close.png" alt="menu" width="45px" id="close">
    </label>
  
  
    <nav class="navbar">
      <a href="home.html" style="--i:0;">Home</a>
      <a href="about.html" style="--i:1;">About Us</a>
      <a href="contact.html" style="--i:2;">Contact Us</a>
      <a href="profile.html" style="--i:3;">My Profile</a>
    </nav>
    -->
  </header>
  
<?php
    if (isset($_POST['submit'])){
    $user = ['user'];
    $email = ['email'];
    $password = ['password'];
    $op = ['op'];
    
    if ($op == 'HOME'){
    $ans1 = $user;
    $ans2 = $email;
    $ans3 = $password;
}
}if (isset($_POST['submit'])){
    echo "<div class='sms'>
       <p> Log in successfully</p><br>
       <a href='home.php'>Home</a>
    </div>";
}else{
?>
  
  <form action="" method="post" class="form">
    <h1>Log In</h1><br>
    <input type="text" placeholder="Username" name="user" required><br>
    <input type="email" placeholder="Email address" name="email" required><br>
    <input type="password" placeholder="Password" name="password" required><br>
    <select name="op" id="">
      <option value="">HOME</option>
    </select><br>
    <a href=""><button type="submit" name="submit">Log In</button></a>
  </form>
<?php } ?>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="main.js"></script>
</body>
</html>