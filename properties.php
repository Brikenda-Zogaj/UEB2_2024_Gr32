<?php 
session_start();?>
<?php
session_start();
include_once 'funksionet.php'; 


$emriSkedarit = "numri_vizitoreve.txt";


$numriVizitoreve = lexoSkedarin($emriSkedarit);


$numriVizitoreve++;


shkruajNeSkedar($emriSkedarit, $numriVizitoreve);
?>
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

<?php
 


  // Define constants
  define("BEDROOMS", 5);
  define("BATHROOMS", 4);

  // Define variables
  $location2 = "London";
  $priceLondon = "$1.000.000";


  // Concatenation
  $propertyTitle2 = "Forest Hill House";
  $propertyType2 = "House";


  // String functions
  $upperCaseLocation2 = strtoupper($location2);
  $propertyTitleLength2 = strlen($propertyTitle2);

  // Arithmetic operators
  $totalRooms2 = BEDROOMS + BATHROOMS;

 
?>

<?php
  // Define constants
  define("TOKYO_BEDROOMS", 4);
  define("TOKYO_BATHROOMS", 3);
  define("TOKYO_LivingRoom", 2);
  define("TOKYO_CarGarage", 1);

  // Define variables
  $tokyoLocation = "Tokyo";
  $tokyoPrice = "$980.000";

  // Concatenation
  $tokyoPropertyTitle = "Luxury House";
  $tokyoPropertyType = "House";

  // String functions
  $tokyoUpperCaseLocation = strtoupper($tokyoLocation);
  $tokyoPropertyTitleLength = strlen($tokyoPropertyTitle);

  // Arithmetic operators
  $tokyoTotalRooms = TOKYO_BEDROOMS + TOKYO_BATHROOMS+TOKYO_LivingRoom+TOKYO_CarGarage;
?>
<?php
  // Define constants
  define("NY_BEDROOMS", 2);
  define("NY_BATHROOMS", 2);
  define("NY_LivingRoom", 1);
 

  // Define variables
  $nyLocation = "New York";
  $nyPrice = "$1.903.000";

  // Concatenation
  $nyPropertyTitle = "Apartment";
  $nyPropertyType = "Apartment";

  // String functions
  $nyUpperCaseLocation = strtoupper($nyLocation);
  $nyPropertyTitleLength = strlen($nyPropertyTitle);

  // Arithmetic operators
  $nyTotalRooms = NY_BEDROOMS + NY_BATHROOMS+NY_LivingRoom;
?>
<?php
  // Define constants
  define("ITALY_BEDROOMS", 4);
  define("ITALY_BATHROOMS", 2);

  // Define variables
  $italyLocation = "Italy";
  $italyPrice = "$650.000";

  // Concatenation
  $italyPropertyTitle = "House with Beachfront";
  $italyPropertyType = "House";

  // String functions
  $italyUpperCaseLocation = strtoupper($italyLocation);
  $italyPropertyTitleLength = strlen($italyPropertyTitle);

  // Arithmetic operators
  $italyTotalRooms = ITALY_BEDROOMS + ITALY_BATHROOMS;
?>

<?php
  // Define constants
  define("MARBELLA_BEDROOMS", 4);
  define("MARBELLA_BATHROOMS", 2);
  define("MARBELLA_LivingRoom", 1);
  define("MARBELLA_CarGarage", 1);

  // Define variables
  $marbellaLocation = "Marbella";
  $marbellaPrice = "$890.000";

  // Concatenation
  $marbellaPropertyTitle = "Penthouse";
  $marbellaPropertyType = "Penthouse";

  // String functions
  $marbellaUpperCaseLocation = strtoupper($marbellaLocation);
  $marbellaPropertyTitleLength = strlen($marbellaPropertyTitle);

  // Arithmetic operators
  $marbellaTotalRooms = MARBELLA_BEDROOMS + MARBELLA_BATHROOMS+MARBELLA_LivingRoom+MARBELLA_CarGarage;
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
          <a href="./properties.php">Properties</a>
          <a href="./blog.PHP">Blog</a>
          <a href="./about.php">About Us</a>
          <a href="./contact.php">Contact</a>
          <a href="./login.php">
            <?php
            //kodi per me ndrru login logoja ne index
            if (isset($_SESSION['login']) && $_SESSION['login'] == 'true') {
                echo '<img src="./Assets/loged.webp" alt="Log In" style="width: 30px; height: 30px; position:relative; top: 5px; right: 5px;">';
            } else {
                echo '<img src="./Assets/signup.png" alt="Log In" style="width: 30px; height: 30px; position:relative; top: 5px; right: 5px;">';
            }
            ?>
        </a>
      </div>
  </nav>
      <?php
        if(isset($_SESSION['Visitors'])){// Session -numri i vizitave te nje faqeje
            $_SESSION['Visitors']++;
      }
      else
      $_SESSION['Visitors']=1;

      ?>

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
      <div class="col-lg-4 col-md-6 mb-4">
         <div class="card" style="width:350px;" id="London">
            <!-- Card content here -->
            <div id="imageCarousel2" class="carousel slide" data-ride="carousel2" data-interval="false">
              <ol class="carousel-indicators">
                <li data-target="#imageCarousel2" data-slide-to="0" class="active"></li>
                <li data-target="#imageCarousel2" data-slide-to="1"></li>
               
              </ol>
          
              <!-- Slides -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                <a href="./london.php"> <img src="./Assets/images/l4.jpeg" class="d-block w-100" alt="Property 1" style="object-fit: cover;">
                </div>
                <div class="carousel-item">
                  <img src="./Assets/images/l2.jpeg" class="d-block w-100" alt="Property 2" style="object-fit: cover;"></a>
                </div>
                
              </div>
          
              <!-- Controls -->
              <a class="carousel-control-prev" href="#imageCarousel2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#imageCarousel2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="card-body">
            <h5 class="card-title"><?php echo $propertyType2; ?></h5>
            <p class="card-text"><i><?php echo $propertyTitle2; ?></i></p>
            <p class="card-text"><b>Location: </b><?php echo $upperCaseLocation2; ?></p>
            <p class="card-text"><b>Price:</b><mark style="color: #61777f;"><?php echo $priceLondon; ?></mark></p>
            <p class="card-text"><b>Total Rooms:</b> <?php echo $totalRooms2; ?></p>
              </p>
              <div class="additional-info mt-3" style="display: none;" id="pp2">
                <p>
                  <b>5</b> Beds<br>
                  <b>4</b> Baths<br>
                  <br>
                  Your perfect spot for summer holiday<br>
                  Welcome to this adorable home in London.The large Screened in front porch is great for morning coffe.<br>
                  The kitchen includes a newer gas stainless steel stove,stainless steel counter top&a pantry.<br>
                  The bathroom is large with glass silding doors.You don't want to miss this diamond in the rough that has been <br>
                  lovingly maintained by the owner since 1998!
  
  
  
  
                </p>
                <form action="./london.php" method="post">

    
                <button type="submit" style="border-radius:5px; color:green">Book it now</button>
                </form>
                <br>
              </div>
              <a href="#" style="background-color: darkgray;" style="background-color: darkgray;" class="btn btn-success view-details"id="p2"><abbr title="More details" >View Details</abbr></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card" style="width:350;" id="Tokyo">
              <!-- Card content here -->
              <div id="imageCarousel3" class="carousel slide" data-ride="carousel3" data-interval="false">
                <ol class="carousel-indicators">
                  <li data-target="#imageCarousel3" data-slide-to="0" class="active"></li>
                  <li data-target="#imageCarousel3" data-slide-to="1"></li>
                 
                </ol>
            
                <!-- Slides -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./Assets/images/tokyo.jpeg" class="d-block w-100" alt="Property 1" style="object-fit: cover;">
                  </div>
                  <div class="carousel-item">
                    <img src="./Assets/images/tokyo2.jpeg" class="d-block w-100" alt="Property 2" style="object-fit: cover;">
                  </div>
                  
                </div>
            
                <!-- Controls -->
                <a class="carousel-control-prev" href="#imageCarousel3" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#imageCarousel3" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <div class="card-body">
              <h5 class="card-title"><?php echo $tokyoPropertyType; ?></h5>
            <p class="card-text"><i><?php echo $tokyoPropertyTitle; ?></i></p>
            <p class="card-text"><b>Location: </b><?php echo $tokyoUpperCaseLocation; ?></p>
            <p class="card-text"><b>Price:</b><mark style="color: #61777f;"><?php echo $tokyoPrice; ?></mark></p>
            <p class="card-text"><b>Total Rooms:</b> <?php echo $tokyoTotalRooms; ?></p>
                <div class="additional-info mt-3" style="display: none;" id="pp3">
                  <p>
                    <b>4</b> Beds<br>
                    <b>3</b> Baths<br>
                    <b>2</b> Living Room <br>
                    <b>1</b> Car Garage
                    <br>
                    This well maintained proerty features an open floor plan with 4 bedrooms, 3 baths and a spacious landscaped backyard that is perfect for entertainind and includes fire pit and covered dining area.The home has remodeled in 2016.
                
                  </p>
                  <form action="./tokyo.php" method="post">

    
                    <button type="submit" style="border-radius:5px; color:green">Book it now</button>
                    </form>
                    <br>
                </div>
                <a href="#" style="background-color: darkgray;" class="btn btn-success view-details"id="p3"><abbr title="More details">View Details</abbr></a>
              </div>
            </div>
            
      </div>
      </div>
      <div class="row hidden" style="display: none;">
        <!-- Property Cards -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card" style="width:350px" id="NewYork" >
            <!-- Card content here -->
            <div id="imageCarousel4" class="carousel slide" data-ride="carousel4" data-interval="false">
              <ol class="carousel-indicators">
                <li data-target="#imageCarousel4" data-slide-to="0" class="active"></li>
                <li data-target="#imageCarousel4" data-slide-to="1"></li>
               
              </ol>
          
              <!-- Slides -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./Assets/images/n6.jpeg" class="d-block w-100" alt="Property 1" style="object-fit: cover;">
                </div>
                <div class="carousel-item">
                  <img src="./Assets/images/marbella.jpg" class="d-block w-100" alt="Property 2" style="object-fit: cover;">
                </div>
                
              </div>
          
              <!-- Controls -->
              <a class="carousel-control-prev" href="#imageCarousel4" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#imageCarousel4" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="card-body">
                 
            <h5 class="card-title"><?php echo $nyPropertyType; ?></h5>
            <p class="card-text"><i><?php echo $nyPropertyTitle; ?></i></p>
            <p class="card-text"><b>Location: </b><?php echo $nyUpperCaseLocation; ?></p>
            <p class="card-text"><b>Price:</b><mark style="color: #61777f;"><?php echo $nyPrice; ?></mark></p>
            <p class="card-text"><b>Total Rooms:</b> <?php echo $nyTotalRooms; ?></p>
              <div class="additional-info mt-3" style="display: none;" id="pp4">
                <p>
                  <b>2</b> Beds<br>
                  <b>2</b> Baths<br>
                  <b>1</b>Living Room
                  <br>
                  City that never sleeps
                  <br>
                 This can be your best choice for someone who wants urban lifestyle. Enter this open concept to find the kitchen at the heart of the home, flanked by dining and family with a cozy fireplace. A functional mudroom and powder room rounds out this level.<i>Right size,right price</i>
                </p>
                <form action="./ny.php" method="post">

    
                <button type="submit" style="border-radius:5px; color:green">Book it now</button>
                </form>
                <br>
              </div>
              <a href="#" style="background-color: darkgray;" class="btn btn-success view-details" id="p4"><abbr title="More details">View Details</abbr></a>
            </div>
          </div>
        </div>
        <!-- Repeat similar structure for more property cards -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card" style="width: 350px;" id="Hollywood">
              <!-- Card content here -->
              <div id="imageCarousel5" class="carousel slide" data-ride="carousel5" data-interval="false">
                <ol class="carousel-indicators">
                  <li data-target="#imageCarousel5" data-slide-to="0" class="active"></li>
                  <li data-target="#imageCarousel5" data-slide-to="1"></li>
                 
                </ol>
            
                <!-- Slides -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./Assets/images/italy8.jpg" class="d-block w-100" alt="Property 1" style="object-fit: cover;">
                  </div>
                  <div class="carousel-item">
                    <img src="./Assets/images/italy7.jpeg" class="d-block w-100" alt="Property 2" style="object-fit: cover;">
                  </div>
                  
                </div>
            
                <!-- Controls -->
                <a class="carousel-control-prev" href="#imageCarousel5" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#imageCarousel5" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <div class="card-body">
              <h5 class="card-title"><?php echo $italyPropertyType; ?></h5>
            <p class="card-text"><i><?php echo $italyPropertyTitle; ?></i></p>
            <p class="card-text"><b>Location: </b><?php echo $italyUpperCaseLocation; ?></p>
            <p class="card-text"><b>Price:</b><mark style="color: #61777f;"><?php echo $italyPrice; ?></mark></p>
            <p class="card-text"><b>Total Rooms:</b> <?php echo $italyTotalRooms; ?></p>
                <div class="additional-info mt-3" style="display: none;" id="pp5">
                <b>4</b> Beds<br>
                  <b>2</b> Baths<br>
                  <p>
                    Live like a celebrity in this stunning.
                    With a private pool, plenty of natural light, and custom finishes throughout, you’ll feel like you’re living in a movie set.
                  </p>
                  
                  <form action="./italy.php" method="post">

    
                    <button type="submit" style="border-radius:5px; color:green">Book it now</button>
                    </form>
                    <br>
                </div>
                <a href="#" style="background-color: darkgray;" class="btn btn-success view-details" id="p5"><abbr title="More details">View Details</abbr></a>
              </div>
            </div>
          </div>

       





          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card" style="width: 350px;" id="Marbella">
              <!-- Card content here -->
              <div id="imageCarousel6" class="carousel slide" data-ride="carousel6" data-interval="false">
                <ol class="carousel-indicators">
                  <li data-target="#imageCarousel6" data-slide-to="0" class="active"></li>
                  <li data-target="#imageCarousel6" data-slide-to="1"></li>
                 
                </ol>
            
                <!-- Slides -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./Assets/images/marbela2.jpg" class="d-block w-100" alt="Property 1" style="object-fit: cover;">
                  </div>
                  <div class="carousel-item">
                    <img src="./Assets/images/marbella5.jpg" class="d-block w-100" alt="Property 2" style="object-fit: cover;">
                  </div>
                  
                </div>
            
                <!-- Controls -->
                <a class="carousel-control-prev" href="#imageCarousel6" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#imageCarousel6" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <div class="card-body">
           <h5 class="card-title"><?php echo $marbellaPropertyType; ?></h5>
            <p class="card-text"><i><?php echo $marbellaPropertyTitle; ?></i></p>
            <p class="card-text"><b>Location: </b><?php echo $marbellaUpperCaseLocation; ?></p>
            <p class="card-text"><b>Price:</b><mark style="color: #61777f;"><?php echo $marbellaPrice; ?></mark></p>
            <p class="card-text"><b>Total Rooms:</b> <?php echo $marbellaTotalRooms; ?></p>
            <div class="additional-info mt-3" style="display: none;" id="pp6">
                  <p>
                    <b>4</b> Rooms<br>
                    <b>2</b> Baths<br>
                    <b>1</b> Living room
                    <br>
                    <b>1</b> Car Garage
                    <br>
                    Beautiful holiday house in Marbella, Spain, 180m2 with four bedrooms – two double, one twin and one single. Large and bright living room with sofa bed  with access to terrace, fully equipped kitchen, two bathrooms and garage.
                  </p>
                  <form action="./marbella.php" method="post">

    
                    <button type="submit" style="border-radius:5px; color:green">Book it now</button>
                    </form>
                    <br>
                </div>
                <a href="#" style="background-color: darkgray;" class="btn btn-success view-details" id="p6"><abbr title="More details">View Details</abbr></a>
              </div>
            </div>
          </div>
      </div>
      
      <button id="toggleButton" class="btn btn-success ">Show more</button>
    </div>
    
</body>

    
    
    <!-- Bootstrap and JavaScript Bundle -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    
    <!-- Include your custom JavaScript file -->
    <script src="./Js/properties.js"></script>
    
        
    <script>

      document.addEventListener("DOMContentLoaded", function() {
          var hash = window.location.hash.replace('#', ''); // Remove the hash symbol
      
          // Hide all cards initially
          var cards = document.querySelectorAll('.card');
          cards.forEach(function(card) {
              card.style.display = 'none';
          });
      
          if (hash) {
              // Try to find a card with an id that matches the hash
              var selectedCard = document.getElementById(hash);
              if (selectedCard) {
                  // If found, display only this card
                  selectedCard.style.display = 'block';
              } else {
                  // If no matching card, show a default message or show all cards
                  // e.g., document.getElementById('defaultMessage').style.display = 'block';
                  cards.forEach(function(card) {
                      card.style.display = 'block';
                  });
              }
          } else {
              // If no hash, show all cards
              cards.forEach(function(card) {
                  card.style.display = 'block';
              });
          }
      });
      </script>




    <!-- Footer -->
    <footer class="site-footer">
      <div class="container">
             <div class="footer-logo">
                
                 <img src="./Assets/logo5.png" alt="Company Logo" class="footer-logo">
                
               
                 <div class="social-icons">
                  <a href="https://www.linkedin.com/feed/"><img src="./Assets/linkedin.webp" alt="LinkedIn"></a>
                  <a href="https://github.com/Brikenda-Zogaj/UEB20_23_Gr7"><img src="./Assets/git.webp" alt="GitHub"></a>
                  <a href="https://www.facebook.com/"><img src="./Assets/fb.webp" alt="Facebook"></a>

                 </div>
               </div>
             
             <div class="footer-resources">
                 <h3>Resources</h3>
                 <ul>
                   <li><a href="./index.php">Home</a></li>
                   <li><a href="./properties.php">Properties</a></li>
                   <li><a href="./about.php">About us</a></li>
                   <li><a href="./blog.php">Blog</a></li>
                   <li><a href="./contact.php">Contact Us</a></li>
               </ul>
             </div>
             
             <div class="footer-lokacioni">
                 <h3>Lokacioni</h3>
                 <p><strong>Address:</strong> Malisheve</p>
       
                 <p><strong>Phone:</strong> +383 49 685 045</p>
                 <p>+383 49 892 592</p>
                 <p><strong>Email:</strong> contact@realE.io</p>
             </div>
         </div>
         <br>
         &copy; 2024 Metropol Estate. All rights reserved 
   </footer>
<script>
  function toggleMenu() {
      var navLinks = document.getElementById("navLinks");
      if (navLinks.style.display === "block") {
          navLinks.style.display = "none";
      } else {
          navLinks.style.display = "block";
      }
  }
  </script>

</html>