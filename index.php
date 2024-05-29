<?php 
session_start();
function log_search($searchTerm) {
    $file = 'search_log.txt';
    $currentContent = '';

    if (file_exists($file)) {
        $handle = fopen($file, 'r');
        if ($handle) {
           
            $fileSize = filesize($file);
            if ($fileSize > 0) {
                $currentContent = fread($handle, $fileSize);
            }
            fclose($handle);
        } else {
            echo "Error: Unable to open file for reading.";
            return;
        }
    }
    $currentContent .= date('Y-m-d H:i:s') . " - " . $searchTerm . "\n";
    
    $handle = fopen($file, 'w');
    if ($handle) {
        fwrite($handle, $currentContent);
        fclose($handle);
    } else {
        echo "Error: Unable to open file for writing.";
        return;
    }
}

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $location=$_POST['searchInput'];

    log_search($location);

    switch($location){
        case 'Rio De Janeiro':
            header("Location: properties.php#RioDeJaneiro");
            exit();
        case 'Tokyo':
            header("Location: properties.php#Tokyo");
            exit();
        case 'London':
            header("Location: properties.php#London");
            exit();
        default:
            header("Location: properties.php"); 
            exit();
    }
} 
?>
<?php
// Lista  pa sortim
$locations = array("Rio De Janeiro", "Tokyo", "London","New York","Italy","Marbella");

// Sortimi i opsioneve 
asort($locations);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metropol Real Estate</title>
    <link rel="icon" href="./Assets/logo55.png" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    </head>

<body>
<?php include 'navbar.php'; ?>
    <?php if(isset($_SESSION['Visitors'])){
       $_SESSION['Visitors']++;}
       else $_SESSION['Visitors']=1;
    ?>

  <!-- Header with Search -->
  <header class="b">
        <div class="slideshow-container">
            <div class="mySlides fade">
    <video src="./Assets/BB.mp4" autoplay loop muted style="width:100%"> </video>
 </div>

 <div class="b-text">
        <h3 class="h2"><i>Discover Your Dream Home</i></h3>
        <h5>Explore top-rated properties across the globe.</h5>
        <div class="search-container">
            <div class="search-section">
                <form action="./index.php" method="post" id="searchForm">
                    <input type="text" id="searchInput" list="locationList" placeholder="Location" name="searchInput">
                    <datalist id="locationList">
                        
                    <?php foreach ($locations as $location): ?>
        <option value="<?php echo $location; ?>">
    <?php endforeach; ?>
                        
                    </datalist>
                    <output name="result" for="searchInput"></output>
                    <button class="location-button" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>


    </header>

  <!-- What We Do Section -->
  <section class="what-we-do">
        <div class="container">
            <div class="text-content">
                <h2>What we do?</h2>
                <p>Our real estate solutions help clients discover their perfect home. Our team consists of experienced agents, interior designers, and legal experts. All the right people that have the knowledge and experience to guide you through the buying or renting process.</p>
                <p>We offer personalized services with cutting-edge technology to provide virtual tours, market analysis, and investment advice to sustain long-term value.</p>
                <p>Our team is devoted to finding you not just a house, but a place to call home.</p>
                <a href="../Pages/blog.html" class="see-work-button">See our blog &rarr;</a>
            </div>
            <div class="image-content">
                <img src="./Assets/images/m5.jpeg" alt="Team at Work">
            </div>
        </div>
    </section>


 <!-- Featured Properties Section -->
 <section class="featured-properties">
 <h2>Featured Properties</h2>
 <div class="property-grid">
              <div class="property-item">
                     <img src="./Assets/images/italy3.jpg" alt="Property 1">
                     <div class="property-info">
                         <h3>Elegant houses</h3>
                         <p>Modern houses with a view of the beach.</p>
                         <a href="contact.php" class="btn btn-secondary">Contact Us</a>
                     </div>
                 </div>
                 <div class="property-item">
                     <img src="./Assets/images/marbella.jpg" alt="Property 1">
                     <div class="property-info">
                         <h3>Appartments</h3>
                         <p>Discover urban living at its finest apartments</p>
                         <a href="contact.php" class="btn btn-secondary">Contact Us</a>
                     </div>
                 </div>
                 <div class="property-item">
                     <img src="./Assets/images/t4.jpeg" alt="Property 1">
                     <div class="property-info">
                         <h3>Village house</h3>
                         <p>Excape to the countryside living in village houses</p>
                         <a href="contact.php" class="btn btn-secondary">Contact Us</a>
                     </div>
                 </div>
        </div>
 </section>

 <div class="testimonial-section" >
        <div class="testimonial-container">
               <h1 style="color: #4a5a63">What they say about us</h1>
               <br>
               <br>
               <div class="testimonial-arrow left-arrow">&#10094;</div>
               <div class="testimonials">
                   <div class="testimonial active">
                       <img src="./Assets/pe1.jpg" alt="" style="border-radius: 100%; width: 150px; height: 150px;">
                       <p class="testimonial-text">"Great service and support from the team!"</p>
                       <p class="testimonial-author">- Laura Doe, CEO of ABC Corp</p>
                   </div>
                   <div class="testimonial">
                       <img src="./Assets/pe2.jpg" alt="" style="border-radius: 100%; width: 150px; height: 150px;">
                       <p class="testimonial-text">"Their expertise and attention to detail were invaluable."</p>
                       <p class="testimonial-author">- Jane Smith, Director of XYZ Inc</p>
                   </div>
                  
               </div>
               <div class="testimonial-arrow right-arrow">&#10095;</div>
           </div>
     </div>

     <div class="partners-container">
        
        <div class="partners-heading-container">
            
          <h2 class="partners-heading">
            <p style="color: green;">Our Partners</p>
            We're going to Became
            <br> 
            Partners for the Long Run.</h2>
        </div>
        <div class="partner-logos">
          
          <a href="http://www.businessweb.com" target="_blank"><img src="./Assets/clients-1.png" alt="Business Web"></a>
          <a href="http://www.tlexpreso.com" target="_blank"><img src="./Assets/clients-2.png" alt="Tlexpreso"></a>
          <a href="http://www.bloomberg.com" target="_blank"><img src="./Assets/clients-3.png" alt="Bloomberg Business"></a>
          
        </div>
             
      </div>

    
      <?php include 'footer.php'; ?>
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
        
        
        

    <script src="./index.js"></script>

</body>
</html>