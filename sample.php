<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nutella®</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <link rel="stylesheet" href="stylesheet.css" />
  </head>
  <body>
    <header class="header">
      <a href="#home" class="logo">
        <img src="images/nutella-logo.png" alt="" />
      </a>

      <nav class="navbar">
        <li><a href="#home"> Home</a></li>
        <li><a href="#about"> About Us</a></li>
        <li><a href="#gallery"> Gallery</a></li>
      </nav>

      <nav class="logreg">
        <li><a href="logout.php">Log out </a></li>
        <li><a href="index-admin.php">Admin </a></li>
      </nav>
    </header>

    <section class="home" id="home">
      <div class="content">
        <h3>WELCOME USER !!!</h3>
        <p>Discover what makes Nutella® so special.</p>
        <a href="#about" class="btn">Discover more</a>
      </div>

     

    </section>

    <section class="about" id="about">
      <h1 class="heading"><span>About</span> Us</h1>

      <div class="row">
        <div class="image">
          <div style="width: 50%"><iframe allow="fullscreen" frameBorder="0" height="270" src="https://giphy.com/embed/6t0z7Ughwb6N2n2WRt/video" width="200%"></iframe></div>
          <img src="images/nutella-home.jpg" alt="" />
        </div>

        <div class="content">
          <h3>what makes Nutella® so special?</h3>
          <p>
            What makes the signature recipe for Nutella® so delicious is the
            care and passion we put each day into every step of its production
            in order to offer you a tasty and pleasurable experience.
          </p>
          <a href="#" class="btn">learn more</a>
        </div>
      </div>
    </section>

     <section class="products" id="products">
      <h1 class="heading">Our <span>Products</span></h1>

      <div class="box-container">
        <div class="box">
          <img src="images/menu-1.png" alt="" />
          <h3>Nutella®</h3>
          <div class="price">₱472.50  <span>569.00</span></div>
          <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
          <img src="images/menu-2.png" alt="" />
          <h3>Nutella® &Go!</h3>
          <div class="price">₱99.00 <span>100.00</span></div>
          <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
          <img class ="juts" src="images/menu-3.png" alt="" />
          <h3>Nutella® Friends Edition</h3>
          <div class="price">₱4,948.55 <span>6,669.56</span></div>
          <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
          <img src="images/menu-4.png" alt="" />
          <h3>Nutella Jr. Juts Edition</h3>
          <div class="price">₱150 <span>99999</span></div>
          <a href="#" class="btn">add to cart</a>
        </div>
      </section>

    <section class="gallery" id="gallery">
      <h1 class="heading"><span>Gallery</span></h1>
    

    <div class="container">

        <input type="radio" name="slider" id="slide-1-trigger" class="trigger">
        <label class="btn" for="slide-1-trigger"></label>
        <input type="radio" name="slider" id="slide-2-trigger" class="trigger">
        <label class="btn" for="slide-2-trigger"></label>
        <input type="radio" name="slider" id="slide-3-trigger" class="trigger">
        <label class="btn" for="slide-3-trigger"></label>
        <input type="radio" name="slider" id="slide-4-trigger" class="trigger">
        <label class="btn" for="slide-4-trigger"></label>

        <div class="slide-wrapper">
            <div id="slide-role">
                <div class="slide slide-1"></div>
                <div class="slide slide-2"></div>
                <div class="slide slide-3"></div>
                <div class="slide slide-4"></div>
            </div>
        </div>
    </div>
      
    </section>

    <section class="footer">
      <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
      </div>

      <div class="credit">
        created by <span>Group 2</span> | all rights reserved ©
      </div>
    </section>

    <script src="js/script.js"></script>
  </body>
</html>


