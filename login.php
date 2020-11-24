<?php
include("includes/_config.php"); 

$page_title = 'Login page';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- head -->
  <?php include("includes/head.php")?>
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <!-- header -->
  <?php include("includes/header.php")?>

  <!-- form field -->
  <main>    
    <img class="background" src="assets/images/car.jpg" alt="car">
    <form>
      <fieldset class="field-set"> 
        <legend>Login to your Account</legend>
        <div class="container">
          <p>
            <label for="email">Email<abbr title="required" aria-label="required">*</abbr></label>
            <input type="text" id="email" placeholder="Enter your email address" name="uname" required>
          </p> 

          <p>
            <label for="psw">Password<abbr title="required" aria-label="required">*</abbr></label>
            <input type="password" id="psw" placeholder="Enter Password" name="psw" required>
          </p>
            
          <p> 
            <input type="checkbox" id="checkbox" name="remember">
            <label for="checkbox">Remember me</label>
          </p>  

        </div>  
            <button type="submit" class="loginbtn">Login</button>
        
            <ul class="guide-link">
              <!-- anchor element # is for decoraton -->
              <li><a href="#">Find ID or Reset password</a></li>
              <li><a href="register.html">Create an account</a></li>             
            </ul>

            <button type="button" class="cancelbtn"><a href="index.php">Cancel</a></button>
            <!-- For decoration -->
            <span class="psw">Forgot <a href="#">password</a>?</span>
        
      </fieldset>
  </form>
  </main>

  <!-- footer -->
  <?php include("includes/footer.php")?>
</body>
</html>