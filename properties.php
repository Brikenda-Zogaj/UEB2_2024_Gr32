<?php
  // Define constants
  define("RIO_BEDROOMS", 3);
  define("RIO_BATHROOMS", 3);
  define("RIO_LivingRoom", 1);
  define("RIO_CarGarage", 1);

  // Define variables
  $rioLocation = "Rio de Janeiro";
  $rioPrice = "$540.000";

  // Concatenation
  $rioPropertyTitle = "Small Villa";
  $rioPropertyType = "Villa";

  // String functions
  $rioUpperCaseLocation = strtoupper($rioLocation);
  $rioPropertyTitleLength = strlen($rioPropertyTitle);

  // Arithmetic operators
  $rioTotalRooms = RIO_BEDROOMS + RIO_BATHROOMS+RIO_LivingRoom+RIO_CarGarage;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metropol Properties</title>
    <link rel="icon" href="../Assets/logo55.png" type="image/x-icon">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="./Css/properties.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
</head>
<body>
     <!-- Navigation Bar -->
     <nav id="navbar" class="navbar">
      <button class="hamburger" onclick="toggleMenu()">☰</button>
      <div class="nav-logo">
         <a href="./index.php"> <img src="./Assets/logo5.png" alt="Logo"></a>
      </div>
      <div class="nav-links right" id="navLinks">
          <!-- <a href="../Pages/home.html">Home</a> -->
          <a href="./Pages/properties.html">Properties</a>
          <a href="./blog.PHP">Blog</a>
          <a href="./Pages/about.html">About Us</a>
          <a href="./Pages/contact.html">Contact</a>
          <a href="./Pages/login.html">
              <button type="submit">Log In</button>
          </a>
      </div>
  </nav>

  <div class="container mt-4">
    <h1>Welcome to Luxury Properties</h1>
    <div class="col-md-6">
          <!-- Search Form -->
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="searchInput" >
            <button class="btn btn-outline-success my-2 my-sm-0" style="color: #61777f;" type="submit" id="searchButton">Search</button>
          </form>
        </div>
        <br>
        
    <div class="row">
      <!-- Property Cards -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card" style="width: 350px;" id="RioDeJaneiro">
          <!-- Card content here -->
          <div id="imageCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators">
              <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#imageCarousel" data-slide-to="1"></li>
             
            </ol>
        
            <!-- Slides -->
            <div class="carousel-inner">
              <div class="carousel-item active">
               <img src="./Assets/images/t4.jpeg" class="d-block w-100" alt="Property 1" style="object-fit: cover;">
              </div>
              <div class="carousel-item">
                <img src="./Assets/images/r1.jpeg" class="d-block w-100" alt="Property 2" style="object-fit: cover;">
              </div>
              
            </div>
        
            <!-- Controls -->
            <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
          <h5 class="card-title"><?php echo $rioPropertyType; ?></h5>
            <p class="card-text"><i><?php echo $rioPropertyTitle; ?></i></p>
            <p class="card-text"><b>Location: </b><?php echo $rioUpperCaseLocation; ?></p>
            <p class="card-text"><b>Price:</b><mark style="color: #61777f;"><?php echo $rioPrice; ?></mark></p>
            <p class="card-text"><b>Total Rooms:</b> <?php echo $rioTotalRooms; ?></p>
            <div class="additional-info mt-3" style="display: none;" id="pp1">
              <p>
                <b>3</b> Rooms<br>
                <b>3</b> Baths<br>
                <b>1</b> Living Room
                <br>
                <b>1</b> Car Garage
                <br>
                10 min walk to Ocean
                <br>
                Entering your new home, you’ll step onto your very private porch.<br>
                 Surrounded by redwoods for some relaxation when you arrive home from work or play. You’ll then open your door to the first floor, where you will enjoy a spacious living room with high ceilings, a fireplace for cold winter nights, dual pane windows and nice roll-up window shutters, 
               a cozy dining room with pass thru to a perfect size kitchen with lots of cabinets.”
              </p>
              
              <form action="./rio.php" method="post">

    
    <button type="submit" style="border-radius:5px; color:green">Book it now</button>
</form>
<br>
            </div>
            <a href="#" style="background-color: darkgray;" class="btn btn-success view-details" id="p1"><abbr title="More details" >View Details</abbr></a>
            
  
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>