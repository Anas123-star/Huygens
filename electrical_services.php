<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <title>Electrical Services</title>
  <!-- bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <!-- OWN CSS -->
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="CSS/responsive.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
  
<div class="fixed-bottom"> 
  <div class="call_now"><a class="main-btn" href="tel:713-992-0916" 
    style="border-radius:10%;padding: 10px; font-size: 14px; color:white; background-color:#002233;" >
    <i class="fa fa-phone-alt fa-20px"></i> Call Now</a>
  </div>
</div>
  <header>
    <nav class="navbar navbar-expand-lg navigation-wrap">
      <div class="container">
        <a class="navbar-brand" href="#"> <h2 style="color: #002233;">Electrical Services</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <i class="fas fa-stream navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#department">Departments</a>
              </li> 
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="#contact_us">Contact-Us</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="#reviews">Reviews</a>
            </li> 
            <li><button class="main-btn">1200 345 123 <i class="fas fa-phone ps-3"></i></button></li>
          </ul>
        </div>
      </div>
    </nav>
  </header> 
<p></p>

  <!-- section-1 top-banner --> 
  <section id="salon_bg">
  <div class="wrapper salon_bg-section">
    <div class="container text-center">
      <div class="text-center pb-4">
        <h2>Huygens</h2>
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
                
                  <img src="images/img0.jpeg" class="img-fluid">
                  <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. "</p>
                  <h5>Johnthan Doe - UX Designer</h5>
               
              </div>
              <div class="carousel-item">
                  <img src="images/img1.jpeg" class="img-fluid" style="width: 500px; height:auto;">
                  <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. "</p>
                  <h5>Maccy Doe - Front End</h5>
              </div>
              <div class="carousel-item">
                  <img src="images/roomheater.jpeg" class="img-fluid">
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
</section>
<section class="department p-4" id="department">
    <div class = "container text-center">
      <h2><u>Our Departments</u></h2>
      <div class="row">
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="electrical_services.php">
              <img src="./images/elec_icon.jpg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="electrical_services.html">Electrical</a>
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
            <a class="link_category_product" href="photo_video.php">
              <img src="./images/camera_icon.jpg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="photo_video.html">Photography</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="">
              <video class="img-fluid" autoplay loop muted>
                <source src="images/Sequence 01.mp4" type="video/mp4" />
              </video>
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
            <a class="link_category_product" href="">
              <video class="img-fluid" autoplay loop muted>
                <source src="images/Sequence 01.mp4" type="video/mp4" />
              </video>
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
<p></p>
<p></p>
<p></p>
<section class="department p-4" id="appliances">
    <div class = "container text-center">
      <h2><u>Choose Your Appliances</u></h2>
      <div class="row">
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="#washing_machine">
              <img src="./images/washing_machine.jpg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#washing_machine">Washing Machine</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="#ro_filter">
              <img src="./images/ro.jpeg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#ro_filter">RO & Filter</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="#cooler">
              <img src="./images/cooler.jpeg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#cooler">Cooler</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="#fan">
              <img src="./images/fan.jpeg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#fan">Fan</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="#geyser">
              <img src="./images/geyser.jpeg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#geyser">Geyser</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="#grinder">
              <img src="./images/grinder.jpeg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#grinder">Grinder</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-6 col-sm-2 mb-4 mb-lg-0">
          <div class = "card">
            <div class="cat-image">
              <a class="link_category_product" href="#room_heater">
                <img src="./images/roomheater.jpeg" class="img-fluid">
              </a>
            </div>
            <div class="cat-title">
              <a href="#room_heater">Room Heater</a>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-2 mb-4 mb-lg-0">
          <div class = "card">
            <div class="cat-image">
              <a class="link_category_product" href="#inverter">
                <img src="./images/inverter.jpeg" class="img-fluid">
              </a>
            </div>
            <div class="cat-title">
              <a href="#inverter">Inverter</a>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-2 mb-4 mb-lg-0">
          <div class = "card">
            <div class="cat-image">
              <a class="link_category_product" href="#microwave">
                <img src="./images/microwave.jpeg" class="img-fluid">
              </a>
            </div>
            <div class="cat-title">
              <a href="#microwave">Microwave</a>
            </div>
          </div>
        </div>
     
      </div>
    </div>
  </section>
  <section id="service">
    <div class="service-section wrapper" >
      <div class="container food-type" style="background-color: black;">
        <div class="row align-items-center" id="washing_machine">
          <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
            <div class="card border-0">
              <img src="images/washing_machine.jpg" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-5 col-md-12 text-sec">
            <h2>Washing Machines </h2>
              <p>Services Offered</p>
              <ul class="list-unstyled py-3">
                <li style="color: cadetblue;">
                  Fully automatic washing machine service : Rs-599
                </li >
              <li style="color: cadetblue;">
                Belt Change : Rs-199
              </li >
              <li style="color: cadetblue;">
                Cleaning : Rs-199
              </li>
              <li style="color: cadetblue;">
                Motor Change : Rs-199
              </li>
              <li style="color: cadetblue;">
                Dryer Service : Rs-199
              </li>
              <li style="color: cadetblue;">
                Timer Service : Rs-199
              </li>
              <li style="color: cadetblue;">
                Gear box Service : Rs-199
              </li>
              <li style="color: cadetblue;">
                Pulsator Service : Rs-199
              </li>
            </ul>
          </div>
        </div>
      </div>
      <p></p>
      <div class="container food-type" style="background-color: white;">
        <div class="row align-items-center" id="ro_filter">
          <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
            <h2>RO & Filter</h2>
            <p>Services Offered</p>
            <ul class="list-unstyled py-3">
              <li>Installation : Rs-199</li>
              <li>Filter Change : Rs-299</li>
            </ul>
           
          </div>
          <div class="col-lg-7 col-md-12">
            <div class="card border-0">
              <img src="images/ro.jpeg" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
      <p></p>
      <div class="container food-type" style="background-color: #0a377ade;">
        <div class="row align-items-center" id="cooler">
          <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
            <div class="card border-0">
              <img src="images/cooler.jpeg" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-5 col-md-12 text-sec">
            <h2>Cooler</h2>
            <p>Services Offered</p>
            <ul class="list-unstyled py-3">
              <li>Pump Installation : Rs-199</li>
              <li>Grass Change : Rs-499</li>
              <li>Circuit Problem : Rs-69</li>
            </ul>
           
          </div>
        </div>
      </div>
      <p></p>
      <div class="container food-type" style="background-color: rgb(185, 19, 19);">
        <div class="row align-items-center" id="fan">
          <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
            <h2 style="color: white;">Fan</h2>
            <p>Services Offered</p>
            <ul class="list-unstyled py-3">
              <li>Installation : Rs-99</li>
              <li>Winding Change : Rs-399</li>
              <li>Portfolio Creation</li>
              <li>Product Photography</li>
            </ul>
            
          </div>
          <div class="col-lg-7 col-md-12">
            <div class="card border-0">
              <img src="images/fan.jpeg" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
      <p></p>
      <div class="container food-type" style="background-color: #0a377ade;">
        <div class="row align-items-center" id="geyser">
          <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
            <div class="card border-0">
              <img src="images/geyser.jpeg" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-5 col-md-12 text-sec">
            <h2>Geyser</h2>
            <p>Services Offered</p>
            <ul class="list-unstyled py-3">
              
              <li>Gas Geyser Service : Rs-199</li>
              <li>Gas Geyser Installation : Rs-299</li>
              <li>Electric Geyser Installation : Rs-299</li>
              <li>Geyser Rod Service : Rs-199</li>
            </ul>
         
          </div>
        </div>
      </div>
      <p></p>
      <div class="container food-type" style="background-color: rgb(4, 59, 41);">
        <div class="row align-items-center" id="grinder">
          <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
            <h2 style="color: white;">Grinder</h2>
            <p>Services Offered</p>
            <ul class="list-unstyled py-3">
              <li>Service : Rs-199</li>
            </ul>
          </div>
          <div class="col-lg-7 col-md-12">
            <div class="card border-0">
              <img src="images/grinder.jpeg" class="img-fluid">
            </div>
          </div>
        </div>
      </div>   
      <p></p>
      <div class="container food-type" style="background-color: #0a377ade;">
        <div class="row align-items-center" id="room_heater">
          <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
            <div class="card border-0">
              <img src="images/roomheater.jpeg" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-5 col-md-12 text-sec">
            <h2>Room Heater</h2>
            <p>Services Offered</p>
            <ul class="list-unstyled py-3">
              <li>Rates will be decided at the time of service</li>
            </ul>
          </div>
        </div>
      </div>
      <p></p>
      <div class="container food-type" style="background-color: rgb(11, 2, 43);">
        <div class="row align-items-center" id="inverter">
          <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
            <h2 style="color: white;">Inverter</h2>
            <p>Services Offered</p>
            <ul class="list-unstyled py-3">
              <li>Installation : Rs-499</li>
              <li>Repair Charge : ?</li>
              <li>Wiring Fault Connection : ?</li>
            </ul>
          </div>
          <div class="col-lg-7 col-md-12">
            <div class="card border-0">
              <img src="images/inverter.jpeg" class="img-fluid">
            </div>
          </div>
        </div>
      </div>  
         
      <p></p>
      <div class="container food-type" style="background-color: #b91c00de;">
        <div class="row align-items-center" id="microwave">
          <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
            <div class="card border-0">
              <img src="images/microwave.jpeg" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-5 col-md-12 text-sec">
            <h2>Microwave</h2>
            <ul class="list-unstyled py-3">
              <li>Service : Rs-349</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <p></p>
  <p></p>
  <!-- section-1 departments --> 
 <!-- section-1 Departments in detail --> 

<!-- section-4 explore food--> 


 <!-- Section-5 testimonial--> 

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
 <footer id="footer" >
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
              <p class="text-light">© 2022. HUYGENS. All rights reserved.</p>
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