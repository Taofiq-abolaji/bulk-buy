<?php 
session_start();

$otp = $_SESSION['otp'] ;
echo $otp;
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/styles/otp.css">
  <title>Verify</title>
</head>
<body>
  <header>
    <nav>
      <a href="index.html" class="logo"><img src="assets/images/logo.PNG" alt=""></a>
      <ul>
        <!-- <form method="" class="search">
          <input type="text" name="search" id="search">
          <div class="search-icon">
            <img src="assets/images/search1.png" alt="">
          </div>
        </form> -->
        <li><a href="signup.html" class="active" aria-current="page">Sign Up</a></li>
        <li><a href="login.html">Login</a></li>
      </ul>
      <span class="hamburger">
        <div></div>
        <div></div>
        <div></div>
      </span>
    </nav>
  </header>
  <main>
    <form action="../BULK-BUY-BACKEND/otp.php" method="post">
      <div class="sign-in-text">
        <h2>Verify Code</h2>
        <span>A verification code has been sent to your email</span>
      </div>
      <div class="input-fields">
        <div class="input-container">
          <input type="text" name="otp1" inputmode="numeric"  id="otp1" maxlength="1" required>
          <input type="text" name="otp2" id="otp2" inputmode="numeric" maxlength="1" required>
          <input type="text" name="otp3" id="otp3" inputmode="numeric" maxlength="1" required>
          <input type="text" name="otp4" id="otp4" inputmode="numeric" maxlength="1" required>
        </div>
      </div>
      <div class="submit-text">
        <input type="submit" name="submit" value="verify" class="submit">
        <span>Didn't recieve an OTP?</span>
        <span><a href="../BULK-BUY-BACKEND/email.php">Resend Code</a></span>
      </div>
    </form>
    <div class="hero-image">
      <img src="assets/images/cyber-monday-retail-sales-removebg.png" alt="">
    </div>
    <span class="circle-container">
      <div class="circle"></div>
    </span>
  </main>
<!-- <script src="assets/scripts/otp.js"></script>   -->
</body>
</html>