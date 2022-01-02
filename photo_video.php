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
  <!--MDB-->
     <!-- MDB -->


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
        <a class="navbar-brand" href="#"> <h2 style="color: #002233;">Photo And Videography</h2>      </a>
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
              <a class="nav-link" href="#department"> Departments</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="#AC">AC</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="#Fridge">Refrigerator</a>
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
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="images/photography/New folder/front copy.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/photography/New folder/back copy.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/photography/New folder/2 copy.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

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
  <section id="photography_service">
  <div class="service-section wrapper" >
    <div class="container food-type" style="background-color: black;">
      <div class="row align-items-center" id="wedding_photography">
        <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
          <div class="card border-0">
            <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <video class="img-fluid" autoplay loop muted>
                    <source src="images/Anas Logo (white).mp4" type="video/mp4" />
                  </video>
                </div>
                <div class="carousel-item">
                  <img src="images/party make up air brush 4000.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/bridal make studio 10000.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/airbrush-bridal-makeup-14000.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 text-sec">
          <h2>Wedding Photography </h2>
          <p>Healthy operation and maintenance of your household Electrical appliances by Professionals 
            <br>One-month warranty <br>At your door within one hour.</p>
            <p>Services Offered</p>
            <ul class="list-unstyled py-3">
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
          </ul>
           
          <button class="main-btn mt-4">Checkout For More Service</button>
        </div>
      </div>
    </div>
    <p></p>
    <div class="container food-type" style="background-color: white;">
      <div class="row align-items-center" id="ro_filter">
        <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
          <h2>Pre Wedding</h2>
          <h4 style="color: black;">Look Good, Feel Good</h4>
          <p>Changing the paradigm of your styling over the wide range of bridal to haircut <br> Bringing your stylist at your doorstep</p>
          <ul class="list-unstyled py-3">
            <li>Installation : Rs-199</li>
            <li>Filter Change : Rs-299</li>
          </ul>
          <a class="main-btn mt-4" href="">Checkout For More Services</a>
        </div>
        <div class="col-lg-7 col-md-12">
          <div class="card border-0">
            <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <video class="img-fluid" autoplay loop muted>
                    <source src="images/Anas Logo (white).mp4" type="video/mp4" />
                  </video>
                </div>
                <div class="carousel-item">
                  <img src="images/party make up air brush 4000.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/bridal make studio 10000.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/airbrush-bridal-makeup-14000.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p></p>
    <div class="container food-type" style="background-color: #0a377ade;">
      <div class="row align-items-center" id="cooler">
        <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
          <div class="card border-0">
            <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <video class="img-fluid" autoplay loop muted>
                    <source src="images/Anas Logo (white).mp4" type="video/mp4" />
                  </video>
                </div>
                <div class="carousel-item">
                  <img src="images/party make up air brush 4000.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/bridal make studio 10000.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/airbrush-bridal-makeup-14000.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 text-sec">
          <h2>Post Wedding</h2>
          <p>Longivity enhancement of your cooling and refrigeration systems</p>
          <ul class="list-unstyled py-3">
            <li>Pump Installation : Rs-199</li>
            <li>Grass Change : Rs-499</li>
            <li>Circuit Problem : Rs-69</li>
          </ul>
          <a href = "" class="main-btn mt-4">Checkout For More Services</a>
        </div>
      </div>
    </div>
    <p></p>
    <div class="container food-type" style="background-color: rgb(185, 19, 19);">
      <div class="row align-items-center" id="fan">
        <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
          <h2 style="color: white;">Maternity Shoot</h2>
          <h4 style="color: rgba(20, 19, 19, 0.726);">Capturing Memories</h4>
          <p>Relive your precious moments captured by our Professionals</p>
          <ul class="list-unstyled py-3">
            <li>Installation : Rs-99</li>
            <li>Winding Change : Rs-399</li>
            <li>Portfolio Creation</li>
            <li>Product Photography</li>
          </ul>
          <button class="main-btn mt-4">Checkout For More Services</button>
        </div>
        <div class="col-lg-7 col-md-12">
          <div class="card border-0">
            <div id="carouselExampleIndicators4" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <video class="img-fluid" autoplay loop muted>
                    <source src="images/Anas Logo (white).mp4" type="video/mp4" />
                  </video>
                </div>
                <div class="carousel-item">
                  <img src="images/party make up air brush 4000.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/bridal make studio 10000.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/airbrush-bridal-makeup-14000.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p></p>
    <div class="container food-type" style="background-color: #0a377ade;">
      <div class="row align-items-center" id="geyser">
        <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
          <div class="card border-0">
            <div id="carouselExampleIndicators5" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <video class="img-fluid" autoplay loop muted>
                    <source src="images/Anas Logo (white).mp4" type="video/mp4" />
                  </video>
                </div>
                <div class="carousel-item">
                  <img src="images/party make up air brush 4000.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/bridal make studio 10000.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/airbrush-bridal-makeup-14000.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 text-sec">
          <h2>Short Films</h2>
          <p>Longivity enhancement of your cooling and refrigeration systems</p>
          <ul class="list-unstyled py-3">
            <li>Gas Geyser Installation : Rs-199</li>
            <li>Electric Geyser Installation : Rs-199</li>
            <li>Geyser Rod Change : Rs-199</li>
          </ul>
          <a href = "" class="main-btn mt-4">Checkout For More Services</a>
        </div>
      </div>
    </div>
    <p></p>
    <div class="container food-type" style="background-color: rgb(4, 59, 41);">
      <div class="row align-items-center" id="grinder">
        <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
          <h2 style="color: white;">Fashion Shoots</h2>
          <h4 style="color: rgba(20, 19, 19, 0.726);">Capturing Memories</h4>
          <p>Relive your precious moments captured by our Professionals</p>
          <ul class="list-unstyled py-3">
            <li>Service : Rs-199</li>
          </ul>
          <button class="main-btn mt-4">Checkout For More Services</button>
        </div>
        <div class="col-lg-7 col-md-12">
          <div class="card border-0">
            <div id="carouselExampleIndicators5" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <video class="img-fluid" autoplay loop muted>
                    <source src="images/Anas Logo (white).mp4" type="video/mp4" />
                  </video>
                </div>
                <div class="carousel-item">
                  <img src="images/party make up air brush 4000.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/bridal make studio 10000.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/airbrush-bridal-makeup-14000.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>   
    </div>
</section>
  <!-- Carousel wrapper -->
<a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 <img src="images/camera_icon.jpg" class="img-fluid" style="width: 300px; height: 200px;">
</a>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="ratio ratio-16x9">
          <iframe
            src="https://www.youtube.com/embed/vlDzYIIOYmM"
            title="YouTube video"
            allowfullscreen
          ></iframe>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
  <img src="images/camera_icon.jpg" class="img-fluid" style="width: 300px; height: 200px;">
 </a>
 <!-- Modal -->
 <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
         <button type="button" class="close" data-bs-dismiss="modal1" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <div class="ratio ratio-16x9">
           <iframe
             src="images/airbrush-bridal-makeup-14000.jpg"
             title="YouTube video"
             allowfullscreen
           ></iframe>
         </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary">Save changes</button>
       </div>
     </div>
   </div>
 </div>
<!-- Modal gallery -->
<!-- Carousel wrapper -->


 <!-- MDB -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
  <!-- own js -->
  <script src="js/main1.js"></script>
</body>