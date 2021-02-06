<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sharma reasturants</title>
   <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  

<link rel="stylesheet" type="text/css" href="style.css">



</head>
<body> 

  <!--navbar header-->
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 l <a class="navbar-brand" href="#">SHARMA REASTAURANTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span cass="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="menu.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">DRINK</a>
          <a class="dropdown-item" href="#">COFFEE</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">SNACKS</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACT</a>
      </li>
    </ul>
   
  </div>
</nav>

 <!-- gallery-->
  <div class="container">

    <h1 class="text-center text-capitalize mt-5">GALLERY</h1>
    <hr class="w-25 mx-auto mb-5">

    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
      <img src="image/zero1.jpg" class="img-fluid"> 
      </div>
      
      <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
      <img src="image/zero3.jpg" class="img-fluid"> 
      </div>
      
      <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
      <img src="image/zero7.jpg" class="img-fluid"> 
      </div>
     
      <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
      <img src="image/zero9.jpg" class="img-fluid"> 
      </div>      
      </div>
    </div>

                <!-- Start Footer -->
  <footer class="footer-area bg-f">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <h3>About Us</h3>
          <p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui.</p>
        </div>
       
        <div class="col-lg-4 col-md-4">
          <h3>Contact information</h3>
          <p class="lead">Deshwali colony islampura makrana 341505</p>
          <p class="lead"><a href="#">8503045715</a></p>
          <p><a href="#">srkkhan8503@gmail.com</a></p>
        </div>
        <div class="col-lg-4 col-md-4">
          <h3>Opening hours</h3>
          <p><span class="text-color">Monday: </span>Closed</p>
          <p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
          <p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
          <p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
        </div>
      </div>
    </div>
    
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="company-name">All Rights Reserved. &copy; 2018 <i></i>Sharma Restaurant</i> Design By : Shahrukh khan</p>
          
          </div>
        </div>
      </div>
    </div>
    
  </footer>
  <!-- End Footer -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>