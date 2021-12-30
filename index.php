<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <title>Huygens</title>
  <!-- bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <!-- OWN CSS -->
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="CSS/responsive.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
  <!-- header design -->
  <header>
    <nav class="navbar navbar-expand-lg navigation-wrap">
      <div class="container">
        <a class="navbar-brand" href="#"> <h2 style="color: #002233;">HUYGENS</h2>      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <i class="fas fa-stream navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#department">Departments</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact_us">Contact-Us</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="#reviews">Reviews</a>
            </li> 
            <li>
            </li>
            <li><a href = "signup.php" class="main-btn">Join us <i class="fas fa-phone ps-3"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header> 
  
  <!-- section-1 top-banner --> 
  <section id="home">
    <div class="container-fluid px-0 top-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6">
            <h1 style="font-size: 28px;">BEST<br> SERVICE<br><span>IN <br>YOUR CITY</span></h1>
            <h2>At your doorstep</h2>
            <p>*With in one hour</p>
            <div class="mt-4">
              <a class="main-btn" href="tel:713-992-0916">Register Your Service <i class="fas fa-phone ps-3"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- section-1 departments --> 
  <section class="department p-4" id="department">
    <div class = "container text-center">
      <h2><u>Our Departments</u></h2>
      <div class="row">
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="">
              <img src="./images/elec_icon.jpg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#">Electrical</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="salon.php">
              <img src="./images/salon_icon.jpg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="salon.php">Salon And Styling</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="ac_fridge.php">
              <img src="./images/ac_icon.jpg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="ac_fridge.php">AC & Refrigeration</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="">
              <img src="./images/camera_icon.jpg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#">Photography</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="">
              <img src="./images/Coming Soon.jpg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#">Products</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <p></p>
            <p></p>
            <a class="link_category_product" href="">
              <img src="./images/Coming Soon.jpg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#">AI Services</a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
 <!-- section-1 Departments in detail --> 
 <!-- section-3 about--> 
 <section id="service">
  <div class="service-section wrapper">
    <h2 style="text-align: center; color:white;"><u>Explore Our Departments</u></h2>
    <div class="container food-type" style="background-color: black;">
      <div class="row align-items-center">
        <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
          <div class="card border-0">
            <img src="images/img0.jpeg" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-5 col-md-12 text-sec">
          <h2>Electrical Services </h2>
          <p>Healthy operation and maintenance of your household Electrical appliances by Professionals 
            <br>One-month warranty <br>At your door within one hour.</p>
            <p>Services Offered</p>
            <ul class="list-unstyled py-3">
            <li style="color: cadetblue;">
              Washing Machines
            </li >
            <li style="color: cadetblue;">
              Kitchen Appliances
            </li>
            <li style="color: cadetblue;">
              Geysers
            </li>
          </ul>
           
          <button class="main-btn mt-4">Checkout For More Service</button>
        </div>
      </div>
    </div>
    <p></p>
    <div class="container food-type" style="background-color: white;">
      <div class="row align-items-center">
        <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
          <h2>Salon & Styling</h2>
          <h4 style="color: black;">Look Good, Feel Good</h4>
          <p>Changing the paradigm of your styling over the wide range of bridal to haircut <br> Bringing your stylist at your doorstep</p>
          <ul class="list-unstyled py-3">
            <li>Segregated services for both men and women</li>
            <li>Bridal Preparation</li>
            <li>Party styling</li>
            <li>Grooming</li>
          </ul>
          <a class="main-btn mt-4" href="salon.php">Checkout For More Services</a>
        </div>
        <div class="col-lg-7 col-md-12">
          <div class="card border-0">
            <img src="images/party make up air brush 4000.jpeg" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <p></p>
    <div class="container food-type" style="background-color: #0a377ade;">
      <div class="row align-items-center">
        <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
          <div class="card border-0">
            <img src="images/split-ac.jpg" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-5 col-md-12 text-sec">
          <h2>AC & Refrigeration</h2>
          <p>Longivity enhancement of your cooling and refrigeration systems</p>
          <ul class="list-unstyled py-3">
            <li>Window Air Conditioner</li>
            <li>Split Air Conditioner</li>
            <li>Refrigerator</li>
          </ul>
          <a href = "ac_fridge.php" class="main-btn mt-4">Checkout For More Services</a>
        </div>
      </div>
    </div>
    <p></p>
    <div class="container food-type" style="background-color: rgb(185, 19, 19);">
      <div class="row align-items-center">
        <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
          <h2 style="color: white;">Photo And Videography</h2>
          <h4 style="color: rgba(20, 19, 19, 0.726);">Capturing Memories</h4>
          <p>Relive your precious moments captured by our Professionals</p>
          <ul class="list-unstyled py-3">
            <li>Wedding Photo and Videography</li>
            <li>Candid Photography and Videography</li>
            <li>Portfolio Creation</li>
            <li>Product Photography</li>
          </ul>
          <button class="main-btn mt-4">Checkout For More Services</button>
        </div>
        <div class="col-lg-7 col-md-12">
          <div class="card border-0">
            <img src="images/airbrush-bridal-makeup-14000.jpg" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- section-4 explore food--> 


 <!-- Section-5 testimonial--> 
 <section id="about">
 
  <div class="wrapper about-section">
    <div class="container text-center">
      <div class="explore-food wrapper">
        <h2>About Us</h2>
        <div class="container">
          <div class="row pt-5">
            <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
              <div class="card border" style="background-color: aliceblue;">
                <img src="images/grinder.jpeg" class="img-fluid">
                <div class="p-3">
                  <h5>10 Reasons To Do A Digital Detox Challenge</h5>
                  <p>Ac haca ullamcorper donec ante habi tasse donec imperdiet eturpis varius per a augue magna hac. Nec
                    hac…</p>
                  <button class="mt-2 main-btn">Read More</button>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
              <div class="card border" style="background-color: black;">
                <img src="images/geyser.jpeg" class="img-fluid">
                <div class="p-3">
                  <h5>The Ultimate Hangover Burger: Egg in a Hole Burger Grilled Cheese</h5>
                  <p>Ac haca ullamcorper donec ante habi tasse donec imperdiet eturpis varius per a augue magna hac. Nec
                    hac…</p>
                  <button class="mt-2 main-btn">Read More</button>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
              <div class="card border" style="background-color:brown;">
                <img src="images/roomheater.jpeg" class="img-fluid">
                <div class="p-3">
                  <h5>Traditional Soft Pretzels with Sweet Beer Cheese</h5>
                  <p>Ac haca ullamcorper donec ante habi tasse donec imperdiet eturpis varius per a augue magna hac. Nec
                    hac…</p>
                  <button class="mt-2 main-btn">Read More</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h2>Our Team</h2>
      <div class="row">
        <div class="col-sm-12 col-lg-10 offset-lg-1">
          <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="carousel-caption">
                  <img src="images/img28.jpeg">
                  <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. "</p>
                  <h5>Johnthan Doe - UX Designer</h5>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                  <img src="images/img25.jpeg">
                  <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. "</p>
                  <h5>Maccy Doe - Front End</h5>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                  <img src="images/airbrush-bridal-makeup-14000.jpg">
                  <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. "</p>
                  <h5>Johnthan Doe - UX Designer</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<p></p>
<p></p>
<section id="reviews">
  <div class="wrapper review-section">
    <div class="container text-center">
      <div class="text-center pb-4">
        <h2>Reviews</h2>
      </div>
      <div class="row">
        <div class="col-sm-12 col-lg-10 offset-lg-1">
          <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="carousel-caption">
                  <img src="images/img28.jpeg">
                  <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. "</p>
                  <h5>Johnthan Doe - UX Designer</h5>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                  <img src="images/img25.jpeg">
                  <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. "</p>
                  <h5>Maccy Doe - Front End</h5>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                  <img src="images/airbrush-bridal-makeup-14000.jpg">
                  <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. "</p>
                  <h5>Johnthan Doe - UX Designer</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<p></p>
<p></p>
 <!-- section-6 footer--> 
 <section id="contact_us">
 <footer id="footer">
  <div class="footer pt-5" style="background-color: #002233;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <img src="images/logo_small.jpg" class="img-fluid" style="width: 30%;">
          <p></p>
          <div class="footer-social pb-4 text-center">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="footer-copy">
            <div class="copy-right text-center pt-5">
              <p class="text-light">© 2022.HUYGENS. All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</section>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
  <!-- own js -->
  <script src="js/main1.js"></script>
</body>