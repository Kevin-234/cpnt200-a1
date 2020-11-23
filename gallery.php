<?php
include("includes/_config.php"); 

$page_title = 'Gallery page';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("includes/head.php")?>
  <link rel="stylesheet" href="assets/css/gallery.css">
</head>
<body>
  <!-- header -->
  <?php include("includes/header.php")?>

  <!-- hero section -->
  <main>
    <div class="title">
      <h1>Antique Products Gallery</h1>
    </div>
    
    <section class="gallery-wrapper">
      <div class="card">
        <figure class="img-container">
          <img src="assets/images/gallery/elephant.jpg" alt="elephant" class="img-1">
          <figcaption>Antique Elephant:</figcaption>                                     
        </figure>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quos.</p>
      </div>

      <div class="card">
        <figure class="img-container">
          <img src="assets/images/gallery/globe.jpg" alt="globe" class="img-2">
          <figcaption>Antique Globe</figcaption>                                     
        </figure>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quos.</p>
      </div>
      
      <div class="card">
        <figure class="img-container">
          <img src="assets/images/gallery/pocket watch.jpg" alt="pocket watch" class="img-3">
          <figcaption>Antique Pocket Watch</figcaption>                                     
        </figure>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quos.</p>
      </div>

      <div class="card">
        <figure class="img-container">
          <img src="assets/images/gallery/rotary phone.jpg" alt="rotary phone" class="img-4">
          <figcaption>Antique Rotary Phone</figcaption>                                     
        </figure>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quos.</p>
      </div>

      <div class="card">
        <figure class="img-container">
          <img src="assets/images/gallery/tea cup.jpg" alt="tea cup" class="img-5">
          <figcaption>Antique Tea Cup</figcaption>                                     
        </figure>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quos.</p>
      </div>

      <div class="card">
        <figure class="img-container">
          <img src="assets/images/gallery/tea pot.jpg" alt="tea pot" class="img-6">
          <figcaption>Antique Tea Pot</figcaption>                                     
        </figure>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quos.</p>
      </div> 
    

      <div class="card">
        <figure class="img-container">
          <img src="assets/images/gallery/camera.jpg" alt="camera" class="img-6">
          <figcaption>Antique camera</figcaption>                                     
        </figure>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quos.</p>
      </div> 
   

      <div class="card">
        <figure class="img-container">
          <img src="assets/images/gallery/gas-filler.jpg" alt="gas-filler" class="img-6">
          <figcaption>Antique gas-filler</figcaption>                                     
        </figure>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quos.</p>
      </div> 
   

      <div class="card">
        <figure class="img-container">
          <img src="assets/images/gallery/radio.jpg" alt="radio" class="img-6">
          <figcaption>Antique radio</figcaption>                                     
        </figure>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quos.</p>
      </div> 
    

      <div class="card">
        <figure class="img-container">
          <img src="assets/images/gallery/typer.jpg" alt="typer" class="img-6">
          <figcaption>Antique Typer</figcaption>                                     
        </figure>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quos.</p>
      </div> 
    </section>
  </main>
   
  <?php include("includes/footer.php")?>
</body>
</html>