<!-- Home page-->
<?php 
  include_once 'header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Include p5.js library-->
    <script src="p5.js"></script>
    <title>k a f f a</title>
    <!-- Bootstrap Framework CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    
    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="homepage.css">

    <!-- import the webpage's JavaScript file -->
    <!-- <div class="headAnim">
      <script src="animations.js" defer></script>
    </div> -->

    
    <!-- import p5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.min.js"></script>
    <script src="https://cdn.JsDelivr.net/gh/bmoren/p5.collide2D/p5.collide2d.min.js"></script>

  </head>
  <body>
    <div class="slider">
        <img src="menuimg/homepage_vid.gif" id = "homepageGIF">
        <h6></h6>
        <h1>k a f f a</h1>
        <h4>only the finest coffee</h4>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="menuimg/coffeeslide1.jpg" class="d-block w-80" id="slideImg" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Our Coffee</h5>
              <p>We promise to always serve freshly-brewed coffee, with the finest beans imported from Ethiopia.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="menuimg/coffeeslide4.jpg" class="d-block w-80" id="slideImg" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Our Cafe</h5>
              <p>Come join us in our calming, comfortable cafe.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="menuimg/coffeeslide3.jpg" class="d-block w-80" id="slideImg" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Our Crft</h5>
              <p>All our baristas have been extensively trained to serve you the best.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      </div>

      <div class="row" id="space">
        <div class="col-sm-3">
          <div class="card">
            <img src="menuimg/01_BC.png" class="card-img-top" id="cardBot" alt="...">
            <div class="card-body" id="cardBody">
              <h5 class="card-title">Contact Us!</h5>
              <p class="card-text">000-000-0000</p>
              <p class="card-text">1 Example Ave.</p>
              <a href="https://www.google.com/maps/place/Ontario+Tech+University/@43.9456466,-78.8989753,17z/data=!3m1!4b1!4m5!3m4!1s0x89d51b9a6af8ae7f:0x2a373a19593716f5!8m2!3d43.9456428!4d-78.8967866" class="btn btn-primary" id="botButton">Google Maps</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <img src="menuimg/03_C.png" class="card-img-top" id="cardBot" alt="...">
            <div class="card-body" id="cardBody">
                <h5 class="card-title">Find Us On Social Media!</h5>
                <p class="card-text">Instagram @kaffa</p>
                <p class="card-text">Facebook @kaffa</p>
              <a href="aboutus.php" class="btn btn-primary" id="botButton">About Us Page</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
              <img src="menuimg/02_L.png" class="card-img-top" id="cardBot" alt="...">
              <div class="card-body" id="cardBody">
                <h5 class="card-title">Check Out Our Menu!</h5>
                <p class="card-text">Only the Finest Ingredients</p>
                <p class="card-text">1 Example Ave.</p>
                <a href="menu.php" class="btn btn-primary" id="botButton">Google Maps</a>
              </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
              <img src="menuimg/04_A.png" class="card-img-top" id="cardBot" alt="...">
              <div class="card-body" id="cardBody">
                <h5 class="card-title">Sign Up Here!</h5>
                <p class="card-text">Sign Up For Online Ordering!</p>
                <p class="card-text">Welcome To The Kaffa Family!</p>
                <a href="signup.php" class="btn btn-primary" id="botButton">Sign Up Here!</a>
              </div>
            </div>
        </div>
      </div>


<?php 
  include_once 'footer.php';
?>
    