<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <title>Salon & Styling</title>
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
  <!-- header design -->
  <header>
    <nav class="navbar navbar-expand-lg navigation-wrap">
      <div class="container">
        <a class="navbar-brand" href="#"> <h2 style="color: #002233;">Salon & Styling</h2> </a>
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
              <a class="nav-link" href="#men">Men</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="#women">Women</a>
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
          </ul>
        </div>
      </div>
    </nav>
  </header> 

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
                
                  <img src="images/party make up air brush 4000.jpeg" class="img-fluid">
                  <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. "</p>
                  <h5>Johnthan Doe - UX Designer</h5>
               
              </div>
              <div class="carousel-item">
                  <img src="images/party make up studio hd 3000.jpeg" class="img-fluid">
                  <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. "</p>
                  <h5>Maccy Doe - Front End</h5>
              </div>
              <div class="carousel-item">
                  <img src="images/airbrush-bridal-makeup-14000.jpg" class="img-fluid" style="width: 500px;">
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
 <p></p>
 <p></p>
  
  <!-- section-1 departments -->
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
 <!-- section-1 Departments in detail --> 
 <!-- section-3 about--> 
 <section id="women">
  <div class="wrapper about-section">
    <div class="container text-center">
      <div class="explore-food wrapper">
        <h2>Women</h2>
        <div class="container">
          
          <div class="row pt-5">
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/airbrush-bridal-makeup-14000.jpg" class="img-fluid">
                <div class="p-3">
                  <P style="color: #FFC222;">Air Brush Bridal Makeup</P>
                  <h5 style="color: white;">Rs-<?php echo(13999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/bridal make studio 10000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Bridal Make Studio</p>
                  <h5 style="color: white;">Rs-<?php echo(9999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/ceralin make up bridal 7000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Ceralin Bridal Makeup</p>
                  <h5 style="color: white;">Rs-<?php echo(6999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/party make up air brush 4000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Party Makeup Airbrush</p>
                  <h5 style="color: white;">Rs-<?php echo(3999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/party make up studio hd 3000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Party Makeup Studio</p>
                  <h5 style="color: white;">Rs-<?php echo(2999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/ceralin party make up 2000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Party Makeup Studio</p>
                  <h5 style="color: white;">Rs-<?php echo(1999);?></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-5">
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/Hair cut base 500.jpeg" class="img-fluid">
                <div class="p-3">
                  <P style="color: #FFC222;">Hair Cut<br> Base</P>
                  <h5 style="color: white;">Rs-<?php echo(499);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/Smoothening shoulder length  4500.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Hair Smoothening</p>
                  <h5 style="color: white;">Rs-<?php echo(4499);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/Rebonding 5000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Hair <br>Rebonding</p>
                  <h5 style="color: white;">Rs-<?php echo(4999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/keratin shoulder length 6000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Keratin: Shoulder Lengthh</p>
                  <h5 style="color: white;">Rs-<?php echo(5999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/hair color matrix 2500.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Hair Color <br>Matrix</p>
                  <h5 style="color: white;">Rs-<?php echo(2499);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/hair high light 3000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Hair <br>Highlight</p>
                  <h5 style="color: white;">Rs-<?php echo(2999);?></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-5">
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/hair spa length according 15000.jpeg" class="img-fluid">
                <div class="p-3">
                  <P style="color: #FFC222;">Hair<br> Spa</P>
                  <h5 style="color: white;">Rs-<?php echo(14999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/Smoothening shoulder length  4500.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Hair Smoothening</p>
                  <h5 style="color: white;">Rs-<?php echo(4499);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/scalp treatment 2000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Scalp<br>Treatment</p>
                  <h5 style="color: white;">Rs-<?php echo(1999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/hair wig.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Hair<br>Wig</p>
                  <h5 style="color: white;">Rs-<?php echo(14999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/head massage 300.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Head<br>Massage</p>
                  <h5 style="color: white;">Rs-<?php echo(299);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/eye brow and upper lips.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Eyebrow <br>and Upper Lips</p>
                  <h5 style="color: white;">Rs-<?php echo(49);?></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-5">
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/face bleach 350.jpeg" class="img-fluid">
                <div class="p-3">
                  <P style="color: #FFC222;">Face<br>Bleach</P>
                  <h5 style="color: white;">Rs-<?php echo(349);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/d tan vlcc 500.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">D Tan <br>VLCC</p>
                  <h5 style="color: white;">Rs-<?php echo(499);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/d tan sara 1000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">D Tan<br>Sara</p>
                  <h5 style="color: white;">Rs-<?php echo(999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/herbal facial 700.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Herbal<br>Facial</p>
                  <h5 style="color: white;">Rs-<?php echo(699);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/lotus facial.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Lotus<br>Facial</p>
                  <h5 style="color: white;">Rs-<?php echo(999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/o3 facial 3000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">O3<br>Facial</p>
                  <h5 style="color: white;">Rs-<?php echo(2999);?></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-5">
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/body wax 2000.jpeg" class="img-fluid">
                <div class="p-3">
                  <P style="color: #FFC222;">Body<br>Wax</P>
                  <h5 style="color: white;">Rs-<?php echo(1999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/body bleach 2000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Body<br>Bleach</p>
                  <h5 style="color: white;">Rs-<?php echo(1999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/body massage 1500.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Body<br>Massage</p>
                  <h5 style="color: white;">Rs-<?php echo(1499);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/body polishing 2500.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Body<br>Polishing</p>
                  <h5 style="color: white;">Rs-<?php echo(2499);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/pedicure 700.jpeg" class="img-fluid">
                <div class="p-3">
                  <p></p>
                  <p style="color: #FFC222;">Pedicure</p>
                  <h5 style="color: white;">Rs-<?php echo(999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/manicure 500.jpeg" class="img-fluid">
                <div class="p-3">
                  <p></p>
                  <p style="color: #FFC222;">Manicure</p>
                  <h5 style="color: white;">Rs-<?php echo(499);?></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-5">
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/casmara facial 4000.jpeg" class="img-fluid">
                <div class="p-3">
                  <P style="color: #FFC222;">Casmara<br>Facial</P>
                  <h5 style="color: white;">Rs-<?php echo(3999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/vlcc facial 1200.jpg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">VLCC<br>Facial</p>
                  <h5 style="color: white;">Rs-<?php echo(1199);?></h5>
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
<section id="men">
  <div class="wrapper about-section" style="background-color: #FFC222;">
    <div class="container text-center" style="background-color: #FFC222;">
      <div class="explore-food wrapper">
        <h2>Men</h2>
        <div class="container">
          
          <div class="row pt-5">
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/mHaircut_man 150.jpeg" class="img-fluid">
                <div class="p-3">
                  <p></p>
                  <P style="color: #FFC222;">Hair Cut</P>
                  <h5 style="color: white;">Rs-<?php echo(149);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/mhair color matrix for men 500.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Hair Color<br>Matrix</p>
                  <h5 style="color: white;">Rs-<?php echo(499);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/mhair spa for men 1000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Hair<br>Spa</p>
                  <h5 style="color: white;">Rs-<?php echo(999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/scalp treatment for men 1000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Scalp<br>Treatment</p>
                  <h5 style="color: white;">Rs-<?php echo(999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/mhair highlight for men 1000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Hair<br>Highlight</p>
                  <h5 style="color: white;">Rs-<?php echo(999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/mhair wig for men  7000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Hair<br>Wig</p>
                  <h5 style="color: white;">Rs-<?php echo(6999);?></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-5">
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/mhead massage for men 200.jpeg" class="img-fluid">
                <div class="p-3">
                  <P style="color: #FFC222;">Head<br>Massage</P>
                  <h5 style="color: white;">Rs-<?php echo(199);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/shaving -100.jpeg" class="img-fluid">
                <div class="p-3">
                  <p></p>
                  <p style="color: #FFC222;">Shaving</p>
                  <h5 style="color: white;">Rs-<?php echo(99);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/mface bleach for men 350.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Face<br>Bleach</p>
                  <h5 style="color: white;">Rs-<?php echo(349);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/d tan vlcc 500.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">D Tan<br>VLCC</p>
                  <h5 style="color: white;">Rs-<?php echo(5999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/d tan sara 1000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">D Tan<br>Sara</p>
                  <h5 style="color: white;">Rs-<?php echo(999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/mHerbal Facial men 700.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Herbal<br>Facial</p>
                  <h5 style="color: white;">Rs-<?php echo(699);?></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-5">
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/mLotus facial men 1000.jpeg" class="img-fluid">
                <div class="p-3">
                  <P style="color: #FFC222;">Lotus<br>Facial</P>
                  <h5 style="color: white;">Rs-<?php echo(9999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/mo3 facial 3000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">O3 <br>Facial</p>
                  <h5 style="color: white;">Rs-<?php echo(2999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/mcasmara facial 4000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Casmara<br>Facial</p>
                  <h5 style="color: white;">Rs-<?php echo(3999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/mvlcc facial 1200.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">VLCC<br>Facial</p>
                  <h5 style="color: white;">Rs-<?php echo(1199);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/mbody massage 15000.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Boy<br>Massage</p>
                  <h5 style="color: white;">Rs-<?php echo(1499);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/mbody polishing 2500.jpeg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Body<br>Polishing</p>
                  <h5 style="color: white;">Rs-<?php echo(2499);?></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-5">
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/mmanicure 500.jpeg" class="img-fluid">
                <div class="p-3">
                  <p></p>
                  <P style="color: #FFC222;">Manicure</P>
                  <h5 style="color: white;">Rs-<?php echo(499);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="images/mpedicure 700.jpeg" class="img-fluid">
                <div class="p-3">
                  <p></p>
                  <p style="color: #FFC222;">Pedicure</p>
                  <h5 style="color: white;">Rs-<?php echo(699);?></h5>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- section-4 explore food--> 


 <!-- Section-5 testimonial--> 

<p></p>
<p></p>
<section id="reviews">
  <div class="wrapper review-section">
    <div class="container text-center">
      <div class="text-center pb-4">
        <h2>Salon & Styling</h2>
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