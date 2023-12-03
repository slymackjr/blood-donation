<?php

use App\classes\HospitalOfficer;

require_once"classes/HospitalOfficer.php";
require_once"classes/DBManager.php";

$officer = new HospitalOfficer();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blood Donation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="custom/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  </head>
  <body>
      <div class="text-center p-3 container-md ">
        <img src="img/logo1.png" class="h-25 w-50 rounded" alt="...">
      </div>
      <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active ps-4 pe-4 text-white" aria-current="page" href="#"><i class="fa-solid fa-house p-2"></i>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  ps-4 pe-4 text-white" href="#"><i class="fa-solid fa-list p-2"></i>Requests</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  ps-4 pe-4 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-calendar-check p-2"></i>  Appointments
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  ps-4 pe-4 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-info p-2"></i>  About Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  ps-4 pe-4 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-phone p-2"></i>  Contact Us
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                data-mdb-toggle="dropdown" aria-expanded="false"> <i class="fas fa-user mx-1"></i> Profile </a>
                <!-- Dropdown menu -->
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="#">My account</a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">Log out</a>
                    </li>
                </ul>
            </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success text-white" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
        <div id="carouselExample" class="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active p-2">
              <div class="card border-white rounded-4 trasparent">
                <!-- <div class="img-wrapper">
                  <img src="img/status.png" height="300" alt="...">
                </div> -->
                <div class="card-body">
                  <h5 class="card-title text-center">DONOR</h5>
                  <p class="card-text"><Span>NAME: </Span>Michael Joel</p>
                  <p class="card-text"><Span>GENDER: </Span>Male</p>
                  <p class="card-text"><Span>LOCATION: </Span>Tegeta kibaoni</p>
                  <p class="card-text"><Span>BLOOD GROUP: </Span>A+</p>
                  <p class="card-text"><Span>HEALTH: </Span>Good</p>
                  <p class="card-text text-center"><a href="#" class="link-secondary">More...</a></p>
                  <p class="card-text text-center"><a href="#" class="btn btn-primary">Request</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item p-2">
              <div class="card border-white rounded-4 trasparent">
                <!-- <div class="img-wrapper">
                  <img src="img/status.png" height="300" alt="...">
                </div> -->
                <div class="card-body">
                  <h5 class="card-title text-center">DONOR</h5>
                  <p class="card-text"><Span>NAME: </Span>Michael Joel</p>
                  <p class="card-text"><Span>GENDER: </Span>Male</p>
                  <p class="card-text"><Span>LOCATION: </Span>Tegeta kibaoni</p>
                  <p class="card-text"><Span>BLOOD GROUP: </Span>A+</p>
                  <p class="card-text"><Span>HEALTH: </Span>Good</p>
                  <p class="card-text text-center"><a href="#" class="link-secondary">More...</a></p>
                  <p class="card-text text-center"><a href="#" class="btn btn-primary">Request</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item p-2">
              <div class="card border-white rounded-4 trasparent">
                <!-- <div class="img-wrapper">
                  <img src="img/status.png" height="300" alt="...">
                </div> -->
                <div class="card-body">
                  <h5 class="card-title text-center">DONOR</h5>
                  <p class="card-text"><Span>NAME: </Span>Michael Joel</p>
                  <p class="card-text"><Span>GENDER: </Span>Male</p>
                  <p class="card-text"><Span>LOCATION: </Span>Tegeta kibaoni</p>
                  <p class="card-text"><Span>BLOOD GROUP: </Span>A+</p>
                  <p class="card-text"><Span>HEALTH: </Span>Good</p>
                  <p class="card-text text-center"><a href="#" class="link-secondary">More...</a></p>
                  <p class="card-text text-center"><a href="#" class="btn btn-primary">Request</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item p-2">
              <div class="card border-white rounded-4 trasparent">
                <!-- <div class="img-wrapper">
                  <img src="img/status.png" height="300" alt="...">
                </div> -->
                <div class="card-body">
                  <h5 class="card-title text-center">DONOR</h5>
                  <p class="card-text"><Span>NAME: </Span>Michael Joel</p>
                  <p class="card-text"><Span>GENDER: </Span>Male</p>
                  <p class="card-text"><Span>LOCATION: </Span>Tegeta kibaoni</p>
                  <p class="card-text"><Span>BLOOD GROUP: </Span>A+</p>
                  <p class="card-text"><Span>HEALTH: </Span>Good</p>
                  <p class="card-text text-center"><a href="#" class="link-secondary">More...</a></p>
                  <p class="card-text text-center"><a href="#" class="btn btn-primary">Request</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item p-2">
              <div class="card border-white rounded-4 trasparent">
                <!-- <div class="img-wrapper">
                  <img src="img/status.png" height="300" alt="...">
                </div> -->
                <div class="card-body">
                  <h5 class="card-title text-center">DONOR</h5>
                  <p class="card-text"><Span>NAME: </Span>Michael Joel</p>
                  <p class="card-text"><Span>GENDER: </Span>Male</p>
                  <p class="card-text"><Span>LOCATION: </Span>Tegeta kibaoni</p>
                  <p class="card-text"><Span>BLOOD GROUP: </Span>A+</p>
                  <p class="card-text"><Span>HEALTH: </Span>Good</p>
                  <p class="card-text text-center"><a href="#" class="link-secondary">More...</a></p>
                  <p class="card-text text-center"><a href="#" class="btn btn-primary">Request</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item p-2">
              <div class="card border-white rounded-4 trasparent">
                <!-- <div class="img-wrapper">
                  <img src="img/status.png" height="300" alt="...">
                </div> -->
                <div class="card-body">
                  <h5 class="card-title text-center">DONOR</h5>
                  <p class="card-text"><Span>NAME: </Span>Michael Joel</p>
                  <p class="card-text"><Span>GENDER: </Span>Male</p>
                  <p class="card-text"><Span>LOCATION: </Span>Tegeta kibaoni</p>
                  <p class="card-text"><Span>BLOOD GROUP: </Span>A+</p>
                  <p class="card-text"><Span>HEALTH: </Span>Good</p>
                  <p class="card-text text-center"><a href="#" class="link-secondary">More...</a></p>
                  <p class="card-text text-center"><a href="#" class="btn btn-primary">Request</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item p-2">
              <div class="card border-white rounded-4 trasparent">
                <!-- <div class="img-wrapper">
                  <img src="img/status.png" height="300" alt="...">
                </div> -->
                <div class="card-body">
                  <h5 class="card-title text-center">DONOR</h5>
                  <p class="card-text"><Span>NAME: </Span>Michael Joel</p>
                  <p class="card-text"><Span>GENDER: </Span>Male</p>
                  <p class="card-text"><Span>LOCATION: </Span>Tegeta kibaoni</p>
                  <p class="card-text"><Span>BLOOD GROUP: </Span>A+</p>
                  <p class="card-text"><Span>HEALTH: </Span>Good</p>
                  <p class="card-text text-center"><a href="#" class="link-secondary">More...</a></p>
                  <p class="card-text text-center"><a href="#" class="btn btn-primary">Request</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item p-2">
              <div class="card border-white rounded-4 trasparent">
                <!-- <div class="img-wrapper">
                  <img src="img/status.png" height="300" alt="...">
                </div> -->
                <div class="card-body">
                  <h5 class="card-title text-center">DONOR</h5>
                  <p class="card-text"><Span>NAME: </Span>Michael Joel</p>
                  <p class="card-text"><Span>GENDER: </Span>Male</p>
                  <p class="card-text"><Span>LOCATION: </Span>Tegeta kibaoni</p>
                  <p class="card-text"><Span>BLOOD GROUP: </Span>A+</p>
                  <p class="card-text"><Span>HEALTH: </Span>Good</p>
                  <p class="card-text text-center"><a href="#" class="link-secondary">More...</a></p>
                  <p class="card-text text-center"><a href="#" class="btn btn-primary">Request</a></p>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <!-- cards viewers-->
        <div class="container">
          <div class="row">
            <?php
            foreach($officer->viewDonors() as $donor):
            ?>
            <article class="col-md-4 col-lg-3">
              <div class="card-content rounded-4">
                <h5 class="card-title text-center">DONOR</h5>
                  <p class="card-text"><Span>NAME: </Span><?php echo $donor['full_name'];?></p>
                  <p class="card-text"><Span>GENDER: </Span><?php echo $donor['gender'];?></p>
                  <p class="card-text"><Span>LOCATION: </Span><?php echo $donor['address'];?></p>
                  <p class="card-text"><Span>BLOOD GROUP: </Span><?php echo $donor['blood_type'];?></p>
                  <p class="card-text"><Span>HEALTH: </Span><?php echo $donor['status'];?></p>
                  <p class="card-text text-center"><a href="#" class="link-secondary">More...</a></p>
                  <p class="card-text text-center"><a href="#" class="btn btn-primary">Request</a></p>
              </div>
              <!-- .card-content -->
            </article>
            <!-- .card -->
            <?php
            endforeach;
            ?>
        
          </div>
        </div>

        <!-- card viewers number 2-->
        <!-- Visit https://codepen.io/nicolaskadis/full/brQEOd/ for the latest, no js version! -->
<div class="container">
  <div class="row text-center">
    <div class="col-md-4 card-container">
      <div class="card card-flip p-2 rounded-4 trasparent">
        <div class="front card-block">
          <h5 class="card-title text-center">DONOR</h5>
                  <p class="card-text text-start"><Span>NAME: </Span>Michael Joel</p>
                  <p class="card-text text-start"><Span>GENDER: </Span>Male</p>
                  <p class="card-text text-start"><Span>LOCATION: </Span>Tegeta kibaoni</p>
                  <p class="card-text text-start"><Span>BLOOD GROUP: </Span>A+</p>
                  <p class="card-text text-start"><Span>HEALTH: </Span>Good</p>
                  <p class="card-text text-start text-center"><a href="#" class="link-secondary">More...</a></p>
                  <p class="card-text text-start text-center"><a href="#" class="btn btn-primary">Request</a></p>
        </div>
        <div class="back card-block">
          <img src="img/status.png" height="300px" alt="image">
          <a href="#" class="btn btn-outline-primary">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 card-container">
      <div class="card card-flip p-2 rounded-4 trasparent">
        <div class="front card-block">
          <h5 class="card-title text-center">DONOR</h5>
                  <p class="card-text text-start"><Span>NAME: </Span>Michael Joel</p>
                  <p class="card-text text-start"><Span>GENDER: </Span>Male</p>
                  <p class="card-text text-start"><Span>LOCATION: </Span>Tegeta kibaoni</p>
                  <p class="card-text text-start"><Span>BLOOD GROUP: </Span>A+</p>
                  <p class="card-text text-start"><Span>HEALTH: </Span>Good</p>
                  <p class="card-text text-start text-center"><a href="#" class="link-secondary">More...</a></p>
                  <p class="card-text text-start text-center"><a href="#" class="btn btn-primary">Request</a></p>
        </div>
        <div class="back card-block">
          <img src="img/status.png" height="300px" alt="image">
          <a href="#" class="btn btn-outline-primary">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 card-container">
      <div class="card card-flip p-2 rounded-4 trasparent">
        <div class="front card-block">
          <h5 class="card-title text-center">DONOR</h5>
                  <p class="card-text text-start"><Span>NAME: </Span>Michael Joel</p>
                  <p class="card-text text-start"><Span>GENDER: </Span>Male</p>
                  <p class="card-text text-start"><Span>LOCATION: </Span>Tegeta kibaoni</p>
                  <p class="card-text text-start"><Span>BLOOD GROUP: </Span>A+</p>
                  <p class="card-text text-start"><Span>HEALTH: </Span>Good</p>
                  <p class="card-text text-start text-center"><a href="#" class="link-secondary">More...</a></p>
                  <p class="card-text text-start text-center"><a href="#" class="btn btn-primary">Request</a></p>
        </div>
        <div class="back card-block">
          <img src="img/status.png" height="300px" alt="image">
          <a href="#" class="btn btn-outline-primary">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 card-container">
      <div class="card card-flip p-2 rounded-4 trasparent">
        <div class="front card-block">
          <h5 class="card-title text-center">DONOR</h5>
                  <p class="card-text text-start"><Span>NAME: </Span>Michael Joel</p>
                  <p class="card-text text-start"><Span>GENDER: </Span>Male</p>
                  <p class="card-text text-start"><Span>LOCATION: </Span>Tegeta kibaoni</p>
                  <p class="card-text text-start"><Span>BLOOD GROUP: </Span>A+</p>
                  <p class="card-text text-start"><Span>HEALTH: </Span>Good</p>
                  <p class="card-text text-start text-center"><a href="#" class="link-secondary">More...</a></p>
                  <p class="card-text text-start text-center"><a href="#" class="btn btn-primary">Request</a></p>
        </div>
        <div class="back card-block">
          <img src="img/status.png" height="300px" alt="image">
          <a href="#" class="btn btn-outline-primary">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 card-container">
      <div class="card card-flip p-2 rounded-4 trasparent">
        <div class="front card-block">
          <h5 class="card-title text-center">DONOR</h5>
                  <p class="card-text text-start"><Span>NAME: </Span>Michael Joel</p>
                  <p class="card-text text-start"><Span>GENDER: </Span>Male</p>
                  <p class="card-text text-start"><Span>LOCATION: </Span>Tegeta kibaoni</p>
                  <p class="card-text text-start"><Span>BLOOD GROUP: </Span>A+</p>
                  <p class="card-text text-start"><Span>HEALTH: </Span>Good</p>
                  <p class="card-text text-start text-center"><a href="#" class="link-secondary">More...</a></p>
                  <p class="card-text text-start text-center"><a href="#" class="btn btn-primary">Request</a></p>
        </div>
        <div class="back card-block">
          <img src="img/status.png" height="300px" alt="image">
          <a href="#" class="btn btn-outline-primary">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 card-container">
      <div class="card card-flip p-2 rounded-4 trasparent">
        <div class="front card-block">
          <h5 class="card-title text-center">DONOR</h5>
                  <p class="card-text text-start"><Span>NAME: </Span>Michael Joel</p>
                  <p class="card-text text-start"><Span>GENDER: </Span>Male</p>
                  <p class="card-text text-start"><Span>LOCATION: </Span>Tegeta kibaoni</p>
                  <p class="card-text text-start"><Span>BLOOD GROUP: </Span>A+</p>
                  <p class="card-text text-start"><Span>HEALTH: </Span>Good</p>
                  <p class="card-text text-start text-center"><a href="#" class="link-secondary">More...</a></p>
                  <p class="card-text text-start text-center"><a href="#" class="btn btn-primary">Request</a></p>
        </div>
        <div class="back card-block">
          <img src="img/status.png" height="300px" alt="image">
          <a href="#" class="btn btn-outline-primary">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="custom/style.js"></script>    
    
  </body>
</html>