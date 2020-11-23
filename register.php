<?php
include("includes/_config.php"); 

$page_title = 'Register page';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("includes/head.php")?>
    <link rel="stylesheet" href="assets/css/register.css">
  </head>
  <body>
    <!-- header -->
    <?php include("includes/header.php")?>
    
    <!-- form field -->
    <main>
      <img class="background" src="assets/images/tabacco farm.webp" alt="tabacco farm">
      <form>
        <fieldset class="field-set"> 
          <legend>Create Account</legend>
          <div class="container">
            <p class="textarea">
              <label for="username">Username<abbr title="required" aria-label="required">*</abbr></label>
              <input type="email" id="username" name="username" placeholder="Enter your email address" required>
            </p>

           <!-- TODO fix it to password text feild -->
            <p class="textarea">
              <label for="password">Password <em>(10 characters minimum)</em><abbr title="required" aria-label="required">*</abbr></label>
              <input type="password" id="password" name="password" placeholder="Create password" minlength="10" required>
            </p>

            <p class="textarea">
              <label for="password">Confirm Password<abbr title="required" aria-label="required">*</abbr></label>
              <input type="password" id="password" name="password" placeholder="Confirm password" minlength="10" required>
            </p>
 
          </div>  
              <button type="button" class="btn"><a href="#">Submit</a></button>
            <div class="Goback">
              <ul class="guide-link">
                <li><a href="index.html">Go back to Home</a></li>        
              </ul>
            </div>
              
        </fieldset>
      </form>
    </main>

    <?php include("includes/footer.php")?>
  </body>
</html>