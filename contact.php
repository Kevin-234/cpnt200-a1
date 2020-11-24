<?php
include("includes/_config.php"); 

$page_title = 'Contact page';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- head -->
  <?php include("includes/head.php")?>    

  <link rel="stylesheet" href="assets/css/contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>
<body>
  <!-- header -->
  
  <?php include("includes/header.php")?>

  <!-- team cards field -->
  <main>
    <section>
      <div class="container">
        <h1 class="heading">Contact The Team</h1>
        <!-- put card-wrapper inside the container -->
        <div class="card-wrapper">
          <!-- after card-wrapper make card with class -->
          <figure class="card">
             <img src="assets/images/contact/profile1.jpg" alt="card background" class="card-img">
             <!-- <img src="./img/profile1.jpg" alt="profile image" class="profile-img"> -->
             <h1>Jessica Abebe </h1>
             <figcaption class="job-title">Manager</figcaption>
             <figcaption class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae et minima inventore asperiores magni ad labore facere maiores molestias voluptatibus quam, voluptatem, voluptas vel deserunt.</figcaption>
             <a href="#" class="btn">Contact</a>
             <ul class="social-media">
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-github"></i></a></li>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
             </ul>
          </figure>

          <!-- Second team card -->
          <figure class="card">
            <img src="assets/images/contact/profile2.jpg" alt="card background" class="card-img">
            <!-- <img src="./img/profile2.jpg" alt="profile image" class="profile-img"> -->
            <h1>Micheal Silva</h1>
            <figcaption class="job-title">Furniture Designer</figcaption>
            <figcaption class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae et minima inventore asperiores magni ad labore facere maiores molestias voluptatibus quam, voluptatem, voluptas vel deserunt.</figcaption>
            <a href="#" class="btn">Contact</a>
            <ul class="social-media">
             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
             <li><a href="#"><i class="fab fa-github"></i></a></li>
             <li><a href="#"><i class="fab fa-facebook"></i></a></li>
             <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </figure>

         <!-- Third team card -->
          <figure class="card">
            <img src="assets/images/contact/profile3.jpg" alt="card background" class="card-img1">
            <!-- <img src="./img/profile3.jpg" alt="profile image" class="profile-img"> -->
            <h1>Rose Jones</h1>
            <figcaption class="job-title">Assistant manager</figcaption>
            <figcaption class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae et minima inventore asperiores magni ad labore facere maiores molestias voluptatibus quam, voluptatem, voluptas vel deserunt.</figcaption>
            <a href="#" class="btn">Contact</a>
              <ul class="social-media">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-github"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              </ul>
          </figure> 
        </div>
      </div>
    </section>
  </main>

  <form action="https://formspree.io/kevintaguchi0@gmail.com" method="post">
    <fieldset>
      <p>
        <label for="email">Your Email</label>
        <input name="Email" id="email" type="email">
      </p>  
        <h4>Send a message</h4>
        <textarea name="message"></textarea>
        <button type="submit">Submit</button>
        
    </fieldset>
  </form>
   
  <!-- footer -->
  <?php include("includes/footer.php")?>
</body>
</html>