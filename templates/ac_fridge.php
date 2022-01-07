<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <title>AC & Refrigeration</title>
  <!-- bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <!-- OWN CSS -->
  <link rel="stylesheet" href="../CSS/style1.css">
  <link rel="stylesheet" href="../CSS/responsive.css">
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
        <a class="navbar-brand" href="#"> <h2 style="color: #002233;">AC & Refrigeration</h2>      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <i class="fas fa-stream navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#department"> Departments</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="#AC">AC</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="#Fridge">Refrigerator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="#contact_us">Contact-Us</a>
            </li> 
          </ul>
        </div>
      </div>
    </nav>
  </header> 
<p></p>
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
                
                  <img src="../images/central-air-conditioner.jpg" class="img-fluid">
                  <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. "</p>
                  <h5>Johnthan Doe - UX Designer</h5>
               
              </div>
              <div class="carousel-item">
                  <img src="../images/fridge.jpg" class="img-fluid" style="width: 500px; height:auto;">
                  <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. "</p>
                  <h5>Maccy Doe - Front End</h5>
              </div>
              <div class="carousel-item">
                  <img src="../images/split-ac.jpg" class="img-fluid">
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
              <img src="../images/elec_icon.jpg" class="img-fluid">
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
              <img src="../images/salon_icon.jpg" class="img-fluid">
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
              <img src="../images/ac_icon.jpg" class="img-fluid">
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
              <img src="../images/camera_icon.jpg" class="img-fluid">
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
                <source src="../images/Sequence 01.mp4" type="video/mp4" />
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
                <source src="../images/Sequence 01.mp4" type="video/mp4" />
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
<section class="department p-4" id="AC" style="background-color:#000000">
    <div class = "container text-center">
      <h2><u>Choose Your Air Conditioner</u></h2>
      <div class="row">
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="#windowac">
              <img src="../images/window-ac.jpg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#windowac">Window AC</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="#splitac">
              <img src="../images/split-ac.jpg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#splitac">Split AC</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="">
              <img src="../images/central-air-conditioner.jpg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#">Central AC</a>
            <p>Service currently unavailable</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="">
              <img src="../images/cassette-ac-.jpg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#">cassette AC</a>
            <p>Service currently unavailable</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="">
              <img src="../images/ductable-ac.jpg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#">Ductable AC</a>
            <p>Service currently unavailable</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section class="department p-4" id="Fridge"style="background-color: #FFC222;">
    <div class = "container text-center" >
      <h2><u>Choose your Refrigerator</u></h2>
      <div class="row">
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="">
              <img src="../images/fridge.jpg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#">Inverter Refrigerator</a>
          </div>
        </div>
      </div>
      
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="">
              <img src="../images/non_inverter_fridge.png" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#">Non-Inverter Refrigerator</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-2 mb-4 mb-lg-0">
        <div class = "card">
          <div class="cat-image">
            <a class="link_category_product" href="">
              <img src="../images/deep_freezer.jpg" class="img-fluid">
            </a>
          </div>
          <div class="cat-title">
            <a href="#">Deep Freezer</a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <p></p>
  <p></p>
  <!-- section-1 departments --> 
 <!-- section-1 Departments in detail --> 
 <!-- section-3 about--> 
 <section id="windowac">
  <div class="wrapper about-section">
    <div class="container text-center">
      <div class="explore-food wrapper">
        <h2>Service Offered For Window AC</h2>
        <div class="container">
          
          <div class="row pt-5">
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="../images/winac_service.png" class="img-fluid">
                <div class="p-3">
                    <p></p>
                  <P style="color: #FFC222;">Service</P>
                  <h5 style="color: white;">Rs-<?php echo(299);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="../images/winac_zservice.png" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Z<br>Service</p>
                  <h5 style="color: white;">Rs-<?php echo(499);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="../images/winac_install.jpg" class="img-fluid">
                <div class="p-3">
                    <p></p>
                  <p style="color: #FFC222;">Installation</p>
                  <h5 style="color: white;">Rs-<?php echo(699);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="../images/winac_uninstall.png" class="img-fluid">
                <div class="p-3">
                    <p></p>
                  <p style="color: #FFC222;">Uninstallation</p>
                  <h5 style="color: white;">Rs-<?php echo(299);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="../images/winac_1ton_heating_coil.jpg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">1-Ton Heating Coil (-gas)</p>
                  <h5 style="color: white;">Rs-<?php echo(3499);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="../images/winac_1.5ton_heating_coil.jpg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">1.5-Ton Heating Coil (-gas)</p>
                  <h5 style="color: white;">Rs-<?php echo(3999);?></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-5">
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="../images/winac_2ton_heating_coil.jpg" class="img-fluid">
                <div class="p-3">
                  <P style="color: #FFC222;">2-Ton Heating Coil (-gas)</P>
                  <h5 style="color: white;">Rs-<?php echo(5499);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="../images/winac_cooling-coils.jpg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">1.5-Ton Cooling <br>Coil</p>
                  <h5 style="color: white;">Rs-<?php echo(4499);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="../images/winac_cooling_2-coil.jpg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">2-Ton Cooling <br>Coil</p>
                  <h5 style="color: white;">Rs-<?php echo(5999);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="../images/winac_capillary.jpg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Capillary <br>Change</p>
                  <h5 style="color: white;">Rs-<?php echo(449);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="../images/winac_PCB.jpg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">PCB<br> Repair</p>
                  <h5 style="color: white;">Rs-<?php echo(1199);?></h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
                <div class="card border" style="background-color: #002233;">
                  <img src="../images/winac_gas.png" class="img-fluid">
                  <div class="p-3">
                    <p style="color: #FFC222;">Gas <br>Change</p>
                    <h5 style="color: white;">Rs-<?php echo(1999);?></h5>
                  </div>
                </div>
            </div>
         </div>
          <div class="row pt-5">
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
                <div class="card border" style="background-color: #002233;">
                  <img src="../images/winac_capacitor.jpg" class="img-fluid">
                  <div class="p-3">
                    <p style="color: #FFC222;">Capacitor<br> Change</p>
                    <h5 style="color: white;">Rs-<?php echo(599);?></h5>
                  </div>
                </div>
              </div>
            <div class="col-6 col-sm-2 mb-4 mb-lg-0">
              <div class="card border" style="background-color: #002233;">
                <img src="../images/winac_fanmotor.jpg" class="img-fluid">
                <div class="p-3">
                  <p style="color: #FFC222;">Fan Motor <br>Change</p>
                  <h5 style="color: white;">Rs-<?php echo(2799);?></h5>
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
<section id="splitac">
  <div class="wrapper about-section" style="background-color: #FFC222;">
    <div class="container text-center" style="background-color: #FFC222;">
      <div class="explore-food wrapper">
        <h2 style="color: black;">Service Offered For Split AC</h2>
        <div class="container">
          
            <div class="row pt-5">
              <div class="col-6 col-sm-2 mb-4 mb-lg-0">
                <div class="card border" style="background-color: #002233;">
                  <img src="../images/spac_service.jpg" class="img-fluid">
                  <div class="p-3">
                      <p></p>
                    <P style="color: #FFC222;">Service</P>
                    <h5 style="color: white;">Rs-<?php echo(299);?></h5>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-2 mb-4 mb-lg-0">
                <div class="card border" style="background-color: #002233;">
                  <img src="../images/spac_zservice.jpg" class="img-fluid">
                  <div class="p-3">
                    <p style="color: #FFC222;">Z<br>Service</p>
                    <h5 style="color: white;">Rs-<?php echo(499);?></h5>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-2 mb-4 mb-lg-0">
                <div class="card border" style="background-color: #002233;">
                  <img src="../images/spac_install.jpg" class="img-fluid">
                  <div class="p-3">
                      <p></p>
                    <p style="color: #FFC222;">Installation</p>
                    <h5 style="color: white;">Rs-<?php echo(1499);?></h5>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-2 mb-4 mb-lg-0">
                <div class="card border" style="background-color: #002233;">
                  <img src="../images/spac_uninstall.jpg" class="img-fluid">
                  <div class="p-3">
                      <p></p>
                    <p style="color: #FFC222;">Uninstallation</p>
                    <h5 style="color: white;">Rs-<?php echo(699);?></h5>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-2 mb-4 mb-lg-0">
                <div class="card border" style="background-color: #002233;">
                  <img src="../images/spac_1ton_heating_coil.jpg" class="img-fluid">
                  <div class="p-3">
                    <p style="color: #FFC222;">1-Ton Heating Coil (-gas)</p>
                    <h5 style="color: white;">Rs-<?php echo(3499);?></h5>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-2 mb-4 mb-lg-0">
                <div class="card border" style="background-color: #002233;">
                  <img src="../images/winac_1ton_heating_coil.jpg" class="img-fluid">
                  <div class="p-3">
                    <p style="color: #FFC222;">1.5-Ton Heating Coil (-gas)</p>
                    <h5 style="color: white;">Rs-<?php echo(3999);?></h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="row pt-5">
              <div class="col-6 col-sm-2 mb-4 mb-lg-0">
                <div class="card border" style="background-color: #002233;">
                  <img src="../images/winac_1.5ton_heating_coil.jpg" class="img-fluid">
                  <div class="p-3">
                    <P style="color: #FFC222;">2-Ton Heating Coil (-gas)</P>
                    <h5 style="color: white;">Rs-<?php echo(5499);?></h5>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-2 mb-4 mb-lg-0">
                <div class="card border" style="background-color: #002233;">
                  <img src="../images/spac_coolingcoil_1.5.jpg" class="img-fluid">
                  <div class="p-3">
                    <p style="color: #FFC222;">1.5-Ton Cooling <br>Coil</p>
                    <h5 style="color: white;">Rs-<?php echo(4499);?></h5>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-2 mb-4 mb-lg-0">
                <div class="card border" style="background-color: #002233;">
                  <img src="../images/spac_coolingcoil_2.jpg" class="img-fluid">
                  <div class="p-3">
                    <p style="color: #FFC222;">2-Ton Cooling <br>Coil</p>
                    <h5 style="color: white;">Rs-<?php echo(5999);?></h5>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-2 mb-4 mb-lg-0">
                <div class="card border" style="background-color: #002233;">
                  <img src="../images/spac_capillary.jpg" class="img-fluid">
                  <div class="p-3">
                    <p style="color: #FFC222;">Capillary <br>Change</p>
                    <h5 style="color: white;">Rs-<?php echo(449);?></h5>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-2 mb-4 mb-lg-0">
                <div class="card border" style="background-color: #002233;">
                  <img src="../images/spac_PCB.jpg" class="img-fluid">
                  <div class="p-3">
                    <p style="color: #FFC222;">PCB<br> Repair</p>
                    <h5 style="color: white;">Rs-<?php echo(1199);?></h5>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-2 mb-4 mb-lg-0">
                  <div class="card border" style="background-color: #002233;">
                    <img src="../images/spac_gas.jpg" class="img-fluid">
                    <div class="p-3">
                      <p style="color: #FFC222;">Gas <br>Change</p>
                      <h5 style="color: white;">Rs-<?php echo(1999);?></h5>
                    </div>
                  </div>
              </div>
           </div>
            <div class="row pt-5">
              <div class="col-6 col-sm-2 mb-4 mb-lg-0">
                  <div class="card border" style="background-color: #002233;">
                    <img src="../images/spac_capacitor.jpg" class="img-fluid">
                    <div class="p-3">
                      <p style="color: #FFC222;">Capacitor<br> Change</p>
                      <h5 style="color: white;">Rs-<?php echo(599);?></h5>
                    </div>
                  </div>
                </div>
              <div class="col-6 col-sm-2 mb-4 mb-lg-0">
                <div class="card border" style="background-color: #002233;">
                  <img src="../images/spac_fan_indoor.jpg" class="img-fluid">
                  <div class="p-3">
                    <p style="color: #FFC222;">Indoor Fan Motor Change</p>
                    <h5 style="color: white;">Rs-<?php echo(3399);?></h5>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-2 mb-4 mb-lg-0">
                <div class="card border" style="background-color: #002233;">
                  <img src="../images/spac_fan_outdoor.jpg" class="img-fluid">
                  <div class="p-3">
                    <p style="color: #FFC222;">Outdoor Motor Change</p>
                    <h5 style="color: white;">Rs-<?php echo(1799);?></h5>
                  </div>
                </div>
              </div>
            </div>  
          </div>
    </div>
  </div>
</section>
<!-- section-4 explore food--> 

<section id="service">
  <div class="service-section wrapper" >
    <div class="container food-type" style="background-color: black;">
      <div class="row align-items-center" id="washing_machine">
        <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
          <div class="card border-0">
            <img src="../images/fridge.jpg" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-5 col-md-12 text-sec">
          <h2>Inverter Refrigerator </h2>
            <p>Services Offered</p>
            <ul class="list-unstyled py-3">
              <li style="color: cadetblue;">
                Inverter Fridge Service : Rs-399
              </li >
            <li style="color: cadetblue;">
             Inverter Fridge Gas Service : Rs-1799
            </li >
          </ul>
        </div>
      </div>
    </div>
    <p></p>
    <div class="container food-type" style="background-color: white;">
      <div class="row align-items-center" id="ro_filter">
        <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
          <h2>Non-Inverter Refrigerator</h2>
          <p>Services Offered</p>
          <ul class="list-unstyled py-3">
            <li>Non-Inverter Fridge Service : Rs-399</li>
            <li>Non-Inverter Gas Service : Rs-1199</li>
          </ul>
         
        </div>
        <div class="col-lg-7 col-md-12">
          <div class="card border-0">
            <img src="../images/non_inverter_fridge.png" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <div class="container food-type" style="background-color: black;">
      <div class="row align-items-center" id="washing_machine">
        <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
          <div class="card border-0">
            <img src="../images/deep_freezer.jpg" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-5 col-md-12 text-sec">
          <h2>Deep Freezer </h2>
            <p>Services Offered</p>
            <ul class="list-unstyled py-3">
              <li style="color: cadetblue;">
                Deep Freezer Service : Rs-549
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
  </div>
</section>

 <!-- Section-5 testimonial--> 


<p></p>
<p></p>
 <!-- section-6 footer--> 
 <section id="contact_us">
 <footer id="footer" >
  <div class="footer pt-5" style="background-color: #002233;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <img src="../images/logo_small.jpg" class="img-fluid" style="width: 30%;">
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
  <script src="../js/main1.js"></script>
</body>