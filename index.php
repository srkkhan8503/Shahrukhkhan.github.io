<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sharma reasturants</title>
	 <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  

<link rel="stylesheet" type="text/css" href="style.css">


 <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }

  
  </style>

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
          SERVICES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="drinks.php">DRINK</a>
          <a class="dropdown-item" href="coffee.php">COFFEE</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="snaks.php">SNACKS</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACT</a>
      </li>
    </ul>
   
  </div>
</nav>



<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/crowsal4.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>welcome to Sharma reasturants</h3>
        <p>there have a all dish and all types of drinking available</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/crowsal2.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>this is over mash</h3>
        <p>the most beautiful thig is more confertable and more beautiful</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/crowsal3.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
     <div class="carousel-item">
      <img src="image/crowsal1.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</header>

<!-- about us -->

  <section>
    <div class="about-image">
  	<div class="container">	
  	<h1 class="text-center text-capitalize mt-5">ABOUT US</h1>
  	<hr class="w-25 mx-auto mb-5">
  	<div class="row mb-5">
  		<div class="col-lg-6 col-md-6 col-sm-12">
        <img src="image/khan.jpg" class="img-fluid">
        </div>
  		<div class="col-lg-6 col-md-6 col-sm-12 text-center text-capitalize">
  			<h1>Wanna know me</h1>
  			<hr class="w-50 mx-auto ">
  			<p>Food service regulations have historically been built around hygiene and protection of the consumer's health. However, restaurant workers face many health hazards such as long hours, low wages, minimal benefits, discrimination, high stress, and poor working conditions. Along with the COVID-19 pandemic, much attention has been drawn to the prevention of community transmission in restaurants and other public settings.</p>
  			<button class="btn bg-success text-white">Wanna know me</button>
  		</div>
  	</div>
  </div>
</div>
  </section>


<!-- servivces part-->
  <section>
  	<div class="container">	
  	<h1 class="text-center text-capitalize mt-5">OVER CHEAF</h1>
  	<hr class="w-25 mx-auto mb-5">

<div class="row text-center">
   <div class="col-lg-4 col-md-4 col-sm-12">
   	<div class="card">
  <img class="card-img-top" src="image/hero1.jpg" alt="Card image" height="300px" width="300px">
  <div class="card-body">
    <h4 class="card-title">Ramesh saini</h4>
    <p class="card-text">This is head cheaf</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
 </div>

<div class="col-lg-4 col-md-4 col-sm-12">
   	<div class="card">
  <img class="card-img-top" src="image/hero2.jpg" alt="Card image" height="300px" width="300px">
  <div class="card-body">
    <h4 class="card-title">Reena jain</h4>
    <p class="card-text">This is line cook</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
 </div>

 <div class="col-lg-4 col-md-4 col-sm-12">
   	<div class="card">
  <img class="card-img-top" src="image/hero3.jpg" alt="Card image" height="300px" width="300px">
  <div class="card-body">
    <h4 class="card-title">Rahul sharma</h4>
    <p class="card-text">this is prep cook</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
 </div>

</div>
</div>

  </section>

  

  <!-- gallery-->
  <div class="container">	
  	<h1 class="text-center text-capitalize mt-5">GALLERY</h1>
  	<hr class="w-25 mx-auto mb-5">

  	<div class="row">
  		<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
  		<img src="image/zero1.jpg" class="img-fluid">	
  		</div>
  		<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
  		<img src="image/zero2.jpg" class="img-fluid">	
  		</div>
  		<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
  		<img src="image/zero3.jpg" class="img-fluid">	
  		</div>
  		<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
  		<img src="image/zero4.jpg" class="img-fluid">	
  		</div>
  		<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
  		<img src="image/zero5.jpg" class="img-fluid">	
  		</div>
  		<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
  		<img src="image/snaks.jpg" class="img-fluid">	
  		</div>
  		<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
  		<img src="image/zero7.jpg" class="img-fluid">	
  		</div>
  		<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
  		<img src="image/zero8.jpg" class="img-fluid">	
  		</div>
  		<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
  		<img src="image/zero9.jpg" class="img-fluid">	
  		</div>  		
  		</div>
  	</div>

    <!-- Registeration form-->

    <section class="mb-5">
     <div class="container">  
    <h1 class="text-center text-capitalize mt-5">REGISTRATION HERE</h1>
    <hr class="w-25 mx-auto mb-5">
     
     <div class="w-50 m-auto">
     <form action="registration.php" method="POST">
      <div class="form-group">
        <label for="name">NAME:</label>
        <input type="text" name="name" id="name" autocomplete="off" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="email">Email Id:</label>
        <input type="email" name="email" id="email" autocomplete="off" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="mobile">Mobile no:</label>
        <input type="number" name="mobile" id="mobile" autocomplete="off" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="comment">comment:</label>
       <textarea class="form-control" name="comment" id="comment" required></textarea>
        </div>
      <button  type="submit " class="btn btn-success ">SEND MESSAGE</button>
</div>
</form>
</div>
</section>
             <!-- footer-->

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